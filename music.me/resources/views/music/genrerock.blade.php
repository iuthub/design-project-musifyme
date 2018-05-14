<!DOCTYPE html>
<html>
<head>
	<title>
		musifyme | Rock |
	</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css\rock.css')}}">
</head>
<body>
	<header>
		<div class="navigationBar">
				<ul>
					<li class="hamburger">
						<i class="fa fa-bars"></i>
					</li>
					<li class="musifyme"><a href="{{ route('main') }}">musify<strong>me</strong></a></li>
					<li class="lists"><a href="{{ route('main') }}">About</a></li>
					<li class="lists"><a href="{{ route('genre') }}">Genre</a></li>
					<li class="lists"><a href="{{ route('album') }}">Album</a></li>
					<li class="lists"><a href="{{ route('artist') }}">Artist</a></li>
					<li class="lists"><a href="{{ route('login') }}">Sign In</a></li>
                                         <li class="lists"><a href="{{ route('register') }}">Sign Up</a></li>
					<li class="search"><div class="container">
							<div class="search-box"><input type="text"><span></span></div>
						</div></li>
				</ul>
		</div>
	</header>

	<!-- First Section -->
	<div class="first_imageBack">
		<div class="firstHeader">
			<div class="rockHeader">
				<p>{{ $rock->description }}</p>
				<hr/>
			</div>
			<div class="swipeRock">
				<p>Swipe to start</p>
				<a href=""><img src="{{asset('images/arrowSwipe.png')}}"></a>
			</div>
		</div>
	</div>

	<!-- Second Section -->
	<div class="second_imageBack">
			<div class="second_cover">
				<button>
				<div class="second_header"><p>THE BEATLES</p></div>
				<div class="rightSide"><p>"He wear no shoeshine<br/>He got toe jam football<br/>He got monkey finger<br/>He shoot Coca Cola<br/>He say I know you, you know me<br/>One thing I can tell you is<br/>You got to be free<br/>Come together, right now<br/>Over me"</p></div>
				<div class="desc"><p>Abbey Road is the eleventh<br/> album by English rock band<br/> the Beatles, released on 26<br/> September 1969 by Apple<br/> Records.</p></div>
				</button>
			</div>
	</div>


	<!-- Third Section -->
	<div class="player">

		<!-- This should be complete dynamic insert data as appropriate! -->
                @foreach($albums as $album)
                <div class="song_player">
			<div class="coverImage"><img src="{{asset('photo/albums/'.$album->photo)}}" alt="album_artwork"></div>
			<div class="text_song">
				<div class="title_song"><p>{{ $album->artist->name }}</p><p id="description">{{ $album->name }}<br/>(Chapter Two)</p></div>
				<div id="category"><p>Grammy, 1979</p></div>
				<div class="stars"><img src="{{asset('images/stars.png')}}" alt="/images/Raiting"></div>
			</div>
			<div id="duration">
				<div class="time"><p>01:30</p></div>
				<div class="playBtn"><button><img src="{{asset('images/ic_likes.png')}}" alt="Play Song"></button></div>
			</div>
		</div>
                @endforeach
	</div>

	<!-- Forth Section -->
	<div class="forth_imageBack">
		<div class="forth_cover">
			<button><img src="{{asset('images/playBtnVideo.png')}}" alt=""></button>
		</div>
	</div>

	<div>
		
	</div>


	<!-- Footer section -->

<footer class="footer">
		<div class="about">
			<h2>About</h2>
			<hr>
			<p>Made by IUT students:<br/>Azizbek Asadov U1610040<br/>Anvar Yusupov U1610025<br/>Sevara Akhbaeva U1610211<br/>Timur Usmanov U16100242<br/>Sunnat  U1610025<br/>Timur Usmanov U1610025</p>
		</div>
		<div class="about">
			<h2>Home</h2>
			<hr>
			<br/>
			<div class="links"><a href="home.html">musifyme | Go to Home Page  |</a><br/><a href="">musifyme | Go to Genre Page  |</a><br/><a href="">musifyme |Go to Album Page |</a><br/><a href="">musifyme |  Go to Artist Page   |</a><br/><a href="">Sign In | musifyme |</a><br/></div>
		</div>
		<div class="about">
			<h2>Contacts</h2>
			<hr>
			<p>32, 63, Ziyolilar 2, Mirzo-Ulug'bek<br/>Tashkent, Uzbekistan, 100088, r32<br/>Tel: +9989029383482<br/>a.students.@musify.inha.uz<br/>Fax: +99484848212<br/>JS, Ajax, HTML5, CSS3<br/>Made with Love</p>
		</div>
		<div class="about">
			<p class="musi">musify<strong>me</strong><br/><img src="{{asset('images/logo.png')}}"></p>
		</div>
	</footer>


</body>
</html>