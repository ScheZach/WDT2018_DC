<?php
session_start();

include 'DBconnect.php';

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
