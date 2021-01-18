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
	

	@foreach ($news as $news)
		<div class="content__news">
			<div>
				<img src="{{ $news->image }}" class="content__track-img">
			</div>
			<div>
    			<p><b>{{ $news->title }}</b></p>
    			<p>{{ $news->header }}</p>
    		</div>
    	</div>
	@endforeach


	{{--
	<a href="{{ route('news', ['id' => 1]) }}">Nieuws met id 1</a> 

	@foreach($news as $news)
		<a href="{{ route('news', ['id' => $news->id]) }}">{{ $news->title }}</a>
	@endforeach
	--}}


@endsection

@section("aside")
	<iframe src="https://open.spotify.com/embed/playlist/3xFB3g0Cia3fvkS5bhPRaK" width="100%" height="100%" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
@endsection