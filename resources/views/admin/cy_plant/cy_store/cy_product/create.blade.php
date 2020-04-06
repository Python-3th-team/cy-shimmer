@extends('layouts/app')
@section('css')
{{-- summernote css --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <h2>新增商品</h2>
    <form method="POST" action="/home/cy_product_list/store" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="img">圖片</label>
            <input type="file" class="form-control" id="img" name="img" required>
        </div>
        <div class="form-group">
            <label for="type">類型</label>
            <select class="form-control" id="type" name="type" required>
            @foreach ($product_types as $item)
            <option value="{{$item->type}}">{{$item->type}}</option>
            @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">標題</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">內文</label>
            <textarea type="text" class="form-control" id="content" name="content" required></textarea>
        </div>
        <div class="form-group">
            <label for="price">價格</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="sort">權重</label>
            <input type="number" class="form-control" id="sort" name="sort" value="0">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
<script src="{{ asset('js/summernote-zh-TW.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 350,
            lang: 'zh-TW',
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                },
                onMediaDelete : function(target) {
                    $.delete(target[0].getAttribute("src"));
                }
            },
        });

        $.ajaxSetup({
             headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.upload = function (file) {
            let out = new FormData();
            out.append('file', file, file.name);
            $.ajax({
                method: 'POST',
                url: '/home/ajax_upload_img',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function (img) {
                    $('#content').summernote('insertImage', img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
        $.delete = function (file_link) {
            $.ajax({
                method: 'POST',
                url: '/home/ajax_delete_img',
                data: {file_link:file_link},
                success: function (img) {
                    console.log("delete:",img);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        }
    });
</script>
@endsection

