<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScProduct extends Model
{
    protected $table = 'sc_products';
    protected $fillable = [
        'type' , 'img', 'title', 'content', 'price' , 'sort'
    ];

    public function sc_product_types()
    {
        return $this->belongsTo('App\ScType','type');
    }
}
