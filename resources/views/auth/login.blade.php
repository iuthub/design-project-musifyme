<!DOCTYPE html>
<html>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<title>Sign In</title>
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

<div class="navig2" style="background-color: rgba(105, 105, 105, 0.6);">
<ul class = "navig1">
  <li class="navig"><img src="{{asset('images/musifyme.png')}}" alt = "logo" height="25"></li>
  <li class="navig h"><a href="{{ route('main') }}" >About</a></li>
  <li class="navig h"><a href="{{ route('genre') }}" >Genre</a></li>
  <li class="navig h"><a href="{{ route('album') }}" >Album</a></li>
  <li class="navig h"><a href="{{ route('artist') }}">Artist</a></li>
  <li class="navig h" style="border-bottom: 0.5px solid #E88C08;"><a href="{{ route('login') }}">Sign in</a></li>
  <li class="navig h"><a href="{{ route('register') }}">Sign Up</a></li>
  <li class="navig" style="padding-right: 203px;">
    <form action="">
      <input type="text" id="mysearch" placeholder=" Search..." name= "search" class = "Search" >
    </form>
  </li>
</ul>
</div>

<div class="signUp">
<div class="txtformat positSignUp">
<br>
<a class="signUphr" href="SignUp.html">SignUp</a>

<br>
   <form action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
         
        
        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class = "loginPass loginPass1" required>
        @if ($errors->has('email'))
            <span class="help-block" style="font-size: 12px">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input type="password" placeholder=" Password" name="password" class = "loginPass loginPass1" required>
        @if ($errors->has('password'))
            <span class="help-block" style="font-size: 12px">
               <strong>{{ $errors->first('password') }}</strong>
           </span>
        @endif
        <button type="submit" class="button">Login</button>
    </form>
 
  

</div>
</div>


<footer class="footer">  
<div class="txtformat2 posit" style="font-size: 14px;">  
<p class="navig" style="border-bottom: 0.25px solid white;">About</p>
<p class="s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

</div>
<div class="txtformat2 posit">
  <p class="navig" style="border-bottom: 0.25px solid white; font-size:">Home</p>
<p class="s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</div>
<div class="txtformat2 posit">
  <p class="navig posit" style="border-bottom: 0.25px solid white;">Contacs</p>
  <p class="s">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
</div>
<div class="txtformat2 posit">
  <img src="{{ asset('images/musifyme.png') }}" alt = "logo" height="30">
</div>
</footer>


</header>
