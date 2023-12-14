<?php include '../header.php'; ?>

<h3>List of all the Job Questions</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="institute_name" placeholder='Institute-name'/>
    <input type="text" name="start_date" placeholder='Start-date'/>
    <input type="text" name="end_date" placeholder='End-date'/>
    <input type="text" name="degree_type" placeholder='Degree-type'/>
    <input type="text" name="degree_name" placeholder="Degree-name" />
    <input type="text" name="grade" placeholder='grade'/>
    <input type="submit" value="Add">
</form>
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
<thead>
<th>ID</th>
<th>Institute Name</th>
<th>Start Date</th>
<th>End Date</th>
<th>Degree Type</th>
<th>Degree Name</th>
<th>Grade</th>
</thead>

<?php


$sql = "SELECT * FROM education";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["edu_id"]."</td>";
        echo "<td>".$row["institute_name"]."</td>";
        echo "<td>".$row["start_date"]."</td>";
        echo "<td>".$row["end_date"]."</td>";
        echo "<td>".$row["degree_type"]."</td>";
        echo "<td>".$row["degree_name"]."</td>";
        echo "<td>".$row["grade"]."</td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

