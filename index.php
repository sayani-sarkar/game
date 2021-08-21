<?php
include "config.php";
?>
<html>
<head>
<link rel="stylesheet" href="light.css">

<link rel="stylesheet" href="imgslide.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("background.jpg");
 
  
}

.topnav {
  overflow: hidden;
  background-color: url("nav.jpg");
}

.topnav a {
  float: right;
  image: url("a1.jpg");
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-image: url("bb.jpg");
  color: black;
}

.topnav a.active {
  background-image: url("bb.jpg");
  color: white;
}
.container {
         margin-top:5px;
         margin-left:5px;
         }
         .container ul {
         color: 0;
         }
         .container ul li {
         margin:0px;
         padding:20px;
         
         float: left; 
         border: 0px solid lightgray;
         list-style:none;
         }
         .container ul li:hover {
         border: 1px solid orange;
         }
</style>
<title>Game Zone</title>
</head>
<body>
<div class="topnav">
  

  <a href="updatescore.php">Update Score</a>
  <a href="check.php">Check Score</a>
  <a href="addplayer.php">Add Player</a>
  <a class="active" href="index.php">Home</a>
</div>

<div class="slider-wrapper">
  <div class="slider">
    
    <div class="slide">
      <figure class="slide-figure">
       <center ><img class="slide-img" src="mn.jpg"  /><center>
        
		
		<div class="main">
  <h1 class="neon">
    GAME ZONE. <br/><br>
	<br>
	
	
</div>
		
     
    <!-- .slide-figure -->
    </div><!-- .slide -->
      
<div class="col col-text col-left">
      <div class="Aligner-item">
       <center> <p><font color="#67F7A5 ">&ldquo;welcome to the greatest source of Gamming World .&rdquo;
          <cite>- Jim Henson</cite></center>
        </p>
      </div>
    </div>
  </div></section>
<div id="some-box">
  <h1>Game Section</h1>

	<article class="row" id="idea-one">
		<div><img src="sec.jpg" width="200px" height="200px"/></div>
		<div>
			<h3>Action Game</h3>
			<p>Garena Free Fire, also known as Free Fire, is a battle royale game, developed by Garena and published by Garena for Android and iOS. It became the most downloaded mobile game globally in 2019. .</p>
			<a href="#">Link to read more</a>
		</div>
	</article>

	<article class="row" id="idea-two">
		<div>
			<h3>Battle Game</h3>
			<p>The Surge 2 is an action role-playing video game developed by Deck13 Interactive and published by Focus Home Interactive for Microsoft Windows,PlayStation 4 and Xbox One. It is the sequel to 2017's The Surge. </p>
		</div>
		<div><img src="sec1.jpg" /></div>
	</article>

	<article class="row" id="idea-three">
		<div><img src="sec2.jpg" width="200px" height="200px"  /></div>
		<div>
			<h3>Horror Game</h3>
			<p>Amnesia is one of the best survival horror series of all time, with the first game in the series, Amnesia: The Dark Descent, proving to be one of the most terrifying games we've ever played. Imagine, if you will, that you're being chased by a monster and have no means of defending yourself.</p>
			<a href="#">Link to read more</a>
		</div>
	</article>

</div>
<div id="some-box1">
<div class="container">
<center><h1>Introducing with some most trending Games in our Gamming world</h1></center>
         <ul>
            <li><img src="h1.jpg" width="220px" height="320px" ></li>
            <li><img src="h2.jpg" width="220px" height="320px"></li>
            <li><img src="h3.jpg" width="220px" height="320px"></li>
			<li><img src="h4.jpg" width="220px" height="320px"></li>
			<li><img src="h5.jpg" width="220px" height="320px"></li>
         </ul>
      </div><br><br><br>
	  </div>
<div class="main">
<div class="neon">
Our This Year Pro Player
     <br/>
	 
    <img src="dd.jpg" height="200px" width="200px">
  </h1><div>
  </div>
    <!-- end priceing table -->
<div class="clearfix"></div>
</div>
</div><center>
<div class="social_links">
        <a href="https://www.instagram.com/developer_sah/">
            <span class="fa-stack fa-lg ig combo">
                <i class="fa fa-circle fa-stack-2x circle"></i>
                <i class="fa fa-instagram fa-stack-1x fa-inverse icon"></i>
              </span>
        </a>
        <a href="#">
            <span class="fa-stack fa-lg fb combo">
                <i class="fa fa-circle fa-stack-2x circle"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse icon"></i>
              </span>
        </a>
        <a href="#">
            <span class="fa-stack fa-lg yt combo">
                <i class="fa fa-circle fa-stack-2x circle"></i>
                <i class="fa fa-youtube-play fa-stack-1x fa-inverse icon"></i>
              </span>
        </a>
        <a href="https://twitter.com/developer_sah">
            <span class="fa-stack fa-lg tw combo">
                <i class="fa fa-circle fa-stack-2x circle"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse icon"></i>
            </span>
        </a>
        <a href="https://codepen.io/rahulsahofficial">
            <span class="fa-stack fa-lg gt combo">
                <i class="fa fa-circle fa-stack-2x circle"></i>
                <i class="fa fa-codepen fa-stack-1x fa-inverse icon"></i>
            </span>
        </a>
        <a href="https://www.linkedin.com/in/developersah/">
            <span class="fa-stack fa-lg tw combo">
                <i class="fa fa-circle fa-stack-2x circle"></i>
                <i class="fa fa-linkedin fa-stack-1x fa-inverse icon"></i>
            </span>
        </a>
    </div></center>




</body>
</html>