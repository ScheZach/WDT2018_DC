<?php
session_start();

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

$questionId = $_GET['questionId'];
$_SESSION['questionId'] = $questionId;

$sql = "DELETE FROM question WHERE questionId = ?";
if($stmt = $conn->prepare($sql)) {
  $stmt->bind_param("i", $param_questionId);
  $param_questionId = $questionId;
  $stmt->execute();
  header("Location: deleteAnswer.php");
  $stmt->close();
}
$conn->close();

?>
