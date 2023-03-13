@extends('layouts.app')


@section('content')
<h1 class="text-center">編集画面</h1>

 <form method="POST" action="{{route('board.update',['id' =>$board->id])}}">
  @csrf

 <div class="text-center border col-7 mx-auto mt-5 py-5" >
  <div class="pt-3">
  <h5>タイトル</h5>
  <input type="text" name=title value="{{$board->title}}">
</div>


<div class="pt-3">
  <h5>内容</h5>
  <input type="text" name=body value="{{$board->body}}">
</div>


  
  <button  class="mt-3" type="submit" >更新する</button>
  </form>
  <div class="mt-5 me-5">
  <a href="{{route('board.show',['id'=>$board->id])}}">{{ __('詳細に戻る') }}</a>
</div>
</div>

  @endsection