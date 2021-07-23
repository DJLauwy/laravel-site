@extends("layoutextra")

@section("page_title")
	The Trance Event
@endsection

@section("content")
    <div class="wrapper__banner">
        <img src="{{ asset('img/tte.png') }}" alt="">
        <h1><b>The Trance Event</b></h1>
    </div>
    <hr>
    <div class="wrapper__subtext">
        <p>The Trance Event is the label and brand by DJ Lauwy. Earlier it was a
        radioshow as well, but after 5 years it was too busy for him to make the
        show. Sometimes DJ Lauwy still hosts a The Trance Event LIVE show on
        Twitch, but not on a weekly or monthly basis.</p>
    </div>
    <hr>
    <div class="wrapper__mixes">
        <iframe width="100%" height="120" src="https://www.mixcloud.com/widget/iframe/?hide_cover=1&light=1&feed=%2FDJLauwy%2Fdj-lauwy-presents-another-dimension-vol3%2F" frameborder="0" ></iframe>
    </div>
@endsection
