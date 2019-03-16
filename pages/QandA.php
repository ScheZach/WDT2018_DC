<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Q&A: Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../images/togetherwecreatesm.png">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    h2 {
      text-align: center;
    }
    h3 {
      text-align: center;
    }
    #userAdd {
      margin: .5em;
      border: .5em ridge #1B325F;
      color: #DDDDDD;
      background-color: #3A89C9;
    }
    .brightlink {
      color: #CCCCCC;
    }
    @media screen and (max-width: 40em) {
      th {
        font-size: .7em;
      }
      td {
        font-size: .75em;
      }

    }
  </style>
</head>
<body>
  <div class="w3-bar ribbonBack">
  <h1 id="header" class="HeadCenter">Welcome to the 2020 NLC at Washington D.C. Information Website</h1>
  <div class="w3-bar LinkColor">
    <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
    <a href="event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
    <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
    <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
    <a href="food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
    <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
    <a href="QandA.php" class="w3-bar-item w3-button w3-hover-blue w3-light-blue">Q&A</a>
    <div class="w3-dropdown-hover w3-right">
      <button class="w3-button">User Login &#9660;</button>
      <div class="w3-dropdown-content w3-bar-block w3-border">
        <a href="../php/login.php" class="w3-bar-item w3-button UserLink">Log In</a>
        <a href="../php/createUser.php" class="w3-bar-item w3-button UserLink">Create User</a>
        <a href="../php/logout.php" class="w3-bar-item w3-button UserLink">Log Out</a>
      </div>
</div>
    </div>
  </div>
  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <h2 class="sidebarHead"><b>Relevent Sites</b></h2>
      <hr>
      <ul class="sidebarSite">
        <li class="link"><a href="http://www.bpa.org/" target="_blank">BPA.org</a></li>
      </ul>

      </div>
      <div id="main" class="gridStyle">
        <?php
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo "<h2>". $_SESSION["username"] . ", Here are your answered questions.</h2>";
            echo "<div style='overflow-x:auto;'>";
            include '../php/singleUserTable.php';
            echo "</div>";
            echo "<h2>Here are all of your questions.</h2>";
            echo "<div style='overflow-x:auto;'>";
            include '../php/userQuestion.php';
            echo "</div>";
            echo "<hr><div id='userAdd'>";
            echo "<h2>Have a question? <a class='brightlink' href='../php/addQuestion.php'>Click here</a> to add one.</h2>";
            echo "<h2>Have an answer? <a class='brightlink' href='../php/addAnswer.php'>Click here</a> to add one.</h2>";
            echo "</div><hr>";
          }
        ?>
        <h2>All questions with answers</h2>
        <?php
        include '../php/Maintable.php';
        echo "<h2>All questions</h2>";

        include '../php/DBconnect.php';

        include '../php/QuestionTable.php';

        $conn->close();
        ?>
      </div>
      <div id="base" class="gridStyle">
        <div>
            <p>
              Connect With National BPA:<br>
              <a class="w3-button userFeatures" href="https://www.facebook.com/businessprofessionalsofamerica" target="_blank" style="color:darkblue">Facebook</a>
              <a class="w3-button userFeatures" href="https://www.instagram.com/bpanational/" target="_blank" style="color:darkblue">Instagram</a>
              <a class="w3-button userFeatures" href="https://twitter.com/National_BPA" target="_blank" style="color:darkblue">Twitter</a>
            </p>
        </div>
      </div>
    </div>
</div>
</body>
</html>
