<?php include '../header.php'; ?>

<h3>List of all the Relations between Experience and Applicant</h3> 

<table class="table table-striped">
<thead>
<th>ID</th>
<th>Experience Id</th>
</thead>

<?php


$sql = "SELECT * FROM ExperienceToApplication";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["application_id"]."</td>";
        echo "<td>".$row["experience_id"]."</td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

