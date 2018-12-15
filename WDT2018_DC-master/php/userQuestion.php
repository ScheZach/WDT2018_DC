<?php

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

$sql = "SELECT question.questionId, user.username, question.question, question.submitDate FROM question INNER JOIN user ON question.userId = user.userId WHERE user.userId = ". $_SESSION["id"] .";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     echo "<table align='center'><tr><th><b>Name</b></th><th><b>Question</b></th><th><b>Date of Submition</b></th><th><b>Edit Question</b></th><th><b>Delete Question</b></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["username"]. "</td><td>" . $row["question"] . "</td><td>". $row["submitDate"] ."</td>";
        echo "<td><a href='../php/editQuestion.php?questionId=". $row["questionId"] ."'>Edit</a></td><td><a href='../php/deleteQuestion.php?questionId=" . $row["questionId"] . "'>Delete</a></td></tr>";
    }
     echo "</table>";
     echo "<p id='answerSet'></p>";
} else {
    echo "<h3><i>You don't have any questions</i></h3>";
}

$conn->close();

?>
