@extends("layoutextra")

@section("page_title")
	News
@endsection

@section("content")
	<h1><b>News</b></h1>
	<hr>
	@foreach($news as $news)
	<div class="content__track">
		<div>
			<img src="" class="content__track-img">
		</div>
		<div>
			<h3>{{ $news->title }}</h3>
			<p>{{ $news->header }}</p>
		</div>
		@endforeach
	</div>
@endsection
