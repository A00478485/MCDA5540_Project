<?php include '../header.php'; ?>

<!-- <h3>List of all the Job Questions</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="application_id" placeholder='Application-Id'/>
    <input type="text" name="emp_id" placeholder='Emp-Id'/>
    <input type="text" name="schedule_time" placeholder='Schedule-time'/>
    <input type="text" name="technical_eval" placeholder='Technical-eval'/>
    <input type="text" name="behavirol_eval" placeholder='Behavirol-eval'/>
    <input type="text" name="relavance_eval" placeholder='Relavance-eval'/>
    <input type="text" name="skills_eval" placeholder='Skills-eval'/>
    <input type="submit" value="Add">
</form> -->
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
<thead>
<th>Application Id</th>
<th>Emp Id</th>
<th>Schedule Time</th>
<th>Technical Eval</th>
<th>Behavirol Eval</th>
<th>Relavance Eval</th>
<th>Skills Eval</th>
</thead>

<?php


$sql = "SELECT * FROM interview";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["application_id"]."</td>";
        echo "<td>".$row["emp_id"]."</td>";
        echo "<td>".$row["schedule_time"]."</td>";
        echo "<td>".$row["technical_eval"]."</td>";
        echo "<td>".$row["behavirol_eval"]."</td>";
        echo "<td>".$row["relavance_eval"]."</td>";
        echo "<td>".$row["skills_eval"]."</td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

