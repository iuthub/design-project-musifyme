<!DOCTYPE html>
<html>
<head>
	<title>
		musifyme | Home |
	</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/home_css.css')}}">
</head>
<body>
	<!-- Navigation Bar -->
	<header><div class="navigationBar">
			<ul >
				<li class="musifyme"><a href="{{ route('main') }}">musify<strong>me</strong></a></li>				
				<li class="lists"><a href="{{ route('main') }}">About</a></li>
				<li class="lists"><a href="{{ route('genre') }}">Genre</a></li>
				<li class="lists"><a href="{{ route('album') }}">Album</a></li>
				<li class="lists"><a href="{{ route('artist') }}">Artist</a></li>
				<li class="lists"><a href="{{ route('login') }}">Sign In</a></li>
                                <li class="lists"><a href="{{ route('register') }}">Sign Up</a></li>
                               
				<li class="search">
                                    <div class="container">
					<div class="search-box"><input type="text"><span></span></div>
                                    </div></li>
			</ul>
		</div>
	</header>

	<div class="first_imageBack">
		
			<div id="exploreIndexHome">
				<p>Explore Music With Us</p>
			</div>
			<div class="swipeToStart"><p>
					Swipe to start
				<p>
			</div>
			<div>
				<p class="arrowSwipe"><img src="{{ asset('images/arrowSwipe.png') }}"></p>
			</div>
	</div>
	<div class="second_imageBack">
		<p class="headerForAlbum">Feel Your Beat, <br/>Choose Your Wave</p>
		<div class="second_page">
			<div class="playlist_table">
				<table cellpadding="0" cellspacing="0">
					<tr class="headerPlaylist">
						<th class="logo_playlist"><img src="{{ asset('images/musifyme.png') }}" alt="logo"></th>
						<th><p>My playlist</p></th>
                                                <th class="playBtn"><button><img src="{{ asset('images/playbtn.png') }}"></button></th>
					</tr>
                                       
                                    @foreach($songs as $song)
					<tr class="other">
						<td class="logo_playlist"><img src="{{ asset('photo/songs/'.$song->photo) }}"></td>
						<td class="name_of_song"><p>{{ $song->name }}</p><p class="nameOfArtist">{{ $song->artist->name }}</p></td><td><p class="duration">{{ round($song->duration/60) }} : {{ $song->duration % 60 }}</p></td>
                                        </tr>
                                    @endforeach
                                        
				</table>
			</div>
			<div class ="sidebarTitles">
				<p>Customize Your <br/>Personal<br/>Playlist<br/><br/><span class="secondlineofthehead">All your<br/> lovely music <br/>in-one</span></p>
			</div>
		</div>


	</div>

	<div class="AuthorImageBack">
		<div class="header_authors"><p>About us</p><hr/></div>
		<div id="authors"><img src="{{asset('images/-The-Blue-Lagoon-1980-brooke-shields-35388971-500-376 copy.jpg')}}" alt=""><h3>-Name of Author</h3><p>-id of author-</p></div>
		<div id="authors"><img src="{{asset('images/-The-Blue-Lagoon-1980-brooke-shields-35388971-500-376 copy.jpg')}}" alt=""><h3>-Name of Author</h3><p>-id of author-</p></div>
		<div class="data">
                    @foreach($number as $key => $n)
                    <div class="albums_num"><h3>{{ $n }}</h3><p>{{ $key }}</p></div>
                    @endforeach
			
		</div>
	</div>

	<footer class="footer">
		<div class="about">
			<h2>About</h2>
			<hr>
			<p>Made by IUT students:<br/>Azizbek Asadov U1610040<br/>Anvar Yusupov U1610025<br/>Sevara Akhbaeva U1610211<br/>Timur Usmanov U1610025<br/>Sunnat  U1610025<br/>Timur Usmanov U1610025</p>
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