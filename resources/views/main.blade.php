<!doctype html>
 <html lang="en">
   
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  .navbar-custom {
    color:black;
    background-image: linear-gradient(black, lightblue, black);
}

.navbar-brand {
  color: red;
  text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;
}


.img {
  width: 400px;
  height: 200px;
  border:100px solid yellow;
  background: url(image/312-3126045_create-your-your-name-in-japanese-kanji-music.png) no-repeat;
  -moz-box-shadow: 10px 10px 5px yellow;
  -webkit-box-shadow: 10px 10px 5px yellow;
  box-shadow: 50px 50px 5px yellow;
  -moz-border-radius:25px;
  -webkit-border-radius:25px;
  border-radius:25px;
    }
  </style>

  <title>Japan&English Music Website!</title>
</head>
<nav class="navbar navbar-light navbar-custom">
  <img src="image/logo.png" class="img-fluid rounded-circle" style="width: 50px" alt="">
  <a class="navbar-brand" style="width: left;" href="">M.Y.S</a>&nbsp;  
  <a href="{{ url('/main') }}">Home</a>
  <a href="{{ url('/contactus') }}">Help</a>
  <a href="{{ url('/login') }}">Sign in</a>
  <a href="{{ url('/register') }}">Sign up</a>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/english song') }}">English Music</a>
                <a class="dropdown-item" href="{{ url('/lisa') }}">Singer Lisa</a>
                  <a class="dropdown-item" href="{{ url('/kenshi') }}">Singer Kenshi</a>
                  <a class="dropdown-item" href="{{ url('/list') }}">Japan Music</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/viewlist') }}">Plan</a>
              </div>

              @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <div class="nav-link dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
              
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="float: right;">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  
</form>
</div>
</div>
</nav>

</style>
</head>
<body>

<div class="col-md-1"></div>
</div>
</div>
 
</div> 
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center"></h2>

<img class="nature" src="image/download.gif" width="100%">
<img class="nature" src="image/Musical-wallpapers-mobile.jpg" width="100%">
<img class="nature" src="image/typography-music-music-is-life-minimalism-wallpaper-preview.jpg" width="100%">
<img class="nature" src="image/music-1080p_090651535.jpg" width="100%">



<div class="w3-content w3-display-container">
<iframe width="300" height="200" src="https://www.youtube.com/embed/B3SZ5772mCE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="300" height="200" src="https://www.youtube.com/embed/nUtgOwCh2uY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="300" height="200" src="https://www.youtube.com/embed/TIthXhCSgPE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>



<script src="https://www.w3schools.com/lib/w3.js"></script>
<script>

w3.slideshow(".nature", 3000);


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
 <audio id="myAudio" controls autoplay>

  <source src="LiSA.ogg" type="audio/ogg">
  <source src="music/secretbase.mp3" type="audio/mpeg">
  </audio>
  <script>
    document.getElementById("myAudio").play();
  </script>
<style>
  body{
      margin: 0;
      background-color:black;
      background-image: url(image/img_lights.jpg );
      background-size: 100%;
      background-repeat: no-repeat;
}
</style>
</body>
<div class="container-fluid">
  <div class="row">
     <div class="col-md-12 bg-info">
         M.Y.S <br>
         No 16, Jalan Seri Putra 1, <br>
         Putra, 81000 Kulai, Johor <br>
         07-660 0628
    <div style="float: right;">
        <br>Email: jeremylee517@gmail.com <br>
                    weesiang1234@gmail.com
        <img src="image/a-e15-year-long-legacy.webp" alt="" >
    </div>

</html>



