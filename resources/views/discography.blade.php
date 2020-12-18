@extends("layout")

@section("page_title")
	Home
@endsection

@section("content")

	<p>Discography!</p>
	@foreach($discography as $track)
		<h2>Artist: {{ $track->artist }} </h2>
		<h3>Title: {{ $track->title }} </h3>
		<p>Genre: {{ $track->genre }} <br>
		Released: {{ $track->year }} </p>
		<hr />
	@endforeach

@endsection

@section("aside")
	<p>Music</p>
@endsection