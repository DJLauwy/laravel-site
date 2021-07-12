@extends("layoutextra")

@section("page_title")
	News
@endsection

@section("content")
	<h1><b>{{ $newsi->title }}</b></h1>
	<hr>

	<div class="content__news news-article">
		<div>
			<img src="{{ $newsi->image }}" class="content__track-img">
		</div>
		<div>
			<p><b>{{ $newsi->header }}</b></p>
			<p>{{ $newsi->post }}</p>
			<p></p>
		</div>

	</div>
@endsection
