<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<title>Artist</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{ asset('css/view.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.css') }}">
<script>
  function scrollWin (id){
    var offset = 0;
    $('html, body').animate({
    scrollTop: $(id).offset ().top - offset}, 500);
  return false;
  }
</script>

<header>
<!-- #7a6d76 -->
<!-- style="background-color:#2B2A2F  " -->

<div class="navig2" style="background-color: rgba(43, 42, 47, 0.6);">
<ul class = "navig1">
 <li class="navig"><img src="{{asset('images/musifyme.png')}}" alt = "logo" height="25"></li>
  <li class="navig h"><a href="{{ route('main') }}" >About</a></li>
  <li class="navig h"><a href="{{ route('genre') }}" >Genre</a></li>
  <li class="navig h"><a href="{{ route('album') }}" >Album</a></li>
  <li class="navig h" style="border-bottom: 0.5px solid #E88C08;"><a href="{{ route('artist') }}">Artist</a></li>
  <li class="navig h"><a href="{{ route('login') }}">Sign in</a></li>
  <li class="navig h"><a href="{{ route('register') }}">Sign Up</a></li>
  <li class="navig" style="padding-right: 203px;">
    <form>
      <input type="text" placeholder=" Search..." name="searchArtist" class = "Search" >
    </form>
  </li>
</ul>
</div>
</header>
<div class = "KanyeBiography" style="background-image: url({{ asset('photo/artists/'.$artist->photo) }});" id = "more">  

<div style="background-color: rgba(90,90,90,.5);margin-top:85px;margin-left: 40px; margin-bottom: 270px;">
<table cellpadding="0" cellspacing="0">
          <tr class="headerPlaylist">
            <th><img src="{{asset('images/musifyme.png')}}" height=15 width=60 alt="logo" style="padding-left: 5px; padding-top: 5px;"></th>
            <th><p class="txtformat1" style="text-align: center;">My playlist</p></th>
            <th class="playBtn"><button><img src="{{asset('images/playbtn.png')}}"><audio></audio></button></th>
          </tr>
          @foreach($songs as $song)
          <tr>
            <td class="logo_playlist"><img src="{{asset('photo/songs/'.$song->photo)}}" height="40" width="40" style="padding-top: 5px;"></td>
             <td class="name_of_song" ><p>{{ $song->name }}</p><p class="nameOfArtist">{{$artist->name}}</p></td>
             <td><p class="duration">{{ round($song->duration/60) }} : {{ $song->duration % 60 }}</p></td>
          </tr>
          @endforeach
        </table>
</div>

<div class="txtformat1 position1">
  <p style="letter-spacing: 4px; font-size: 28px;">Biography</p>
  <br>
  <hr>
  <br>
  <p  style="letter-spacing: 0px;">
      {{ $artist->biography }}
  </p>  
</div>
</div>


<footer class="footer">  
<div class="txtformat2 posit" style="font-size:14px; ">  
<p class="navig" style="border-bottom: 0.25px solid white;">About</p>
<p class="s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

</div>
<div class="txtformat2 posit" style="font-size:14px; ">
  <p class="navig" style="border-bottom: 0.25px solid white;">Home</p>
<p class="s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</div>
<div class="txtformat2 posit" style="font-size:14px; ">
  <p class="navig posit" style="border-bottom: 0.25px solid white;">Contacs</p>
  <p class="s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</div>
<div class="txtformat2 posit">
  <img src="{{asset('images/musifyme.png')}}" alt = "logo" height="30">
</div>	
</footer>

</body>
</html>

