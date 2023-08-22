<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/contact',function (){
    return view('pages.contact');
});
Route::get('/news',function (){
    return view('pages.news');
});
Route::get('/events',function (){
    return view('pages.Events');
});
Route::get('/support',function (){
    return view('pages.support');
});
Route::get('/about',function (){
    return view('pages.about');
});
Route::get('/dashboard',function (){
    return view("admin.dashboard");
});
Route::get('/bulk_sms',function (){
    return view("admin.bulk_sms");
});
Route::get('/messages',function (){
    return view("admin.messages");
});
Route::get('/upload_news',function (){
    return view("admin.news");
});
Route::get('/churches',function (){
    return view("admin.churches");
});
Route::get('/events',function (){
    return view("admin.events");
});
Route::get('/admin',function (){
    return view('admin.login');
});
Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);


