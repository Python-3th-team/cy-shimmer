<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sc_News extends Model
{
    protected $table = 'sc_news';
    protected $fillable = [
        'img', 'title', 'content', 'date', 'txtdate', 'location'
    ];
}
