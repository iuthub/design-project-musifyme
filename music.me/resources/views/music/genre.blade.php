<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <title>Genres</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="{{asset('css\view.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('fontawesome-all.css')}}">
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
  <li class="navig h" style="border-bottom: 0.5px solid #E88C08;" ><a href="{{ route('genre') }}" >Genre</a></li>
  <li class="navig h"><a href="{{ route('album') }}" >Album</a></li>
  <li class="navig h"><a href="{{ route('artist') }}">Artist</a></li>
  <li class="navig h"><a href="{{ route('login') }}">Sign in</a></li>
   <li class="navig h"><a href="{{ route('register') }}">Sign Up</a></li>
  <li class="navig" style="padding-right:87px;">
    <form action="/action_page.php">
      <input type="text" placeholder=" Search..." name="search" class = "Search" >
    </form>
  </li>
</ul>
</div>
<div class="upper">
<div class="txtformat position">
<p>Discover a large set of<br></p>
<p>Genres with</p>
<img src="{{asset('images/musifyme.png')}}" alt = "logo" height="25">
<hr>
<p style="text-align: center; line-height: 100px">Swipe to start</p>
<!-- <br> -->
<!-- <button onclick="scrollWin()" style = "padding-right: 180px;">
<img src ="ipProjectAssets/arrowSwipe.png"/>
</button> -->
<a href="javascript://0" onclick="scrollWin('#more')"><img src="{{asset('images/arrowSwipe.png')}}"  style ="padding-right: 180px;"></a>

</div>
</div>
</header>
<div class = "rockPunk" id = "more">  

<div style="margin-top:85px;margin-left: 80px;">
<a href="{{route('rock')}}" class="txtformat1">Explore >></a>
</div>

<div class="txtformat1 position1">
  <p style="letter-spacing: 4px; font-size: 28px;">Rock & Punk</p>
  <br>
  <hr>
  <br>
  <p style="letter-spacing: 2px;">One of the major<br>musical style of<br>XX</p>
  <br>
  <br>
  <br>
  <p style="font-weight: lighter; letter-spacing:1px;">Queens<br>performance,<br>Kingston Arena,<br>Freddie Mercury</p>
</div>
</div>
<div class="hiphopRap txtformat1" style="text-align: left;"> 
<div>
<p style="font-size: 28px; padding-top:55px;padding-left:80px;">Hip-Hop & Rap</p>
<br>
<br>

<p style="padding-left: 80px; padding-top:350px; font-weight: lighter;">2Pac Shakur - a<br>legend of hip-hop<br>culture of Afro-<br>Americans</p>
</div>
<div style="padding-top:55px;padding-right:80px;">
<a href="{{route('hiphop')}}" class="txtformat1">Explore >></a>
</div>
</div>

<div class="classic txtformat1"> 
<div style="margin-top:85px;margin-left: 80px;">
<a href="{{route('classic')}}" class="txtformat1" style="color: white;">Explore >></a>
</div>

<div class="position1 txtformat1" style="color: white; text-align: left;">
  <p style="color:white; font-weight:normal; letter-spacing:4px; font-size: 28px;">Classic</p>
  <br>
  <hr>
  <br>
  <p style="color:white;  font-weight: normal; letter-spacing: 2px;">Classic music is<br>immortal</p>
  <br>
  <br>
  <br>
  <br>
  <br>
  <p style="color:white; font-weight: lighter; letter-spacing:1px;">London's<br>orchesta<br>performance</p>
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
