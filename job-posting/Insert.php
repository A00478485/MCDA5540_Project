<?php include '../header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the $_POST superglobal
    $title = $_POST['title'];
    $jobType = $_POST['job_type'];
    $jobDescription = $_POST['job_description'];
    $deadline = $_POST['deadline'];
    $postingDate = $_POST['posting_date'];
    $postedByEmp = $_POST['posted_by_emp'];


    
    $sql = "INSERT INTO job_posting (title, job_type, job_description, deadline, posting_date, posted_by_emp) VALUES ('$title', '$jobType', '$jobDescription', '$deadline','$postingDate','$postedByEmp')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
    } else {
        echo "UN-Successfully";
    }


}

?>


<?php include '../footer.php'; ?>
