<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScType extends Model
{
    protected $table = 'sc_types';
    protected $fillable = [
        'type' , 'img', 'content', 'sort'
    ];
}
