<!DOCTYPE html>
<html>
<head>
  <title>Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
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
  </style>
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Informatation Website</h1>
    <div class="w3-bar LinkColor">
      <a href="home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="pages/event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
      <a href="pages/transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
      <a href="pages/hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="pages/food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
      <a href="pages/activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="pages/QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button">User Login &#9660;</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="php/login.php" class="w3-bar-item w3-button">Log In</a>
          <a href="php/createUser.php" class="w3-bar-item w3-button">Create User</a>
          <a href="php/logout.php" class="w3-bar-item w3-button">Log Out</a>
        </div>
</div>
    </div>
  </div>
  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <?php
          echo "php works";
          echo "<br>background color is just a test";
        ?>
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
      <img src="images/homepage/editbpalogo.png" alt="bpa logo">
      <!--<br><br><br><br><br><br><br><br>
      <div class="carousel-caption" style="color:black">
        <h2>Welcome to the 2020 National Leadership Conference!</h2>
        <h3>Washington D.C.</h3>
      </div>
    -->
    </div>
    <div class="carousel-item">
      <img src="images/homepage/togetherwecreatelarge.jpg" alt="2019 logo">
      <!--<br><br><br><br><br><br><br><br>
      <div class="carousel-caption" style="color:black">
        <h2>2019 NLC</h2>
        <h3>The 2019 NLC was a blast!</h3>
        -->
      </div>

    <div class="carousel-item">
      <img src="images/homepage/2018conference.jpg" alt="2018 logo">
<!--<br><br><br><br><br><br><br><br>
      <div class="carousel-caption" style="color:black">
        <h2>2018 NLC</h2>
        <h3>We had a great time at the 2018 NLC!</h3>
        -->
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
          session_start();
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo "<h2>Hello ". $_SESSION["username"] . "</h2>";
          }
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo "<h2>Feel free to log in or create an account to gain access to all of our features<br>";
            echo "<a href='php/login.php' class='w3-button userFeatures'>Log In</a> <a href='php/createUser.php' class='w3-button userFeatures'>Create User</a></h2>";
          }
        ?>
        <!-- This only will occur when users login to the site -->
      </div>
      <div id="base" class="gridStyle">
        <div>
            <p>
              Connect With National BPA:
              <a href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank" style="color:darkblue">Facebook</a>
              <a href="https://www.instagram.com/bpanational/" target="_blank" style="color:darkblue">Instagram</a>
              <a href="https://twitter.com/National_BPA" target="_blank" style="color:darkblue">Twitter</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
