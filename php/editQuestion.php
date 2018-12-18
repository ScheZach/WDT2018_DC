<?php
session_start();
include 'DBconnect.php';

$question = "";
$date = date("Y-m-d");
$id = $_SESSION["id"];
$questionId = $_GET['questionId'];
$question_err = $date_err = $id_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $questionId = $_POST['questionId'];

  if(empty(trim($_POST["question"]))) {
    $question_err = "Please enter a username.";
  } else {
    $question = trim($_POST["question"]);
    echo $question;
    echo $questionId;
  }
  if(empty($question_err)) {
    $sql = "UPDATE question SET question=?, submitDate=? WHERE  questionId = ?";
    if($stmt = $conn->prepare($sql)) {
      $stmt->bind_param("ssi", $param_question, $param_date, $param_questionId);
      $param_question = $question;
      $param_date = $date;
      $param_questionId = $questionId;
      if($stmt->execute()) {
        header("location: ../pages/QandA.php");
      } else {
        echo "Something went wrong";
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
      <a href="../pages/QandA.php" class="w3-bar-item w3-button w3-hover-blue">Q&A</a>
    </div>
  </div>
  <div id="login">
    <h2>Please enter these fields to create your question.</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label>Question Id: </label>
      <input type="text" name="questionId" value="<?php echo $questionId; ?>"
      <label>Question: </label>
      <input type="text" name="question" value="<?php echo $question; ?>"><br>
      <span><?php echo $question_err; ?></span><br>
      <input type="submit" class="btn btn-primary w3-btn w3-red w3-circle" value="Add Question">
      <input type="reset" class="btn btn-default w3-btn w3-red w3-circle" value="Reset">
    </form>
  </div>
</body>
</html>
