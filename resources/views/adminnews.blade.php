@extends("layoutextra")

@section("page_title")
	Edit News
@endsection

@section("content")
	<a href="{{ route('admin') }}"><p> < Terug</p></a>
	<hr>
	@foreach($news as $new)
		<div class="content__track">
			<div>
				<img src="{{ $new->image }}" class="content__track-img">
			</div>
			<div>
				<h3>{{ $new->title }}</h3>
				<p><b>{{ $new->header }}</b></p>
				<p>{{ $new->post }}</p>
			</div>
		</div>
		<hr>
	@endforeach
    {{$news->links()}}
@endsection
