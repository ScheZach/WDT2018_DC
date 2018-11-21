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
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Informatation Page</h1>
    <div class="w3-bar w3-indigo">
      <a href="index.html" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="pages/transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
      <a href="pages/hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="pages/activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="pages/QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button">User Login ^</button>
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
        <h2>Main informatation</h2>
        <?php
          session_start();
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo "<h2>Hello ". $_SESSION["username"] . "</h2>";
          }
        ?>
        <!-- This only will occur when users login to the site -->
      </div>
      <div id="base" class="gridStyle">
        <p>This is the other informatation box</p>
      </div>
    </div>
  </div>
</body>
</html>
