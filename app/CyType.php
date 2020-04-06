<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CyType extends Model
{
    protected $table = 'cy_types';
    protected $fillable = [
        'type' , 'img', 'content', 'sort'
    ];

    
}
