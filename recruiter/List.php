<?php include '../header.php'; ?>

<h3>List of all the Recruiters</h3> 
<form action="Insert.php" method="post">
    <input type="text" name="first_name" placeholder='first_name'/>
    <input type="text" name="last_name" placeholder='last_name'/>
    <input type="text" name="phone_number" placeholder='phone_number'/>
    <input type="text" name="email_id" placeholder='email_id'/>
    <input type="text" name="title" placeholder='title'/>
    <input type="submit" value="Add">
</form>
<!-- <a href='./Insert.php'> Add Employee </a> -->

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

