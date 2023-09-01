<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    function login(Request $request){


        $user = User::where(['email'=>$request->email])->first();


        if (!$user || !Hash::check($request->password,$user->password))
        {
            Alert::error('Oops', 'Please try again');

            return redirect()->back();


        }
        else{
            Alert::success('Success', ' You have login Successful');
            $request->session()->put('user',$user);
            return redirect('/dashboard');
        }


    }
}
