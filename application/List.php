<?php include '../header.php'; ?>

<?php 

if (isset($_GET["error"]))
{
    echo "<div class='alert alert-danger' role='alert'>";
    if ($_GET["error"] ==1)
    {
        echo "Update or Insert failed due to invalid recruiter ID !!";
    }
    else
    {
        echo "Update or Insert failed due to invalid details !!";
    }
    echo "</div>";
}

?>

<h3>List of all the Applications</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="application_date" placeholder=Application-date />
    <input type="text" name="candidate_id" placeholder='Candidate Id'/>
    <input type="text" name="job_id" placeholder='Job Id'/>
    <input type="text" name="stage" placeholder='Stage'/>
    <input type="submit" value="Add">
</form>
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
<thead>
<th>ID</th>
<th>Application Date</th>
<th>Candidate ID</th>
<th>Job ID</th>
<th>Stage</th>
</thead>

<?php


$sql = "SELECT * FROM application";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["application_id"]."</td>";
        echo "<td>".$row["application_date"]."</td>";
        echo "<td>".$row["candidate_id"]."</td>";
        echo "<td>".$row["job_id"]."</td>";
        echo "<td>".$row["stage"]."</td>";
        echo "<td><a href='./Update.php?id=".$row["application_id"]."'>Edit</a></td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

