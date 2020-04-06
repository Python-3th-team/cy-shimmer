@extends('layouts/app')

@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@endsection
@section('content')

<div class="container">
<a href="/home/cy_product_list/create" class="btn btn-success">新增</a>
<hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <h2>商品</h2>
            <th>圖片</th>
            <th>類型</th>
            <th>標題</th>
            <th>內文</th>
            <th>價格</th>
            <th>權重</th>
            <th width="80"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            {{-- <td>{{$item->type}}</td> --}}
            <td><img src="{{asset('/storage/'.$item->img)}}" alt="" width="200"></td>
            <td>{{$item->type}}</td>
            <td>{{$item->title}}</td>
            <td>{!!$item->content!!}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->sort}}</td>
            <td>
            <a href="/home/cy_product_list/edit/{{$item->id}}" class="btn btn-success btn-sm">修改</a>
            <button class="btn btn-danger btn-sm" href="delete-form-{{$item->id}}" onclick="show_confirm({{$item->id}})">刪除</button>
                <form id="delete-form-{{$item->id}}" action="/home/cy_product_list/delete/{{$item->id}}" method="POST" style="display: none;">
                    @csrf
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection

@section('js')

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    function show_confirm(id){
        var r=confirm("你確定要刪除嗎!?");
        if (r==true){
            // 使用者確認刪除
            $('#delete-form-'+id).submit();
        }
    }
</script>
@endsection
