<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}

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

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

  if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

  if(empty($username_err) && empty($password_err)) {
    $sql = "SELECT userId, username, password FROM user WHERE username = ?";
    echo "not empty";
    if($stmt = $conn->prepare($sql)) {
      echo "prepared";
       $stmt->bind_param("s", $param_username);
       $param_username = $username;
       if($stmt->execute()) {
         echo "Execute";
         $stmt->store_result();
         if($stmt->num_rows == 1) {
           echo "MoreRows";
           $stmt->bind_result($userId, $username, $hashed_password);
           if($stmt->fetch()) {
             echo "fetch";
             echo " ".$password;
             echo " ".$hashed_password;
             if($password === $hashed_password) {
               session_start();
               $_SESSION["loggedin"] = true;
               $_SESSION["id"] = $userId;
               $_SESSION["username"] = $username;
               echo "logged in";
               header("location: ../home.php");
             } else {
               $password_err = "The password you entered was not valid.";
               echo $password_err;
             }
           }
         } else {
           $username_err = "No account found with that username.";
         }
       } else {
         echo "Oops! Something went wrong. Please try again later.";
       }
    }
    $stmt->close();
  }
  $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Washington DC Nationals Guide: Transportation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans|Slabo+27px" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <style>
    #login {
      text-align: center;
      margin: .75em;
      border: .9em ridge #444444;
      padding: .5em;
    }
  </style>
</head>
<body>
  <div class="w3-bar w3-red">
    <h1 id="header">Welcome to the 2020 NLC at Washington D.C. Informatation Page</h1>
    <div class="w3-bar w3-indigo">
      <a href="../index.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="createUser.php" class="w3-bar-item w3-button w3-hover-blue">Create User</a>
    </div>
  </div>
  <div id="login">
    <h2>Please enter your username and password to log in</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label>Username: </label>
      <input type="text" name="username" value="<?php echo $username; ?>"><br>
      <span><?php echo $username_err; ?></span><br>
      <label>Password: </label>
      <input type="text" name="password" value="<?php echo $password; ?>"><br>
      <span><?php echo $password_err; ?></span><br>
      <input type="submit" class="btn btn-primary w3-btn w3-red w3-circle" value="Login">
      <p>Need an account? <a href="createUser.php">Click here</a> to get one.</p>
    </form>
  </div>
</body>
</html>
