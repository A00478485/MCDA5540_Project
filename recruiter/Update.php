<?php include '../header.php'; ?>

<div class="content">
<h3>List of all the Recruiters</h3>
<table border="1px solid black">
<thead>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone No</th>
<th>Email</th>
<th>Title</th>
<th>Update</th>
<th>Delete</th>
</thead>

<?php 

$parameterValue = $_GET['id'];

$sql = "SELECT * FROM employee where emp_id=".$parameterValue;
$result = $conn->query($sql);
// echo "hello";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr><form action='UpdateFunc.php' method='get'>";

        echo "<td> <input name='emp_id' value='".$row["emp_id"]."' readonly='true' /></td>";
        echo "<td> <input name='first_name' value='".$row["first_name"]."' /> </td>";
        echo "<td> <input name='last_name' value='".$row["last_name"]."' /> </td>";
        echo "<td> <input name='phone_number' value='".$row["phone_number"]."' /> </td>";
        echo "<td> <input name='email_id' value='".$row["email_id"]."' /> </td>";
        echo "<td>".$row["position_name"]." </td>";
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
</div>
