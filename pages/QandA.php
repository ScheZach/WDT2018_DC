<!DOCTYPE html>
<html>
<head>
  <title>Q&A: Washington DC Nationals Guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    h2 {
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Questions and Answers Page</h1>
    <div class="w3-bar w3-indigo">
      <a href="../index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="event.php" class="w3-bar-item w3-button w3-hover-blue">NLC</a>
      <a href="transportation.php" class="w3-bar-item w3-button w3-hover-blue">Transportation</a>
      <a href="hotel.php" class="w3-bar-item w3-button w3-hover-blue">Hotel</a>
      <a href="food.php" class="w3-bar-item w3-button w3-hover-blue">Food</a>
      <a href="activities.php" class="w3-bar-item w3-button w3-hover-blue">Activities</a>
      <a href="QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
      <div class="w3-dropdown-hover w3-right">
        <button class="w3-button">User Login &#9660;</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
          <a href="../php/login.php" class="w3-bar-item w3-button">Log In</a>
          <a href="../php/createUser.php" class="w3-bar-item w3-button">Create User</a>
          <a href="../php/logout.php" class="w3-bar-item w3-button">Log Out</a>
        </div>
</div>
    </div>
  </div>
  <div class="w3-container">
    <div class="grid-container">
      <div id="sidebar" class="gridStyle">
        <?php echo "php works";?>

      </div>
      <div id="main" class="gridStyle">
        <?php
          session_start();
          if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo "<h2>". $_SESSION["username"] . ", Here are your answered questions.</h2>";
            include '../php/singleUserTable.php';
            echo "<h2>Here are all of your questions.</h2>";
            include '../php/userQuestion.php';
            echo "<hr>";
            echo "<h2>Have a question? <a href='../php/addQuestion.php'>Click here</a> to add one.</h2>";
            echo "<h2>Have an answer? <a href='../php/addAnswer.php'>Click here</a> to add one.</h2>";
            echo "<hr>";
          }
        ?>
        <h2>All questions with answers</h2>
        <?php
        include '../php/Maintable.php';
        echo "<h2>All questions</h2>";

        $servername = "localhost";
        $username = "root";
        $password = "toor";
        $dbname = "WDDC2018";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        include '../php/QuestionTable.php';

        $conn->close();
        ?>
      </div>
      <div id="base" class="gridStyle">

      </div>
    </div>
</div>
</body>
</html>
