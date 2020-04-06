@extends('layouts/app')


@section('content')

<div class="container">
    <h1>編輯最新消息</h1>

<form method="POST" action="/home/news/update/{{$news->id}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="img">現有主要圖片</label>
        <img class="img-fluid" width="250" src="{{asset($news->img)}}" alt="">

      </div>
    <div class="form-group">
        <label for="img">重新上傳圖片</label>
        <input type="file" class="form-control" id="img" name="img" value="{{$news->img}}" >
    </div>
    <div class="form-group">
        <label for="date">發布時間</label>
        <input type="date" class="form-control" id="date"  name="date" value="{{$news->date}}">
      </div>
      <div class="form-group">
        <label for="txtdate">展出時間</label>
        <input type="text" class="form-control" id="txtdate"  name="txtdate" value="{{$news->txtdate}}">
      </div>
      <div class="form-group">
        <label for="location">地點</label>
        <input type="text" class="form-control" id="location"  name="location" value="{{$news->location}}">
      </div>
    <div class="form-group">
      <label for="title">標題</label>
      <input type="text" class="form-control" id="title"  name="title" value="{{$news->title}}">
    </div>
    <div class="form-group">
      <label for="content">內容</label>
      <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{$news->content}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
