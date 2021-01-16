<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Lau de Hoop">
        <meta name="description" content="#">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Diverse -->
        <link rel="icon" href="img/djlauwy.ico" type="image/icon type">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/menu.css') }}">
        <script src="https://kit.fontawesome.com/16946e2d22.js" crossorigin="anonymous"></script>

        <!-- Title -->
        <title>@yield('page_title') | DJ Lauwy</title>
    </head>
    <body>

        <!-- Mobile Navigation -->
        <input type="checkbox" id="menu-switch" checked>
        <div class="mobile-nav">
            <label for="menu-switch" class="get-menu">
                <i class="fas fa-times close-button"></i>
            </label>
            <div class="mobile-nav__wrapper">
                <ol>
                    <li><a href="{{ route('news') }}">News</a></li>
                    <li><a href="{{ route('aboutme') }}">Biography</a></li>
                    <li><a href="{{ route('discography') }}">Discography</a></li>
                    <li><a href="{{ route('tte') }}">The Trance Event</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ol>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <nav> 
            <a href="{{ route('home') }}" class="no-desktop"> <img src="{{ asset('img/djlauwy.png') }}" alt="DJ Lauwy logo" class="nav__logo"> </a>
            <ul>
                <a href="{{ route('home') }}"> <img src="{{ asset('img/djlauwy.png') }}" alt="DJ Lauwy logo" class="nav__logo"> </a>
                <li><a href="{{ route('news') }}">News</a></li>
                <li><a href="{{ route('aboutme') }}">Biography</a></li>
                <li><a href="{{ route('discography') }}">Discography</a></li>
                <li><a href="{{ route('tte') }}">The Trance Event</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <ul class="nav__socials">
                <li><a href="https://www.facebook.com/officialdjlauwy" target="_blank"><img src="{{ asset('img/fb.png') }}" class="nav__socials-icons"></a></li>
                <li><a href="https://www.instagram.com/DJLauwy/" target="_blank"><img src="{{ asset('img/ig.png') }}" class="nav__socials-icons"></a></li>
                <li><a href="https://www.youtube.com/channel/UCHXjBraDDQumUR-mNgooCMQ" target="_blank"><img src="{{ asset('img/yt.png') }}" class="nav__socials-icons"></a></li>
                <li><a href="https://twitter.com/DJLauwy" target="_blank"><img src="{{ asset('img/tw.png') }}" class="nav__socials-icons"></a></li>
                <li><a href="https://www.twitch.tv/djlauwy" target="_blank"><img src="{{ asset('img/tc.png') }}" class="nav__socials-icons"></a></li>
                <li><a href="https://open.spotify.com/artist/7KCAeHLa26CpHopAb8sLh7?si=6ZY2Cae2SjeCbU5Oceww0Q" target="_blank"><img src="{{ asset('img/sp.png') }}" class="nav__socials-icons"></a></li>
            </ul>
            <label for="menu-switch" class="get-menu hamburger">
                <i class="fas fa-bars"></i>
            </label>
        </nav>

        <!-- Main -->
        <main class="main__extended">

            <!-- Article -->
            <section class="wrapper">
                <article class="wrapper__extended">
                    @yield('content')
                </article>
            </section>
            
        </main>

        <!-- Footer -->
        <footer>
            
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html>