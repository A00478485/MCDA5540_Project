<?php include '../header.php'; ?>

<!-- <h3>List of all the Job Questions</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="application_id" placeholder='Application-Id'/>
    <input type="text" name="file_type" placeholder='File-type'/>
    <input type="text" name="file_location" placeholder='File-location'/>\
    <input type="submit" value="Add">
</form> -->
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
<thead>
<th>ID</th>
<th>Application Id</th>
<th>File Type</th>
<th>File Location</th>
</thead>

<?php


$sql = "SELECT * FROM file_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["file_id"]."</td>";
        echo "<td>".$row["application_id"]."</td>";
        echo "<td>".$row["file_type"]."</td>";
        echo "<td>".$row["file_location"]."</td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

