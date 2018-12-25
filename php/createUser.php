<?php
session_start();
include 'DBconnect.php';

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } else {
    $sql = "SELECT userId FROM userTable WHERE username = ?";
    if($stmt = $conn->prepare($sql)) {
      $stmt->bind_param("s", $param_username);
      $param_username = trim($_POST["username"]);
      if($stmt->execute()) {
        $stmt->store_result();
        if($stmt->num_rows == 1) {
          $username_err = "This username is already taken.";
        } else {
          $username = trim($_POST["username"]);
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    }
    $stmt->close();
  }
  if(empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } elseif(strlen(trim($_POST["password"])) < 6) {
    $password_err = "Password must have atleast 6 characters.";
  } else {
    $password = trim($_POST["password"]);
  }
  if(empty(trim($_POST["confirm_password"]))) {
    $confirm_password_err = "Please confirm password.";
  } else {
    $confirm_password = trim($_POST["confirm_password"]);
    if(empty($password_err) && ($password != $confirm_password)) {
      $confirm_password_err = "Password did not match.";
    }
  }
   if(empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
     $sql = "INSERT INTO userTable (username, password) VALUES (?, ?)";
     if($stmt = $conn->prepare($sql)) {
       $stmt->bind_param("ss", $param_username, $param_password);
       $param_username = $username;
       $param_password = $password;
       if($stmt->execute()) {
         $_SESSION["loggedin"] = true;
         $_SESSION["username"] = $username;
         $sql2 = "SELECT userId, username, password FROM userTable WHERE username = ?";
         if($stmt2 = $conn->prepare($sql2)) {
           $stmt2->bind_param("s", $param_username);
           $param_username = $username;
           if($stmt2->execute()) {
             $stmt2->store_result();
             if($stmt2->num_rows == 1) {
               $stmt2->bind_result($userId, $username, $hashed_password);
               if($stmt2->fetch()) {
                 $_SESSION["id"] = $userId;
                 header("location: ../home.php");
               }
             }
           }
         }
         $stmt2->close();
       } else {
         echo "Something went wrong. Please try again later.";

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
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
    <div class="w3-bar">
      <a href="../home.php" class="w3-bar-item w3-button w3-hover-blue">Home</a>
      <a href="login.php" class="w3-bar-item w3-button w3-hover-blue">Log In</a>
    </div>
  </div>
  <div id="login">
    <h2>Please enter these fields to create your account?</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label>Username: </label>
      <input type="text" name="username" value="<?php echo $username; ?>"><br>
      <span><?php echo $username_err; ?></span><br>
      <label>Password: </label>
      <input type="text" name="password" value="<?php echo $password; ?>"><br>
      <span><?php echo $password_err; ?></span><br>
      <label>Confirm Password: </label>
      <input type="text" name="confirm_password" value="<?php echo $confirm_password; ?>"><br>
      <span><?php echo $confirm_password_err; ?></span><br>
      <input type="submit" class="btn btn-primary w3-btn w3-red w3-circle" value="Create Account">
      <input type="reset" class="btn btn-default w3-btn w3-red w3-circle" value="Reset">
      <p>Have an account? <a href="login.php">Click here</a> to log in.</p>
    </form>
  </div>
</body>
</html>
