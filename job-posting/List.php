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

<h3>List of all the Recruiters</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="title" placeholder='Title'/>
    <input type="text" name="job_type" placeholder='Job-Type'/>
    <input type="text" name="job_description" placeholder='Description'/>
    <input type="text" name="deadline" placeholder='Deadline'/>
    <input type="text" name="posting_date" placeholder='posting Date'/>
    <input type="text" name="posted_by_emp" placeholder="Emp ID" />
    <input type="submit" value="Add">
</form>
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
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


$sql = "SELECT * FROM job_posting";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["job_id"]."</td>";
        echo "<td>".$row["title"]."</td>";
        echo "<td>".$row["job_type"]."</td>";
        echo "<td>".$row["job_description"]."</td>";
        echo "<td>".$row["deadline"]."</td>";
        echo "<td>".$row["posting_date"]."</td>";
        echo "<td>".$row["posted_by_emp"]."</td>";
        echo "<td><a href='./Update.php?id=".$row["job_id"]."'>Edit</a></td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

