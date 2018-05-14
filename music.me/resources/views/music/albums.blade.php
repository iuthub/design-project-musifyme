<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>album</title>
	<link rel="stylesheet" href="{{asset('css/album.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<meta name="viewport" content="width=device-width">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
	<div class="p1">
	<div style="background-color:#2B2A2F"">
<ul class = "navig1">
  <li class="navig"><img src="{{asset('images/musifyme.png')}}" alt = "logo" height="25"></li>
  <li class="navig h"><a href="{{ route('main') }}" >About</a></li>
  <li class="navig h"><a href="{{ route('genre') }}" >Genre</a></li>
  <li class="navig h" style="border-bottom: 0.5px solid #E88C08;"><a href="{{ route('album') }}" >Album</a></li>
  <li class="navig h"><a href="{{ route('artist') }}">Artist</a></li>
  <li class="navig h"><a href="{{ route('login') }}">Sign in</a></li>
  <li class="navig h"><a href="{{ route('register') }}">Sign Up</a></li>
  <li class="navig" style="padding-right: 203px;">
  <li class="navig lisize1">
    <form action="/action_page.php">
      <input type="text" placeholder=" Search..." name="search" class = "Search" >
    </form>
  </li>
</ul>
</div>
	<div class="down">
	 <div class="rec">
	 	<a href="javascript://0" onclick="slowScroll ('#more')"><img src="{{asset('images/Explore.png')}}" class="exp"></a> 
	 	<h1 id="album">Album</h1>
	 	<img src="{{asset('images/Scroll & indeep into.png')}}" class="Scr">
	 	<img src="{{asset('images/Elvis Presley prefo.png')}}" class="Elv">
	 </div>
	 </div>
	 	<a href="javascript://0" onclick="slowScroll ('#more')"><img src="{{asset('images/Explore1.png')}}" class="posExp"></a>
	</div>
	<div id="more" class="p2">
	<h1 id="albums">Albums</h1>
	<div class="albdiv">
		<ul class="hr2">
                    @foreach($albums as $album)
                    <li><img src="{{ asset('photo/albums/'.$album->photo) }}" class="alb"></li>
                    @endforeach
			
		</ul>
	</div> 			
	</div>

	<div class="btm">
		<div class="tpbg">
			<div><img src="{{asset('images/Group 4.png')}}" id="groupimg"></div>
			<table class="table" id="table">
  			<thead>
                    <tr>
                    @foreach($albums as $album)
                    <th>{{$album->name}}</th>
                    @if($loop->iteration == 4)
                        @break
                    @endif
                    @endforeach
      			
                    </tr>
  			</thead>
  			<tbody>
                           @foreach($albums as $album)
                           <tr>
                            @foreach($album->songs as $song)
                            <td>{{$song->name}}</td>
                            @endforeach
                            </tr>
                            @if($loop->index == 3)
                                @break
                            @endif
                           @endforeach
  			</tbody>
			</table>
		</div>
	</div>
<footer class="footer">
<div class="txtformat2 posit">  
<p class="navig" style="border-bottom: 0.25px solid white;">About</p>
<p class="s">About about about About about about</p>

</div>
<div class="txtformat2 posit">
  <p class="navig" style="border-bottom: 0.25px solid white;">Home</p>
<p class="s">Home home home Home home home</p>
</div>
<div class="txtformat2 posit">
  <p class="navig posit" style="border-bottom: 0.25px solid white;">Contacts</p>
  <p class="s">Contacts contacts contacts Contacts contacts contacts</p>
</div>
<div class="txtformat2 posit">
  <img src="{{asset('images/musifyme.png')}}" alt = "logo" height="30">
  <img src="{{asset('images/Oval 4.png')}}" id="oval">
  <img src="{{asset('images/logo.png')}}" id="nota">
</div>
</footer>
	<script>
		function slowScroll (id) {
			var offset = 0;
			$('html, body').animate ({
				scrollTop: $(id).offset ().top - offset
			}, 500);
			return false;
		}
	</script>
</body>
</html>