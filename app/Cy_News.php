<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cy_News extends Model
{
    protected $table = 'cy_news';
    protected $fillable = [
        'img', 'title', 'content', 'date', 'txtdate', 'location'
    ];
}
