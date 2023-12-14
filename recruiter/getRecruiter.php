<?php
// Include your database connection file
$servername = "dbcourse.cs.smu.ca";
$username = "u20";
$password = "costWOMANuntil10";
$database = "u20";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search term from the AJAX request
$searchTerm = $_POST['searchTerm'];

// Perform the database query
$query = "SELECT * FROM employee WHERE first_name LIKE '%$searchTerm%' or last_name LIKE '%$searchTerm%' or email_id LIKE '%$searchTerm%'";
$result = mysqli_query($conn, $query);

// Fetch and return the results as JSON
$rows = array();
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
echo json_encode($rows);

// Close the database connection
mysqli_close($conn);
?>