<?php
session_start();

include 'DBconnect.php';


$questionId = $_SESSION['questionId'];

$sql = "DELETE FROM answer WHERE questionId = ?";
if($stmt = $conn->prepare($sql)) {
  $stmt->bind_param("i", $param_ansId);
  $param_ansId = $questionId;
  $stmt->execute();
  $stmt->close();
}
header("Location: ../pages/QandA.php");
$conn->close();
?>
