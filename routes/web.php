<?php

use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('nav');
// });
Route::get('/' , 'FrontController@index');
Route::get('/sc_shop' , 'FrontController@sc_shop');
Route::get('/cy_plant' , 'FrontController@cy_plant');
Route::get('/shop_store' , 'FrontController@shop_store');
Route::get('/cy_store' , 'FrontController@cy_store');
Route::get('/sc_store' , 'FrontController@sc_store');
Route::get('/cy_store_item/{item_id}' , 'FrontController@cy_store_item');
Route::get('/sc_store_item/{item_id}' , 'FrontController@sc_store_item');
// Route::get('/sc_shop' , 'FrontController@sc_shop');
// Route::get('/sc_shop_detail/{id}', 'FrontController@sc_shop_detail');

// 購物車
Route::post('/add_cart_cy/{cyID}', 'FrontController@add_cart_cy');
Route::post('/add_cart_sc/{scID}', 'FrontController@add_cart_sc');
Route::get('/cart_total', 'FrontController@cart_total');
Route::post('/cart_update/{cartID}', 'FrontController@cart_update');
Route::post('/cart_delete/{cartID}', 'FrontController@cart_delete');
Route::get('/cart_checkout', 'FrontController@cart_checkout');
Route::post('/cart_checkout', 'FrontController@post_cart_checkout');

Route::prefix('cart_ecpay')->group(function(){
    Route::post('notify', 'FrontController@notifyUrl')->name('notify');
    Route::post('return', 'FrontController@returnUrl')->name('return');
});

Route::get('/products' , 'FrontController@products');
Route::get('/products_detail/{id}', 'FrontController@products_detail');


Auth::routes();
Route::group(['middleware' => ['admin'], 'prefix' => '/home'], function () {
    //最新消息
    //微光最新消息
    Route::get('/', 'HomeController@index');

    Route::get('/sc_shop/sc_news', 'Sc_NewsController@index');

    Route::get('/sc_shop/sc_news/create', 'Sc_NewsController@create');
    Route::post('/sc_shop/sc_news/store', 'Sc_NewsController@store');

    Route::get('/sc_shop/sc_news/edit/{id}', 'Sc_NewsController@edit');
    Route::post('/sc_shop/sc_news/update/{id}', 'Sc_NewsController@update');

    Route::post('/sc_shop/sc_news/delete/{id}', 'Sc_NewsController@delete');

    //千暘最新消息
    Route::get('/', 'HomeController@index');

    Route::get('/cy_plant/cy_news', 'Cy_NewsController@index');

    Route::get('/cy_plant/cy_news/create', 'Cy_NewsController@create');
    Route::post('/cy_plant/cy_news/store', 'Cy_NewsController@store');

    Route::get('/cy_plant/cy_news/edit/{id}', 'Cy_NewsController@edit');
    Route::post('/cy_plant/cy_news/update/{id}', 'Cy_NewsController@update');

    Route::post('/cy_plant/cy_news/delete/{id}', 'Cy_NewsController@delete');

    //產品管理
    // Route::get('products','ProductsController@index');

    // Route::get('products/create','ProductsController@create');

    // Route::post('products/store','ProductsController@store');

    // Route::get('products/edit/{id}','ProductsController@edit');

    // Route::post('products/update/{id}','ProductsController@update');

    // Route::post('products/delete/{id}','ProductsController@delete');

    //產品類型管理
    // Route::get('/productType', 'ProductTypeController@index');

    // Route::get('/productType/create', 'ProductTypeController@create');

    // Route::post('/productType/store', 'ProductTypeController@store');

    // Route::get('/productType/edit/{id}', 'ProductTypeController@edit');

    // Route::post('/productType/update/{id}', 'ProductTypeController@update');

    // Route::post('/productType/delete/{id}', 'ProductTypeController@delete');




    // 微光商品類型管理
    Route::group(['prefix' => 'sc_product_type'], function () {
    // 新增
    Route::get('/', 'ScTypeController@index');
    Route::get('/create', 'ScTypeController@create');
    // 編輯
    Route::post('/store', 'ScTypeController@store');
    Route::get('/edit/{id}', 'ScTypeController@edit');
    Route::post('/update/{id}', 'ScTypeController@update');
    Route::post('/delete/{id}', 'ScTypeController@destroy');
    });

    // 千暘商品類型管理
    Route::group(['prefix' => 'cy_product_type'], function () {
        // 新增
        Route::get('/', 'CyTypeController@index');
        Route::get('/create', 'CyTypeController@create');
        // 編輯
        Route::post('/store', 'CyTypeController@store');
        Route::get('/edit/{id}', 'CyTypeController@edit');
        Route::post('/update/{id}', 'CyTypeController@update');
        Route::post('/delete/{id}', 'CyTypeController@destroy');
        });

    // 微光商品類型管理
    Route::group(['prefix' => 'sc_product_list'], function () {
    // 新增
    Route::get('/', 'ScProductController@index');
    Route::get('/create', 'ScProductController@create');
    // 編輯
    Route::post('/store', 'ScProductController@store');
    Route::get('/edit/{id}', 'ScProductController@edit');
    Route::post('/update/{id}', 'ScProductController@update');
    Route::post('/delete/{id}', 'ScProductController@destroy');
    });

    // 千暘商品類型管理
    Route::group(['prefix' => 'cy_product_list'], function () {
        // 新增
        Route::get('/', 'CyProductController@index');
        Route::get('/create', 'CyProductController@create');
        // 編輯
        Route::post('/store', 'CyProductController@store');
        Route::get('/edit/{id}', 'CyProductController@edit');
        Route::post('/update/{id}', 'CyProductController@update');
        Route::post('/delete/{id}', 'CyProductController@destroy');
        });





    // summernote ImgUpload
    Route::post('/ajax_upload_img', 'ImgUploadController@ajax_upload_img');
    Route::post('/ajax_delete_img', 'ImgUploadController@ajax_delete_img');

});





