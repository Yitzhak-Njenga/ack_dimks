<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public $table = 'news';
    protected $fillable = ['title','description','img_1','img_2','img_3','img_4','img_5'];

}
