@extends('layouts.app')


@section('content')
<h1>編集画面</h1>

 <form method="POST" action="{{route('board.update',['id' =>$board->id])}}">
  @csrf

 <div>
  タイトル
  <input type="text" name=title value="{{$board->title}}">
  </div>

  <div>
  内容
  <input type="text" name=body value="{{$board->body}}">
  </div>

  
  <input type="submit" value="更新する">

  </form>
  <a href="{{route('board.show',['id'=>$board->id])}}">{{ __('詳細に戻る') }}</a>
  @endsection