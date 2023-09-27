<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Jorenvh\Share\Share;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function index(Request $request)
    {


        if ($request->hasFile('img_1')) {
            $file = $request->file('img_1');
            $fileName1 = $file->getClientOriginalName();
            $file->move(public_path('NewsImages'), $fileName1);// Store in 'storage/app/uploads' directo


            if ($request->hasFile('img_2')) {
                $file = $request->file('img_2');
                $fileName2 = $file->getClientOriginalName();
                $file->move(public_path('NewsImages'), $fileName2);


                if ($request->hasFile('img_3')) {
                    $file = $request->file('img_3');
                    $fileName3 = $file->getClientOriginalName();
                    $file->move(public_path('NewsImages'), $fileName3);


                    if ($request->hasFile('img_4')) {
                        $file = $request->file('img_4');
                        $fileName4 = $file->getClientOriginalName();
                        $file->move(public_path('NewsImages'), $fileName4);


                        if ($request->hasFile('img_5')) {
                            $file = $request->file('img_5');
                            $fileName5 = $file->getClientOriginalName();
                            $file->move(public_path('NewsImages'), $fileName5);

                            $news = new News();
                            $news->title = $request->title;
                            $news->description = $request->description;
                            $news->img_1 = $fileName1;
                            $news->img_2 = $fileName2;
                            $news->img_3 = $fileName3;
                            $news->img_4 = $fileName4;
                            $news->img_5 = $fileName5;

                            $news->save();

                            Alert::success('Success', ' New Uploaded Successful');

                            return redirect()->back();
                        }


                    }

                }


            }
        }
    }


    public function delete($id)
    {

        News::destroy($id);

        Alert::success('Success', ' News deleted');
        return redirect()->back();

    }

    public function single_news($id){
        $news = News::find($id);
        $News = \App\Models\News::inRandomOrder()->take(5)->get();





        $shareNews = (new \Jorenvh\Share\Share)->currentPage();

        $fb = (new \Jorenvh\Share\Share)->currentPage()->facebook()->getRawLinks();
        $whatsapp = (new \Jorenvh\Share\Share)->currentPage()->whatsapp()->getRawLinks();
        $telegram = (new \Jorenvh\Share\Share)->currentPage()->telegram()->getRawLinks();
        $twitter = (new \Jorenvh\Share\Share)->currentPage()->twitter()->getRawLinks();
        $advert = \App\Models\Advert::inRandomOrder()->take(1)->get();


        $data = [
                'News' => $news,
                'Fb' => $fb,
                'Whatsapp' => $whatsapp,
                'Telegram' => $telegram,
                'Twitter'  => $twitter,
                'read_also' => $News,
                'adverts' => $advert,
            ];



        return view('pages.Single_news',$data);

    }
}
