@extends("layout")

@section("page_title")
	News
@endsection

@section("content")
	<h1>News</h1>
	<hr>
	@foreach($news as $news)
	<div>
		<h2>{{ $news->title }}</h2>
		<p>{{ $news->header }}</p>
		@endforeach
	</div>
@endsection
