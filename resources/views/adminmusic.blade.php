@extends("layoutextra")

@section("page_title")
	Edit Discography
@endsection

@section("content")
	<a href="{{ route('admin') }}"><p> < Terug</p></a>
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
		<hr>
	@endforeach
    {{$discography->links()}}
@endsection
