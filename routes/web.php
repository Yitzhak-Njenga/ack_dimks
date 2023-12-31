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
    Session::forget('user');
    $News = \App\Models\News::inRandomOrder()->take(4)->get();
    $featured_news = \App\Models\News::inRandomOrder()->take(5)->get();
    $events = \App\Models\Event::all()->take(4);
    $advert = \App\Models\Advert::inRandomOrder()->take(1)->get();




    $data =[
        'News' => $News,
        'events' => $events,
        'featured_news' => $featured_news,
        'adverts' => $advert
    ];

    return view('pages.home',$data);
});
Route::get('/contact',function (){
    $advert = \App\Models\Advert::inRandomOrder()->take(1)->get();
    $data =[
        'adverts' => $advert
        ];
    return view('pages.contact',$data);
});
Route::get('/all_news',function (){
    $news = \App\Models\News::paginate(5);
    $advert = \App\Models\Advert::inRandomOrder()->take(1)->get();


    $data = [
        'adverts' => $advert,
        'News' => $news
    ];
    return view('pages.all_news',$data);
});
Route::get('all_Events',function (){
    $events = \App\Models\Event::paginate(3);
    $advert = \App\Models\Advert::inRandomOrder()->take(1)->get();



    $data = [
        'event' => $events,
        'adverts' => $advert,
    ];
    return view('pages.Events',$data);
});
Route::get('/events',function (){
    return view('pages.Events');
});
Route::get('/support',function (){
    return view('pages.support');
});
Route::get('mission',function(){
    return view('pages.mission');
});
Route::get('/bishops',function (){
    return view('pages.bishops');
});
Route::get('/about',function (){
    return view('pages.about');
});
Route::get('/kama',function (){
   return view('pages.kama');
});

Route::get('/kama',function (){
   return view('pages.kama');
});
Route::get('/mothers_union',function (){
   return view('pages.mothers_union');
});
Route::get('/choir',function (){
   return view('pages.choir');
});
Route::get('/dac',function (){
   return view('pages.dac');
});
Route::get('/children_teens_youth',function (){
   return view('pages.children_teens_youth');
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

    $all_news = \App\Models\News::orderby('id','desc')->get();

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
Route::get('/meet_bishop',function (){
    return view('pages.meet_bishop');
});
Route::get('/adverts',function (){
    $adverts = \App\Models\Advert::orderby('id','desc')->get();

    $data = [
        'adverts'=>$adverts
    ];

    return view('admin.adverts',$data);
});
Route::post('/subcribers',[\App\Http\Controllers\SubscribersController::class,'index']);
Route::get('/churches',[\App\Http\Controllers\ChurchesController::class,'index']);
Route::post('dmks/churches',[\App\Http\Controllers\ChurchesController::class,'add_church']);
Route::post('upload_advert',[\App\Http\Controllers\AdvertController::class,'index']);
Route::post('delete_advert',[\App\Http\Controllers\AdvertController::class,'delete']);
Route::post('bulk_sms',[\App\Http\Controllers\BulkSmsController::class,'index']);
Route::post('/contact',[\App\Http\Controllers\ContactsController::class,'index']);
Route::get('/delete_message/{id}',[\App\Http\Controllers\ContactsController::class,'delete']);
Route::get('/{id}',[\App\Http\Controllers\NewsController::class,'single_news']);

