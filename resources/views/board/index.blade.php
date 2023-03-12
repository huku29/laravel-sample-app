@extends('layouts.app')


@section('content')
<h1>投稿一覧</h1>

<table>
<tr>
<th></th>  
<th>タイトル</th>
<th>内容</th>
</tr>
@foreach($boards as $board)
<tr>
<td>{{$board->id}}</td>
<td>{{$board->title}}</td>
<td>{{$board->body}}</td>
<td><th><a href="{{route('board.show',['id'=>$board->id])}}">詳細</a></th></td>
</tr>
@endforeach
</table>
<a href="{{ route('board.create') }}">{{ __('新規作成') }}</a>
@endsection
