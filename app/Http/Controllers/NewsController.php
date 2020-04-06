<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class NewsController extends Controller
{
    public function index(){
        $all_news = News::all();

        return view('admin/news/index' , compact('all_news'));
    }

    public function create(){
        return view('admin/news/create');
    }

    public function store(Request $request){
        $news_data = $request->all();

// 暴力上傳
if($request->hasFile('img')) {

    $file = $request->file('img');
    $path = $this->fileUpload($file,'news');
    $news_data['img'] = $path;
}


       $new_news = News::create($news_data);

        return redirect('home/news');

    }
    public function edit($id){

        $news = News::find($id);


        return view('admin/news/edit' , compact('news'));
    }
    public function update(Request $request,$id ){

        $request_data = $request->all();
    $items = News::find($id);

    if($request->hasFile('img')){
        // 刪除舊圖片
        $old_image = $items->img;
        File::delete(public_path().$old_image);

        // 上傳新圖片
        $file = $request->file('img');
        $path = $this->fileUpload($file,'news');
        $request_data['img'] = $path;
    }
    $items -> update($request_data);


    return redirect('home/news');
}
public function delete(Request $request,$id){
    $item = News::find($id);
    $old_image = $item->img;
     if(file_exists(public_path().$old_image))

     {
         File::delete(public_path().$old_image);
     }
     $item->delete();
    return redirect('home/news');
}



private function fileUpload($file,$dir){
    //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
    if( ! is_dir('upload/')){
        mkdir('upload/');
    }
    //防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
    if ( ! is_dir('upload/'.$dir)) {
        mkdir('upload/'.$dir);
    }
    //取得檔案的副檔名
    $extension = $file->getClientOriginalExtension();
    //檔案名稱會被重新命名
    $filename = strval(time().md5(rand(100, 200))).'.'.$extension;
    //移動到指定路徑
    move_uploaded_file($file, public_path().'/upload/'.$dir.'/'.$filename);
    //回傳 資料庫儲存用的路徑格式
    return '/upload/'.$dir.'/'.$filename;
}
}
