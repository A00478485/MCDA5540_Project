<?php include '../header.php'; ?>


<?php

if (isset($_GET['emp_id'], $_GET['first_name'], $_GET['last_name'], $_GET['phone_number'], $_GET['email_id'])) {
    $parameterValue = $conn->real_escape_string($_GET['emp_id']);
    $firstName = $conn->real_escape_string($_GET['first_name']);
    $lastName = $conn->real_escape_string($_GET['last_name']);
    $phoneNumber = $conn->real_escape_string($_GET['phone_number']);
    $emailId = $conn->real_escape_string($_GET['email_id']);

    // Update query using prepared statement
    $sql = "UPDATE employee SET first_name = ?, last_name = ?, phone_number = ?, email_id = ? WHERE emp_id = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssi", $firstName, $lastName, $phoneNumber, $emailId, $parameterValue);

    // Execute the update
    if ($stmt->execute()) {
        echo "Success!!";
    } else {
        echo "Failure!! Error: " . $stmt->error;
    }

}

?>

<?php header('Location: ./List.php'); ?>



<?php include '../footer.php'; ?>
