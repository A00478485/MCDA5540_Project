<?php include '../header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the $_POST superglobal
    $applicationDate = $_POST['application_date'];
    $candidateId = $_POST['candidate_id'];
    $jobId = $_POST['job_id'];
    $stage = $_POST['stage'];


    
    $sql = "INSERT INTO application (application_date, candidate_id, job_id, stage) VALUES ('$applicationDate', '$candidateId', '$jobId', '$stage')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
    } else {
        echo "UN-Successfully";
    }


}

?>


<?php include '../footer.php'; ?>
