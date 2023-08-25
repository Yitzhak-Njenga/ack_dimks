<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2655',
            'images[]'=> 'file|mimes:jpg,png,svg,jpeg',
        ]);

        if (!$validator->fails()){
            if ($request->hasfile('images')) {
                foreach ($request->images as $file) {
                    $filename = $file->getClientOriginalName();
                    $file->move(public_path('NewsImages'), $filename);

                }



                }
            }


        $news = new News();
        $news->title =$request->title;
        $news->description = $request->description;
        $news->img_1 = $filename;
        $news->img_2 = $filename;
        $news->img_3 = $filename;
        $news->img_4 = $filename;
        $news->img_5 = $filename;


        $news->save();

        return redirect()->back();
        }












}
