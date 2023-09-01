<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use App\Mail\Contactmail;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ContactsController extends Controller
{

    public function index(Request $request)
    {

        $contact = new Contacts();


        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->number = $request->number;


//        return $contact;

        $contact->save();

        $user = $request->name;
        $number = $request->number;


        $message = "Thank you ".$user." For Contacting Us, we have received your message";
        $this->sendMessageProper($number, $message);
//        $this->sendMessageProper("0734139465", "Hi ".$user." have contacted you, view message here https://mailtrap.io/inboxes/1787214/messages");

        Alert::success('Thank  you', $user.' For contacting us,we have received your message');
        return redirect()->back();

    }


    public function sendMessageProper($phone, $message)
    {
        if (Str::startsWith($phone, "07")) {
            $phone = '+254' . (substr(($phone), 1));
        } elseif (Str::startsWith($phone, "7")) {
            $phone = Str::start($phone, '+254');
        } elseif (Str::startsWith($phone, "254")) {
            $phone = Str::start($phone, '+');
        }
        $apiKey = env('AT_API_KEY', 'KEY');
        $username = env('AT_USERNAME');
        $AT = new AfricasTalking($username, $apiKey);
        $sms = $AT->sms();
        $result = $sms->send([
            'from' => 'ACK_DMKS',
            'to' => $phone,
            'message' => $message
        ]);
    }

    public function delete($id){
        Contacts::destroy($id);

        Alert::success('Success', ' Message deleted');
        return redirect()->back();
    }

}

