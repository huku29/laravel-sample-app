@extends('layouts.app')


@section('content')
<h1>詳細表示</h1>

<div>
タイトル
{{$board->title}}
</div>

<div>
内容
{{$board->body}}
</div>
<a href="{{route('board.edit',['id'=>$board->id])}}">{{ __('編集') }}</a>
<form method="POST" action="{{route('board.destroy',['id'=>$board->id])}}">
  @csrf
  <button type="submit">削除</button>
</form>
<a href="{{ route('board.index') }}">{{ __('一覧に戻る') }}</a>
@endsection
