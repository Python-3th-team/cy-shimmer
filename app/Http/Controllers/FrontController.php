<?php

namespace App\Http\Controllers;

use App\News;
use App\Cy_News;
use App\Sc_News;
use App\CyProduct;
use App\ScProduct;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front/index');
    }

    public function sc_shop()
    {
        $news_data = Sc_News::all();
        return view('front/sc_shop/sc_shop' , compact('news_data'));
    }
    public function cy_plant()
    {
        $news_data = Cy_News::all();
        return view('front/cy_plant/cy_plant' , compact('news_data'));
    }
    public function shop_store()
    {
        return view('front/shop_store');
    }
    public function cy_store()
    {
        $products = CyProduct::all()->sortByDesc('sort');
        return view('front/cy_plant/cy_store' , compact('products'));
    }
    public function sc_store()
    {
        $products = ScProduct::all()->sortByDesc('sort');

        return view('front/sc_shop/sc_store' , compact('products'));
    }

    public function cy_store_item($item_id)
    {
        $product = CyProduct::find($item_id);
        return view('front/cy_plant/cy_store_item' , compact('product'));
    }

    // public function sc_shop(){
    //     $news_data = News::all();
    //     return view('admin/news/sc_shop' , compact('news_data'));
    // }
    // public function sc_shop_detail($id){

    //     $news = News::find($id);

    // return view('admin/news/sc_shop_detail' , compact('news'));
    // }
}
