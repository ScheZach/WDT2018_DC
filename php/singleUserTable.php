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

$sql = "SELECT user.username, question.questionId, question.question, question.submitDate, answer.answer, answer.answerDate FROM ((question INNER JOIN answer ON question.questionId = answer.questionId) INNER JOIN user ON question.userId = user.userId) WHERE user.userId = ". $_SESSION["id"]. ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     echo "<table><tr><th><b>Question Number</b></th><th><b>Name</b></th><th><b>Question</b></th><th><b>Date of Submition</b></th>";
    echo  "<th><b>Answers</b></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><th>". $row["questionId"]. "</th><th>". $row["username"]. "</th><th>" . $row["question"] . "</th><th>". $row["submitDate"] ."</th><th>";
        echo "". $row["answer"] . " | Submited on " . $row["answerDate"];
        echo "</th></tr>";
    }
     echo "</table>";
     echo "<p id='answerSet'></p>";
} else {
    echo "0 results";
}

$conn->close();

?>
