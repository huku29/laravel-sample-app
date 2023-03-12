@extends('layouts.app')


@section('content')
<h1>投稿作成</h1>

<form method="POST" action="{{route('board.store')}}">
  @csrf

  <div>
    <label for="title">タイトル</label>
    <input type="text" name="title" id="title" required>
  </div>

  <div>
    <label for="body">内容</label>
    <input type="text" name="body" id="body" required>
  </div>

  <button type="submit">登録</button>
  <a href="{{ route('board.index') }}">{{ __('一覧へ戻る') }}</a>
</form>
@endsection
