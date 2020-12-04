@extends("layout")

@section("page_title")
	Contact
@endsection

@section("article")
	<h1>FORM</h1>
	<form action="{{ route('contact.handle') }}" method="POST">
		@csrf
		<label>Name</label>
		<input type="text" value="" name="name">
		@error('name')
		{{ $message }}
		@enderror
		<button type="submit">Opslaan</button>
	</form>
@endsection

@section("aside")
	<p>Contact</p>
@endsection