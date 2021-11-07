@extends("layoutextra")

@section("page_title")
	News
@endsection

@section("content")
	<h1><b>News</b></h1>
	<hr>
	@foreach($news as $new)
		<div class="content__track">
			<div>
				<img src="{{ $new->image }}" class="content__track-img">
			</div>
			<div>
				<h3>{{ $new->title }}</h3>
				<p>{{ $new->header }}</p>
				<a href="news/{{ $new->id }}"><p class="content__readmore-btn responsive"><b>Read more...</b></p></a>
			</div>
		</div>
	<hr>
	@endforeach
        {{ $news->links() }}
@endsection
