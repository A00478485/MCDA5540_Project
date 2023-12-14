<?php include '../header.php'; ?>

<h3>List of all the Recruiters</h3> <a href='./Insert.php'>
<table>
<thead>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone No</th>
<th>Email</th>
<th>Title</th>
<th>Edit</th>
</thead>

<?php


$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["emp_id"]."</td>";
        echo "<td>".$row["first_name"]."</td>";
        echo "<td>".$row["last_name"]."</td>";
        echo "<td>".$row["phone_number"]."</td>";
        echo "<td>".$row["email_id"]."</td>";
        echo "<td>".$row["position_name"]."</td>";
        echo "<td><a href='./Update.php?id=".$row["emp_id"]."'>Edit</a></td>";
        echo "</tr>";
    }

} else {
    echo "0 results";
}
?>
</table>

<?php include '../footer.php'; ?>

