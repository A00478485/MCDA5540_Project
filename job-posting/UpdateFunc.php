<?php include '../header.php'; ?>


<?php

if (isset($_GET['job_id'], $_GET['title'], $_GET['job_type'], $_GET['job_description'], $_GET['deadline'], $_GET['posting_date'])) {
    $parameterValue = $conn->real_escape_string($_GET['job_id']);
    $title = $conn->real_escape_string($_GET['title']);
    $jobType = $conn->real_escape_string($_GET['job_type']);
    $jobDescription = $conn->real_escape_string($_GET['job_description']);
    $deadLine = $conn->real_escape_string($_GET['deadline']);
    $postingDate = $conn->real_escape_string($_GET['posting_date']);
    $postedByEmp = $conn->real_escape_string($_GET['posted_by_emp']);

    // Update query using prepared statement
    $sql = "UPDATE job_posting SET title = '$title', job_type = '$jobType', job_description = '$jobDescription', deadline = '$deadLine', posting_date = '$postingDate', posted_by_emp = '$postedByEmp' WHERE job_id = $parameterValue";

    $result = $conn->query($sql);
    
    // Bind parameters
    // $stmt->bind_param("sssssi", , , , , , , );
    // Execute the update
    if ($result == TRUE) {
        echo "Success!!";
    } else {
        echo "Failure!! Error: " . $stmt->error;
    }

}

?>


<?php include '../footer.php'; ?>
