@extends("layoutextra")

@section("page_title")
	Discography
@endsection

@section("content")

	<h1><b>Discography</b></h1>
	<hr>
	@foreach($discography as $track)
		<div class="content__track">
			<div>
				<img src="{{ $track->cover }}" class="content__track-img">
			</div>
			<div>
				<h3><b>Artist:</b> {{ $track->artist }} </h3>
				<h4><b>Title:</b> {{ $track->title }} </h4>
				<p><b>Genre:</b> {{ $track->genre }} <br>
				<b>Released:</b> {{ $track->year }} </p>
			</div>
		</div>
		<hr />
	@endforeach
	
	{{ $discography->links() }}

@endsection