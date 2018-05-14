<!DOCTYPE html>
<html>
<head>
	<title>
		musifyme | Classics |
	</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/classics.css')}}">
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
	<script type="text/javascript">
			$(document).ready(function(){
				$("body").focus(function(){
   					$(".swipe").fadeIn("slow");
				});
			});
	</script>

	<!-- First Section -->
	<div class="first_imageBack">
		<div class="first_cover">
			<div class="header"><p>CLASSICAL MUSIC <br/>IS<br/> IMMORTAL</p></div>
			<div class="swipe"><p>Swipe to start</p>
			<a href=".second_imageBack"><img src="{{asset('images/arrowSwipe.png')}}"></a>
			</div>
		</div>
	</div>

	<!-- Second Section -->
	<div class="second_imageBack">
		<div class="second">
			<div class="tableHeader"><p>Track Your Favourite Albums</p></div>
			<div class="table_view">
				<table class="tableView">
                                    <tr>
                                    @foreach($albums as $album)
                                        <td><button class="btnTableView"><img width="300" height="300" src="{{ asset('photo/albums/'.$album->photo) }}" alt="album"></button></td>
                                    @endforeach
                                    </tr>
					
				</table>
			</div>
		</div>
	</div>

	



	<!-- Third Section -->
	<div class="third_imageBack">
		<div class="cover_third">
			<div id="head"><a href="#">Explore>></a></div>
			<div class="medium"><p>"He wear no shoeshine<br/>He got toe jam football<br/>He got monkey finger<br/>He shoot Coca Cola<br/>He say I know you, you know me<br/>One thing I can tell you is<br/>You got to be free<br/>Come together, right now<br/>Over me"</p></div>
			<div class="foot"><p>Adrien Brody as Vladislav<br/> Spilman</p></div>
		</div>
	</div>

	<div class="forth_imageBack">
		<div class="forth_btn">
			<button>
			<div class="cover_forth">
				<div class="medium2"><p>As sun rises on the<br/> East, folk and<br/> classic raised for<br/> centuries</p></div>
				<div class="playBtnClassics"><p><img src="{{asset('images/playBtnClassics.png')}}" alt="playBtn">Play Music</p></div>
			</div>
			</button>
		</div>
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
			<p class="musi">musify<strong>me</strong><br/><img src="{{asset('images/noteOrange.png')}}"></p>
		</div>
	</footer>


</body>
</html>