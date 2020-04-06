@extends('layouts/app')


@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

<div class="container">
    <h1>千暘最新消息</h1>
    <a href="/home/cy_plant/cy_news/create" class="btn btn-success">新增最新消息</a>
    <hr>
<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>img</th>
            <th>date</th>
            <th>txtdate</th>
            <th>title</th>
            <th>location</th>
            <th>content</th>
            <th width="90"></th>

        </tr>
    </thead>

    <tbody>
        @foreach ($all_news as $item)
        <tr>
            <td>
                <img width="120" src="{{asset($item->img)}}" alt="">
            </td>
            <td>{{$item->date}}</td>
            <td>{{$item->txtdate}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->location}}</td>
            <td>{{$item->content}}</td>
            <td>
                <a href="/home/cy_plant/cy_news/edit/{{$item->id}}" class="btn btn-success btn-sm">修改</a>
                <button class="btn btn-danger btn-sm" onclick="show_confirm({{$item->id}})">刪除</button>
                <form id="delete-form-{{$item->id}}" action="/home/cy_plant/cy_news/delete/{{$item->id}}" method="POST" style="display: none;">
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
    $('#example').DataTable({
        "order":[[1 ,'desc']]
    });
} );

function show_confirm(id)
{

var r=confirm("確定刪除嗎?!");
if (r==true)
  {
    document.getElementById('delete-form-'+id).submit();
  }

}
</script>
@endsection
