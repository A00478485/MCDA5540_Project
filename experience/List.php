<?php include '../header.php'; ?>

<h3>List of all the Experiences</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="designation" placeholder= Designation />
    <input type="text" name="exp_role" placeholder='Exp-role'/>
    <input type="text" name="exp_desc" placeholder='Exp-desc'/>
    <input type="text" name="company" placeholder='Company'/>
    <input type="text" name="start_date" placeholder='Start-date'/>
    <input type="text" name="end_date" placeholder='End-date'/>
    <input type="submit" value="Add">
</form>
<!-- <a href='./Insert.php'> Add Employee </a> -->

<table class="table table-striped">
<thead>
<th>ID</th>
<th>Designation</th>
<th>Exp Role</th>
<th>Exp Desc</th>
<th>Company</th>
<th>Start Date</th>
<th>End Date</th>
</thead>

<?php


$sql = "SELECT * FROM experience";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr scope='row'>";
        echo "<td>".$row["exp_id"]."</td>";
        echo "<td>".$row["designation"]."</td>";
        echo "<td>".$row["exp_role"]."</td>";
        echo "<td>".$row["exp_desc"]."</td>";
        echo "<td>".$row["company"]."</td>";
        echo "<td>".$row["start_date"]."</td>";
        echo "<td>".$row["end_date"]."</td>";
        echo "<td><a href='./Update.php?id=".$row["exp_id"]."'>Edit</a></td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

