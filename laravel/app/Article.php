<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public $fillable = ['title', 'slug', 'content', 'image'];

}
