<?php

use App\Models\Sales;
use Illuminate\Support\Facades\DB;
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
    $News = \App\Models\News::inRandomOrder()->take(4)->get();

    $data =[
        'News' => $News
    ];

    return view('pages.home',$data);
});
Route::get('/contact',function (){
    return view('pages.contact');
});
Route::get('/all_news',function (){
    $news = \App\Models\News::paginate(3);

    $data = [
        'News' => $news
    ];
    return view('pages.all_news',$data);
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

    $allNews = \App\Models\News::all()->count();
    $allevents= \App\Models\Event::all()->count();
    $allmessages = \App\Models\Contacts::all()->count();
    $data = [
        'allnews' => $allNews,
        'allevents' => $allevents,
        'allmessages' => $allmessages

    ];

    return view("admin.dashboard",$data);
});
Route::get('/bulk_sms',function (){
    return view("admin.bulk_sms");
});
Route::get('/messages',function (){
    $messages = \App\Models\Contacts::all();

    $data = [
        'message' => $messages
    ];
    return view("admin.messages",$data);
});
Route::get('/upload_news',function (){

    $all_news = \App\Models\News::all();

    $data = [
        'new' => $all_news
    ];
    return view("admin.news",$data);
});
Route::get('delete_news/{id}',[\App\Http\Controllers\NewsController::class,'delete']);
Route::get('/churches',function (){
    return view("admin.churches");
});
Route::get('/events',function (){
    $events = \App\Models\Event::all();

    $data = [
        'event' => $events
    ];

    return view("admin.events",$data);
});
Route::get('delete_event/{id}',[\App\Http\Controllers\EventController::class,'delete']);
Route::get('/admin',function (){
    return view('admin.login');
});
Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);
Route::post('/upload',[\App\Http\Controllers\NewsController::class,'index']);
Route::post('/uploadEvent',[\App\Http\Controllers\EventController::class,'index']);
Route::get('/logout',function (){
    Session::forget('user');
    toast('Logged out Successful','success');
    return redirect('/admin');
});
Route::post('bulk_sms',[\App\Http\Controllers\BulkSmsController::class,'index']);
Route::post('/contact',[\App\Http\Controllers\ContactsController::class,'index']);
Route::get('/{id}',[\App\Http\Controllers\NewsController::class,'single_news']);

