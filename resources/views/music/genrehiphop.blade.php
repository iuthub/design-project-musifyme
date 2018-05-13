</!DOCTYPE html>
<html>
<head>
	<title>musifyme | Hip-Hop |</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\hiphop.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
					</li>
				</ul>
		</div>
	</header>
	<div class="first_imageBack">
		
		<div class="hiphop_main">
			<div class="main"><p><img src="{{asset('images/hiphopMain.png')}}"></p></div>
		</div>
		<div id="explore"><p><a href="#second_imageBack">Explore>></a></p></div>
		<div class="leftSideMain">
			<table>
				<tr><td>R</td></tr>
				<tr><td>A</td></tr>
				<tr><td>P</td></tr>
			</table>
		</div>	
	</div>
	<div id="second_imageBack">
		<div class="leftSide">
			<p>Be a part of <br/> street <br/>performers</p>
		</div>

		<div class="playVideoHipHop">
			<p>Play the best rap/<br/>hip-hop songs <br/>ever</p>
			<button class="btnVideoPlay"><p>Play</p></button>
		</div>
	</div>
	<div class="third_imageBack">
		<div id="albums">
			<div class="tableheader">
				<p class="Track"><a href="#">Track Hip-Hop Albums</a></p>
			</div>
			<hr/>
			<div class="table_View">


		
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

	<script>
	</script>
</body>
</html>