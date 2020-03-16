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
  <a class="navbar-brand" style="width: left;" href="{{ url('/main') }}">M.Y.S</a>&nbsp;  
            <a class="nav-link" href="{{ url('/main') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ url('/help') }}">Help<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ url('/login') }}">Sign in<span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ url('/register') }}">Sign up<span class="sr-only">(current)</span></a>
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

              <body>
          <form class="form-inline my-2 my-lg-0" method="post" action="{{ route('search.product') }}">
          {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="searchProduct">
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
           
   
    <div class="container-fluid" style="margin-top: 10px" >
        <div class="row">
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item active">package</li>
                    <li class="list-group-item">PREMIUM</li>
                    <li class="list-group-item">BASIC</li>
                   
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-8">
                <div class="card border-0">
                    <div class="row">

                    @yield('content')
                    </div>

                    </div>

                   

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>    
                    
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>





        <div class="row">
            <div class="col-md-12 bg-info">
                    NSIT Academy <br>
                    No.16, Jalan Sri Putra 1,
                    Bandar Putra, 
                    81000 Kulai, Johor <br>
                    607-6600628
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>