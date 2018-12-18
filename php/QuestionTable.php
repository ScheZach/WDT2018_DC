<?php
$sql = "SELECT question.questionId, userTable.username, question.question, question.submitDate FROM question INNER JOIN userTable ON question.userId = userTable.userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
     echo "<table align='center'><tr><th>Question Id</th><th><b>Name</b></th><th><b>Question</b></th><th><b>Date of Submition</b></th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["questionId"] ."</td><td>". $row["username"]. "</td><td>" . $row["question"] . "</td><td>". $row["submitDate"] ."</td></tr>";
    }
     echo "</table>";
     echo "<p id='answerSet'></p>";
} else {
    echo "0 results";
}
?>
