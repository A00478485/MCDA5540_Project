<?php include '../header.php'; ?>

<h3>List of all the Recruiters</h3>
<table class="table">
<thead>
<th>ID</th>
<th>Title</th>
<th>Job Type</th>
<th>Job Description</th>
<th>Deadline</th>
<th>Posting Date</th>
<th>Posted By</th>
</thead>

<?php 

$parameterValue = $_GET['id'];

$sql = "SELECT * FROM job_posting where job_id=".$parameterValue;
$result = $conn->query($sql);
// echo "hello";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'><form action='UpdateFunc.php' method='get'>";

        echo "<td> <input name='job_id' value='".$row["job_id"]."' readonly='true' /></td>";
        echo "<td> <input name='title' value='".$row["title"]."' /> </td>";
        echo "<td> <input name='job_type' value='".$row["job_type"]."' /> </td>";
        echo "<td> <input name='job_description' value='".$row["job_description"]."' /> </td>";
        echo "<td> <input name='deadline' value='".$row["deadline"]."' /> </td>";
        echo "<td> <input name='posting_date' value='".$row["posting_date"]."' /> </td>";
        echo "<td> <input name='posted_by_emp' value='".$row["posted_by_emp"]."' /> </td>";
        echo "<td><input type='submit' value='Update'></td>";
        echo "<td><a href='./Delete.php?id=".$parameterValue."'>Delete</a></td>";
        echo "</form></tr>";
    }

} else {
    echo "0 results";
}
?>
</table>
<?php include '../footer.php'; ?>
