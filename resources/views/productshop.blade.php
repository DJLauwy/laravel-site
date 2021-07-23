@extends("layoutextra")

@section("page_title")
	Productshop
@endsection

@section("content")
	<h1><b>Products</b></h1>
	<p><b>See all our various products.</b></p>
	<hr>
	@foreach($product as $item)
		<h3><b>{{ $item->title }}</b></h3>
		<h4>{{ $item->description }}</h4>
		<p>&euro;{{ $item->price }}</p>
		<p>{{ $item->date }}</p>
		<hr>
	@endforeach
    <div class="pagination-devider"></div>
	{{ $product->links() }}
@endsection
