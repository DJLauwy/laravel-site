@extends("layoutextra")

@section("page_title")
	Edit News
@endsection

@section("content")
	<a href="{{ route('admin') }}"><p> < Terug</p></a>
	<hr>
	@foreach($news as $news)
		<div class="content__track">
			<div>
				<img src="{{ $news->image }}" class="content__track-img">
			</div>
			<div>
				<h3>{{ $news->title }}</h3>
				<p><b>{{ $news->header }}</b></p>
				<p>{{ $news->post }}</p>
			</div>
		</div>
		<hr>
	@endforeach
@endsection