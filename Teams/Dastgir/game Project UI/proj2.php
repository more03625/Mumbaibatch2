<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main-page-tournament.css">
  <style>
  body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }


  .header {
    overflow: hidden;
    background-color: #f1f1f1;
    background-image: radial-gradient(blue,darkblue,black);
    padding: 20px 10px;
  }

  .header a {
    float: left;
    color: white;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
  }

  .header a.logo {
    font-size: 25px;
    font-weight: bold;
  }

  .header a:hover {
    background-color: #ddd;
    color: black;
  }

  .header a.active {
    background-color: black;
    color: white;
  }

  .header-right {
    float: right;
  }

  @media screen and (max-width: 500px) {
    .header a {
      float: none;
      display: block;
      text-align: left;
    }

    .header-right {
      float: none;
    }
  }
  .img2{
    background-color: darkblue;
    margin-top: 0.1%;
    text-align: center;
    padding: 1%;
  }
  .ltour{
    text-align: center;
    font-size: 50px;
    font-family: italic;
    font-weight: bold;
    background-color: black;
    margin-top:0.1%;

  }
  .ltour a{
    text-decoration: none;
    color: white;
  }
  .ltour a:hover{
    color: darkblue;
  }
  .main,.main2{
    display:flex;
  }
  .frame1,.frame2,.frame3,.frame4{
    padding-left: 6%;
    padding-top: 1%;
  }
  .footer {
     padding: 20px;
     background-color: black;
     color: white;
     text-align: center;
     margin-top: 15px;
  }

  nav a{
          color: #fff;
          text-decoration: none;
          padding: 7px 25px;
          display: inline-block;
      }

      nav :hover{
        color: blue;
        transform: scale(1.11);

      }
      .fcontainer p{
          line-height: 200px; /* Create scrollbar to test positioning */
      }
      #logof{

        border-radius: 25%;
      }

      .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        display: inline-block;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 25%;
      }
      .fa:hover {
          opacity: 0.7;
          transform: scale(1.11);
      }

      .fa-google {
    background: #dd4b39;
    color: white;
  }

  .fa-facebook {
  background: blue;
  color: white;
  }

      .fa-youtube {
    background: #bb0000;
    color: white;
  }


      .fa-twitter {
        background: #55ACEE;
        color: white;
      }

  </style>
</head>
<body>
    <div class="header">
  <a href="proj2.html" class="logo"><i>Gaming World</i></a>
  <div class="header-right">
    <a class="active" href="proj2.html">Home</a>
    <a href="Tournament.html">Tournaments</a>
    <a href="loginh.html"><span name="text">Login</span></a>
    <a href="demo.html">SignUp</a>
  </div>
</div>
<?php
  $text=$_POST["text"];
  $text="Helllo";
?>
  <div>
  <section>
    <a href="demo.html"><img class="mySlides" src="m1.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="f1.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="a1.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="n1.png" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="s1.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="p1.jpg" style="width:100%; height:400px;"></a>
    <a href="demo.html"><img class="mySlides" src="as.jpg" style="width:100%; height:400px;"></a>
  </section>

</div>
<div class="img2">
  <img src="g22.png" style="height=120px">
</div>
<div class="ltour">
  <a href="Tournament.html">Our Tournaments</a>
</div>
<div class="image-section">
  <ul class="image-grid">
    <li>
      <div class="image image-1" >
        <a href="#">
          <h3></h3>
        </a>
      </div>
    </li>
    <li>
      <div class="image image-2">
        <a href="#">
          <h3></h3>
        </a>
      </div>
    </li>
    <li>
      <div class="image image-3">
        <a href="#">
          <h3></h3>
        </a>
      </div>
    </li>
    <li>
      <div class="image image-4">
        <a href="#">
          <h3></h3>
        </a>
      </div>
    </li>
    <li>
      <div class="image image-5">
        <a href="#">
          <h3></h3>
        </a>
      </div>
    </li>
  </div>
<div class="main">
<div class="frame1">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/ENl0XNd1AKM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="frame2">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/jhdyMLnhaNk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<div class="main2">
<div class="frame3">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/s6QggWZFsN8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="frame4">
  <iframe width="555" height="266" src="https://www.youtube.com/embed/N-xHcvug3WI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<div class="footer">

  <div class="fcontainer">

  <div class="img">
    <img src="log.svg" id="logof" width="170px" height="170px" align=left>
  </div>
            <nav>
                <a href="help.html" style="font-size:25px">Help</a>
                <a href="aboutus.html" style="font-size:25px">About Us</a>
                <a href="Tandc.html" style="font-size:25px">Term & Condition</a>
                <a href="pp.html" style="font-size:25px">Privacy Policy</a>
                <a href="contus.html" style="font-size:25px">Contact Us</a>
           </nav>
    </div>
<div>
      <a class="fa fa-google" href="https://google.com" style="font-size:20px"></a>
      <a class="fa fa-facebook" href="https://facebook.com" style="font-size:20px"></a>
      <a class="fa fa-youtube" href="https://youtube.com" style="font-size:20px"></a>
      <a class="fa fa-twitter" href="https://twitter.com" style="font-size:20px"></a>
    </div>
    <div>
      <p>© 2019 GamingWorld. All rights reserved. GamingWorld.com</p></div>

</div>
</body>
</html>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
