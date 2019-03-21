<?php
session_start();
include 'DBconnect.php';

$answer = "";
$date = date("Y-m-d");
$id = $_SESSION["id"];
$qanswer_err = $date_err = $id_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(empty(trim($_POST["answer"]))) {
    $answer_err = "Please enter an answer.";
  } else {
    $answer = trim($_POST["answer"]);
  }
  if(empty(trim($_POST["date"]))) {
    $date_err = "Please enter the date (ex: 2018-11-1)";
  } else {
    $date = trim($_POST["date"]);
  }
  if(empty(trim($_POST["id"]))) {
    $id_err = "Please enter your user id.";
  } else {
    $id = trim($_POST["id"]);
  }
  if(empty(trim($_POST["questionid"]))) {
    $question_err = "Please enter your question id.";
  } else {
    $questionId = trim($_POST["questionid"]);
  }

  if(empty($answer_err) && empty($date_err) && empty($id_err)) {
    $sql = "INSERT INTO answer (answer, answerDate, userId, questionId) VALUES (?,?,?,?)";
    if($stmt = $conn->prepare($sql)) {
      $stmt->bind_param("ssii", $param_question, $param_date, $param_id, $param_questionId);
      $param_question = $answer;
      $param_date = $date;
      $param_id = $id;
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
  <link rel="icon" href="../images/togetherwecreatesm.png">
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
  <br>
    <?php
      include 'QuestionTable.php';
    ?>
  <div id="login" class="formColor">
    <h2>Please enter these fields to create your answer.</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <label>Answer: </label>
      <input type="text" name="answer" value="<?php echo $answer; ?>"><br>
      <span><?php echo $answer_err; ?></span><br>
      <label>Date of Submittion: </label>
      <input type="text" name="date" value="<?php echo $date; ?>" readonly><br>
      <span><?php echo $date_err; ?></span><br>
      <label>Your Id: </label>
      <input type="text" name="id" value="<?php echo $id; ?>" readonly><br>
      <span><?php echo $id_err; ?></span><br>
      <label>Question id (look at the table above)</label>
      <input type="text" name="questionid" value="<?php echo $questionId; ?>"><br>
      <span><?php echo $questionId_err; ?></snap><br>
      <input type="submit" class="btn btn-primary w3-btn w3-red w3-circle" value="Add Answer">
      <input type="reset" class="btn btn-default w3-btn w3-red w3-circle" value="Reset">
    </form>
  </div>
</body>
</html>
