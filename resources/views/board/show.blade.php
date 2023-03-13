@extends('layouts.app')


@section('content')

  <h1 class="text-center">詳細表示</h1>
  <div class="text-center border col-7 mx-auto mt-5 py-5" >
    <div class ="pt-3">
<h5>タイトル</h5>
{{$board->title}}
</div>
<div class="pt-3">
<h5>内容</h5>
{{$board->body}}
</div>
<form method="POST" action="{{route('board.destroy',['id'=>$board->id])}}">
  @csrf
  <button type="submit" class="mt-3">削除する</button>
</form>
<div class="mt-5 me-5">
  <a href="{{route('board.edit',['id'=>$board->id])}}">{{ __('編集する') }}</a>
  <a href="{{ route('board.index') }}">{{ __('一覧に戻る') }}</a>
</div>
</div>
@endsection
