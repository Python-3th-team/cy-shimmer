@extends('layouts/app')


@section('content')

<div class="container">
<form method="POST" action="/home/news/store">
    @csrf
    <div class="form-group">
        <label for="img">img</label>
        <input type="text" class="form-control" id="img"  name="img">
    </div>
    <div class="form-group">
        <label for="date">date</label>
        <input type="date" class="form-control" id="date"  name="date">
      </div>
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" id="title"  name="title">
    </div>
    <div class="form-group">
      <label for="content">content</label>
      <input type="text" class="form-control" id="content"  name="content">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection
