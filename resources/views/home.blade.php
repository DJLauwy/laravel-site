@extends("layout")

@section("page_title")
	Home
@endsection

@section("content")
	<h1>Welcome</h1>
@endsection

@section("extra-title")
	<h2>News</h2>
@endsection

@section("extra")
	{{-- <a href="{{ route('news', ['id' => 3]) }}">Nieuws met id 3</a> 


@foreach($newsitems as $news)
		<a href="{{ route('news', ['id' => $news->id]) }}">{{ $news->title }}</a>
	@endoreach --}}


@endsection

@section("aside")
	<iframe src="https://open.spotify.com/embed/playlist/3xFB3g0Cia3fvkS5bhPRaK" width="100%" height="100%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
@endsection