@extends('layout')

@section('content')
<div class="view">
	<div class="view-head">
		<div class="view-background" style="background-image: url(/images/{{$book->image}});">
			
		</div>
		<div class="view-content">
			<img src="/images/{{$book->image}}" class="image">
			<div class="info">
				<div class="book-title">{{$book->name}}</div>
				<div class="book-author">{{$book->author}}</div>
				<div class="book-category">{{$book->category}}</div>
			</div>
		</div>
	</div>
	<div class="description">
		{{$book->description}}
	</div>

	<div class="chapters">
		@foreach($chapters as $chapter)
			<div class="chapter-elem"><a href="/book/read/{{$book->alias}}/{{$chapter->id}}">{{$chapter->name}}</a></div>
		@endforeach
	</div>
</div>
@endsection