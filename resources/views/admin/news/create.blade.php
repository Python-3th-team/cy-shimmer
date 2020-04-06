@extends('layouts/app')


@section('content')

<div class="container">
    <h1>新增最新消息</h1>
<form method="POST" action="/home/news/store" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="img">主要圖片上傳</label>
        <input type="file" class="form-control" id="img" name="img" required>
    </div>
    <div class="form-group">
        <label for="date">發布時間</label>
        <input type="date" class="form-control" id="date"  name="date">
      </div>
    <div class="form-group">
      <label for="txtdate">展出時間</label>
      <input type="text" class="form-control" id="txtdate"  name="txtdate">
    </div>
    <div class="form-group">
        <label for="location">地點</label>
        <input type="text" class="form-control" id="location"  name="location">
      </div>
      <div class="form-group">
        <label for="title">標題</label>
        <input type="text" class="form-control" id="title"  name="title">
      </div>
    <div class="form-group">
      <label for="content">內容</label>

      <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
{{-- @section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#content').summernote({
    minHeight: 300,
  });
});
</script>
@endsection --}}
