<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'date' => 'required|string|max:255',
            'poster' => 'file|mimes:jpg,png,svg,jpeg',
        ]);


        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('poster'), $fileName);// Store in 'storage/app/uploads' directory

            Event::create(['title' => $request->title, 'date' => $request->date, 'poster' => $fileName]);

            Alert::success('Success', ' Event Uploaded Successful');
            return redirect()->back();
        }
    }
    public function delete($id){
        Event::destroy($id);

        Alert::success('Success', ' Event deleted');
        return redirect()->back();

    }
}
