<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="images/togetherwecreatesm.png">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link href="css/cover.css" rel="stylesheet">
  <style>
    #demo {
      background-color: #C7D1D7;
    }
    .link {
      text-align: left;
      font-size: 1.5em;
    }
    .carousel-item {
      width: 100%;
      height: auto;
    }
    img {
      width: 100%;
      height: auto;
    }
    @media screen and (max-width: 40em) {
      .mainInfo {
        font-size: 1.5em;
      }
    }
    #test {
      align: right;
    }
  </style>
</head>
<body>
  <div class="w3-bar ribbonBack">
    <h1 id="header" class="HeadCenter">Welcome to the 2020 NLC in Washington D.C.</h1>
    <div class="w3-bar LinkColor">
      <a href="home.php" class="w3-bar-item w3-button w3-hover-blue w3-light-blue">Home</a>
      <a href="pages/event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
      <a href="pages/transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
      <a href="pages/hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="pages/food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
      <a href="pages/activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="pages/QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button UserLinkHover">User Login &#9660;</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="php/login.php" class="w3-bar-item w3-button UserLink">Log In</a>
          <a href="php/createUser.php" class="w3-bar-item w3-button UserLink">Create User</a>
          <a href="php/logout.php" class="w3-bar-item w3-button UserLink">Log Out</a>
        </div>
</div>
    </div>
  </div>



  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <h3>The 2020 NLC will be held <b>May 6-10</b>.</h3><br>
        <ul>
          <li class="link"><a href="http://www.bpa.org/" target="_blank">BPA.org</a></li>
          <li class="link"><a href="https://www.nationalharbor.com/" target="_blank">National Harbor</a></li>
          <li class="link"><a href="https://ride.guru/" target="_blank">RideGuru</a></li>
          <li class="link"><a href="https://www.marriott.com/hotels/travel/wasgn-gaylord-national-resort-and-convention-center/" target="_blank">Gaylord</a></li>
        </ul>
      </div>
      <div id="main" class="gridStyle">
        <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/homepage/editbpalogo.png" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/homepage/togetherwecreatelarge.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="images/homepage/2018conference.jpg" alt="New York">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        <?php
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo "<h2 class='mainInfo'>Hello ". $_SESSION["username"] . "</h2>";
          }
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo "<h2 class='mainInfo'>Log in or create an account to gain access to all of our features<br>";
            echo "<a href='php/login.php' class='w3-button userFeatures'>Log In</a> <a href='php/createUser.php' class='w3-button userFeatures'>Create User</a></h2>";
          }
        ?>
        <!-- This only will occur when users login to the site -->
      </div>
      <div id="base" class="gridStyle">
        <div>
            <p>
              Connect With National BPA:<br>
              <a class="w3-button userFeatures" href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank">Facebook</a>
              <a class="w3-button userFeatures" href="https://www.instagram.com/bpanational/" target="_blank">Instagram</a>
              <a class="w3-button userFeatures" href="https://twitter.com/National_BPA" target="_blank">Twitter</a>
            </p>
        </div>
      </div>
    </div>
  </div>

  <footer id="footer" style="background-color: #9cc4e4">
    <span class="inner">
        <div align="left">
          <p>Copyright &copy; Business Professionals of America. All rights reserved.</p>
        </div>
				<div align="right" id="test">
          <a class="w3-button userFeatures" href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank"><img src="images/logos/facebook/white/PNG/30pxflogo-HexRBG-Wht-58.png" alt="Go to BPA National Facebook"</a>
          <a class="w3-button userFeatures" href="https://www.instagram.com/bpanational/" target="_blank"><img src="images/logos/30pxinstagram.png" alt="Go to BPA National Instagram"></a>
          <a class="w3-button userFeatures" href="https://twitter.com/National_BPA" target="_blank"><img src="images\logos\twitter\Twitter Social Icons\Twitter Social Icons\Twitter_SocialIcon_Square\30pxTwitter_Social_Icon_Square_White.png" alt="Go to BPA National Twitter"></a>
				</div>
    </span>
	</footer>
</body>
</html>
