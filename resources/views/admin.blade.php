@extends("layoutextra")

@section("page_title")
	Admin
@endsection

@section("content")
	<h1><b>Welcome DJ Lauwy</b></h1>
	<p><b>What would you like to do?</b></p>
	<a href="{{ route('account') }}"><p> > Account</p></a>
	<a href="{{ route('admin.news') }}"><p> > News</p></a>
	<a href="{{ route('admin.music') }}"><p> > Discography</p></a>
@endsection
