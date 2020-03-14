<!doctype html>
 <html lang="en">
   
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Japan&English Music Website!</title>
</head>
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
  background: url(image/logo.png) no-repeat;
  -moz-box-shadow: 10px 10px 5px yellow;
  -webkit-box-shadow: 10px 10px 5px yellow;
  box-shadow: 50px 50px 5px yellow;
  -moz-border-radius:25px;
  -webkit-border-radius:25px;
  border-radius:25px;
    }
  </style>
<nav class="navbar navbar-light navbar-custom">
  <img src="image/logo.png" class="img-fluid rounded-circle" style="width: 50px" alt="">
  <a class="navbar-brand" style="width: left;" href="{{ url('/main') }}">M.Y.S</a>&nbsp;  

      
            <a class="nav-link" href="{{ url('/main') }}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="{{ url('/contactus') }}">Help<span class="sr-only">(current)</span></a>
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
                <a class="dropdown-item" href="loading.html">Plan</a>
              </div>
              
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
  <div class="a">
<font color="white" size="5">Lisa- gurenge</font>
<h2><img src="japan/picture/gurenge.jpg" alt="gurenge" width="20%"></h2>
<div class="">
<audio controls>
<source src="japan/song/gurenge.ogg" type="audio/ogg">
<source src="japan/song/gurenge.mp3" type="audio/mp3">
</audio>
<button onclick="myFunction()">Lycis show/hide</button>
<a href="{{ url('/list') }}"><button type="button">Back to list</button></a>
<div id="gurenge">
<p><iframe width="420" height="315" src="https://www.youtube.com/embed/ou0ZL1SGBrk" frameborder="0" allowfullscreen></iframe></p>
<font color="white" size="5">Lycis</font>
<br>
<font color="white" size="3">Japan/Romaji/English:</font><br><br>
<font color="white" size="3">強くなれる理由を知った 僕を連れて進め<br>
  tsuyoku nareru riyuu wo shitta boku wo tsurete susume<br>
  I knew why I could be strong<br><br>
    泥だらけの走馬灯に酔う こわばる心<br>
    dorodarake no soumatou ni you kowabaru kokoro<br>
    Drunk with a muddy running horselight<br><br>
    震える手は掴みたいものがある それだけさ<br>
    furueru te wa tsukamitai mono ga aru sore dake sa<br>
    There are trembling hands that you want to grab.<br><br>
    夜の匂いに空睨んでも<br>
    yoru no nioi ni sora nirandemo<br>
    Even if the sky smells at night<br><br>
    変わっていけるのは自分自身だけ それだけさ<br>
    kawatte ikeru no wa jibun jishin dake sore dake sa<br>
    Only you can change it.<br><br>
    強くなれる理由を知った 僕を連れて進め<br>
    tsuyoku nareru riyuu wo shitta boku wo tsurete susume<br>
    I knew why I could be strong<br><br>
    どうしたって！<br>
    dou shitatte!<br>
    What's wrong!<br><br>
    消せない夢も 止まれない今も<br>
    kesenai yume mo tomarenai ima mo<br>
    Even the unstoppable dreams can't stop<br><br>
    誰かのために強くなれるなら<br>
    dareka no tame ni tsuyoku nareru nara<br>
    If you can be strong for someone<br><br>
    ありがとう 悲しみよ<br>
    arigatou kanashimi yo<br>
    Thank you sorrow<br><br>
    世界に打ちのめされて負ける意味を知った<br>
    sekai ni uchinomesarete makeru imi wo shitta<br>
    I knew the meaning of losing after being beaten by the world<br><br>
    紅蓮の華よ咲き誇れ！ 運命を照らして<br>
    guren no hana yo sakihokore! unmei wo terashite<br>
    Proudly bloom in the bloom of Guren! In light of fate<br><br>
    イナビカリの雑音が耳を刺す 戸惑う心<br>
    inabikari no zatsuon ga mimi wo sasu tomadou kokoro<br>
    Mind the noise of lightning confused prick the ear<br><br>
    優しいだけじゃ守れないものがある？ わかってるけど<br>
    yasashii dake ja mamorenai mono ga aru? wakatteru kedo<br>
    Is there anything you can't protect just by being gentle? I know<br><br>
    水面下で絡まる善悪 透けて見える偽善に天罰<br>
    suimenka de karamaru zenaku sukete mieru gizen ni tenbatsu<br>
    Good and evil tangled under the surface of water<br><br>
    逸材の花より 挑み続け咲いた一輪が美しい<br>
    itsuzai no hana yori idomi tsuzuke saita ichirin ga utsukushii<br>
    One flower that has continued to challenge from the flower of a gem<br><br>
    乱暴に敷き詰められた トゲだらけの道も<br>
    ranbou ni shikitsumerareta togedarake no michi mo<br>
    The road full of thorns laid down wildly<br><br>
    本気の僕だけに現れるから 乗り越えてみせるよ<br>
    honki no boku dake ni arawareru kara norikoete miseru yo<br>
    Because it appears only to the serious servant, I'll get over it<br><br>
    簡単に片付けられた 守れなかった夢も<br>
    kantan ni katazukerareta mamorenakatta yume mo<br>
    Even dreams that were easily cleared<br><br>
    紅蓮の心臓に根を生やし この血に宿ってる<br>
    guren no shinzou ni ne wo hayashi kono chi ni yadotteru<br>
    I have roots in the heart of Gurren, and I ’m in this blood.<br><br>
    人知れず儚い 散りゆく結末<br>
    hito shirezu hakanai chiriyuku ketsumatsu<br>
    A strange and ugly end<br><br>
    無情に破れた 悲鳴の風吹く<br>
    mujou ni yaburete himei no kaze fuku<br>
    The screaming wind that broke ruthlessly<br><br>
    誰かの笑う影 誰かの泣き声<br>
    dareka no warau kage dareka no nakigoe<br>
    Someone's laughing shadow Someone's cry<br><br>
    誰もが幸せを願ってる<br>
    daremo ga shiawase wo negatteru<br>
    Everyone wants happiness<br><br>
    どうしたって！<br>
    dou shitatte!<br>
    What's wrong!<br><br>
    消せない夢も 止まれない今も<br>
    kesenai yume mo tomarenai ima mo<br>
    Even the unstoppable dreams can't stop<br><br>
    誰かのために強くなれるなら<br>
    dareka no tame ni tsuyoku nareru nara<br>
    If you can be strong for someone<br><br>
    ありがとう 悲しみよ<br>
    arigatou kanashimi yo<br>
    Thank you sorrow<br><br>
    世界に打ちのめされて負ける意味を知った<br>
    sekai ni uchinomesarete makeru imi wo shitta<br>
    I knew the meaning of losing after being beaten by the world<br><br>
    紅蓮の華よ咲き誇れ！ 運命を照らして<br>
    guren no hana yo sakihokore! unmei wo terashite<br>
    Proudly bloom in the bloom of Guren! In light of fate<br><br>
</font>
</p>    
</div>
<script>
    function myFunction() {
  var x = document.getElementById("gurenge");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
$(document).ready(function(){
    $("#hide").click(function(){
      $("p").hide();
    });
    $("#show").click(function(){
      $("p").show();
    });
  });
  </script>
<style>
  body{
      margin: 0;
      background-color: gray;
      background-image: url(image/img_lights.jpg );
      background-size: 100%;
      background-repeat: no-repeat;
}
div.a {
  text-align: center;
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
        Email: jeremylee517@gmail.com
        <img src="image/a-e15-year-long-legacy.webp" alt="" >
    </div>

</html>



