@extends('layouts/app')
@section('css')
{{-- summernote css --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <h2>修改商品</h2>
    <form method="POST" action="/home/sc_product_list/update/{{$products->id}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="img">圖片</label><br>
            <img src="{{asset('/storage/'.$products->img)}}" class="img-fluid mb-3" width=50% alt="">
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <div class="form-group">
            <label for="type">類型</label>
                <select type="text" class="form-control" id="type" name="type" value="{{$products->type}}" required>
                    @foreach ($product_types as $item)
                        @if ($products->type == $item->type)
                            <option value="{{$item->type}}" selected>{{$item->type}}</option>
                        @else
                            <option value="{{$item->type}}">{{$item->type}}</option>
                        @endif
                    @endforeach
                </select>
        </div>
        <div class="form-group">
            <label for="title ">標題</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$products->title}}" required>
        </div>
        <div class="form-group">
            <label for="content">內文</label>
            <textarea type="text" class="form-control" id="content" name="content" required>{!!$products->content!!}</textarea>
        </div>
        <div class="form-group">
            <label for="price">價格</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$products->price}}" required>
        </div>
        <div class="form-group">
            <label for="sort">權重</label>
            <input type="number" class="form-control" id="sort" name="sort" value="{{$products->sort}}">
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
