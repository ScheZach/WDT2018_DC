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
