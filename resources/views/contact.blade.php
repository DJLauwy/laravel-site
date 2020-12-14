@extends("layoutcontact")

@section("page_title")
	Contact
@endsection

@section("content")
	<h1>Contact us</h1>
	<p>All fields with <span class="required">*</span> are required!</p>
	<form action="{{ route('contact.handle') }}" method="POST">
		@csrf
		<label>Name<span class="required">*</span></label>
		<input type="text" value="{{ old('name') }}" name="name" required>
		@error('name')
			<span class="required">{{ $message }}</span>
		@enderror

		<label>E-mail</label>
		<input type="email" value="" name="email">

		<label>Subject<span class="required">*</span></label>
		<input type="text" value="{{ old('subject') }}" name="subject" required>
		@error('subject')
			<span class="required">{{ $message }}</span>
		@enderror

		<label>Message<span class="required">*</span></label>
		<textarea row="4" cols="50" value="{{ old('message') }}" name="message" required></textarea>
		@error('message')
			<span class="required">{{ $message }}</span>
		@enderror

		<button type="submit" class="send-btn">Send</button>
	</form>
@endsection

@section("aside")
	<p>Contact</p>
@endsection