@extends('layouts.app')


@section('content')
<h1 class="text-center">新規投稿</h1>

<form method="POST" action="{{route('board.store')}}">
  @csrf

  <div class="text-center border col-7 mx-auto mt-5 py-5" >
  <div class="pt-3" >
    <h5>タイトル</h5>
    <input type="text" name="title" id="title" required>
  </div>

  <div class="pt-3" >
    <h5>本文</h5>
    <textarea  rows="4" type="text" name="body" id="body" required></textarea>
  </div>

  <button type="submit" >登録</button>
  <a href="{{ route('board.index') }}">{{ __('一覧へ戻る') }}</a>
</div>
</form>
@endsection
