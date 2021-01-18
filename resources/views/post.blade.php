@extends("layoutextra")

@section("page_title")
	News
@endsection

@section("content")
	<h1><b>News</b></h1>
	<hr>
	
	<div class="content__news">
		<div>
			<img src="{{ $newsi->image }}" class="content__track-img">
		</div>
		<div>
			<h3>{{ $newsi->title }}</h3>
			<p><b>{{ $newsi->header }}</b></p>
			<p>{{ $newsi->post }}</p>
			<p></p>
		</div>
		
	</div>
@endsection
