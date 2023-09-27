<?php

namespace App\Http\Controllers;

use AfricasTalking\SDK\AfricasTalking;
use App\Models\Churches;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ChurchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.churches');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_church(Request $request)
    {
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('church_photos'), $fileName);// Store in 'storage/app/uploads' directory

        }

            Churches::create(['name' => $request->name, 'archdeconary' => $request->archdeconary, 'deanery'=>$request->deanery, 'bio' => $request->bio,  'photo'=>$fileName,'facebook'=>$request->facebook,'location'=>$request->location,'youtube'=>$request->youtube,'uploaded_by'=>$request->uploaded_by,'website'=>$request->website,'contact'=>$request->contact]);

                $message = "Thank you ".$request->uploaded_by." For submitting this form";
        $this->sendMessageProper($request->contact, $message);
//        $this->sendMessageProper("0734139465", "Hi ".$user." have contacted you, view message here https://mailtrap.io/inboxes/1787214/messages");

        Alert::success('Thank  you', $request->contact.' For submitting this form');
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


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Churches  $churches
     * @return \Illuminate\Http\Response
     */
    public function show(Churches $churches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Churches  $churches
     * @return \Illuminate\Http\Response
     */
    public function edit(Churches $churches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Churches  $churches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Churches $churches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Churches  $churches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Churches $churches)
    {
        //
    }
}
