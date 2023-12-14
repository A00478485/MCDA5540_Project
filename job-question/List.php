<?php include '../header.php'; ?>

<h3>List of all the Job Questions</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="job_id" placeholder='Job Id'/>
    <input type="text" name="question" placeholder='Question'/>
    <input type="text" name="question_type" placeholder='Question-type'/>
    <input type="text" name="answer_type" placeholder='Answer-type'/>
    <input type="text" name="posted_by_emp" placeholder="Emp Id" />
    <input type="submit" value="Add">
</form>
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
<thead>
<th>ID</th>
<th>Job ID</th>
<th>Question</th>
<th>Question Type</th>
<th>Answer Type</th>
<th>Posted By</th>
</thead>

<?php


$sql = "SELECT * FROM job_questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["question_id"]."</td>";
        echo "<td>".$row["job_id"]."</td>";
        echo "<td>".$row["question"]."</td>";
        echo "<td>".$row["question_type"]."</td>";
        echo "<td>".$row["answer_type"]."</td>";
        echo "<td>".$row["posted_by_emp"]."</td>";
        // echo "<td><a href='./Update.php?id=".$row["question_id"]."'>Edit</a></td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

