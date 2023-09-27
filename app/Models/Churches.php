<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Churches extends Model
{
    use HasFactory;

    public $table = 'churches';
    protected $fillable = ["name","archdeconary","deanery","bio","photo","facebook","location","youtube",	"uploaded_by",	"website"	,"contact"];
}
