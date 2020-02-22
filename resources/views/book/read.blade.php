@extends('layout')

@section('content')
<div class="read">
	<h3 class="title">{{$chapter->name}}</h3>
	<h6><a href="/book/view/{{$book->alias}}">{{$book->name}}</a></h6>

	<div class="nav-page">
		<a href="{{$prev}}" class="btn-green btn-prev">Назад</a>
		<a href="{{$next}}" class="btn-green btn-next">Вперёд</a>
	</div>

	<div class="text">{{$chapter->text}}</div>

	<div class="nav-page">
		<a href="" class="btn-green btn-prev">Назад</a>
		<a href="" class="btn-green btn-next">Вперёд</a>
	</div>
</div>
@endsection