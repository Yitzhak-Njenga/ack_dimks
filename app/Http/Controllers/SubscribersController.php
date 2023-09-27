<?php

namespace App\Http\Controllers;

use App\Models\subscribers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//        Subscribers::create(['email'=>$request->email]);

        $subscriber = subscribers::updateOrCreate(['email'=>$request->email]);
        $subscriber->email = $request->email;
        $subscriber->save();

        Alert::success('Success',   'Upploaded succesful');
        return redirect()->back();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subscribers $subscribers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscribers $subscribers)
    {
        //
    }
}
