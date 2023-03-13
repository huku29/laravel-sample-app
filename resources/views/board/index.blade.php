@extends('layouts.app')


@section('content')
<h1 class="text-center">投稿一覧</h1>

<div class="text-center my-4">

  <form method="GET" action="{{route('board.search')}}">
    @csrf
    <div>
     
      <input type="search" name="search" id="form-search">
      <button type="submit">検索</button>
    </div>
  </form>

  <div class="row my-4 row-cols-1 row-cols-md-3 gap-3">
@foreach($boards as $board)
<div class="d-flex justify-content-around bd-highlight" >
<div class="card h-100" style="width: 18rem; ">
  <div class="card-body">
    <h5 class="card-title">{{$board->title}}</h5>
    <p class="card-text">{{$board->body}}</p>
    <a href="{{route('board.show',['id'=>$board->id])}}">詳細</a>
  </div>
</div>
</div>
@endforeach
</div>
<div>
  <a href="{{ route('board.create') }}">{{ __('新規作成') }}</a>
</div>

@endsection
