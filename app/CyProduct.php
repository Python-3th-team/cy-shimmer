<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CyProduct extends Model
{
    protected $table = 'cy_products';
    protected $fillable = [
        'type' , 'img', 'title', 'content', 'price' , 'sort'
    ];

    public function cy_product_types()
    {
        return $this->belongsTo('App\CyType','type');
    }
}
