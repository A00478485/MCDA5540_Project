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

    $sql = "select * from employee where emp_id=".$postedByEmp.";";

    $result = $conn->query($sql);

    if ($result->num_rows == 0)
    {
        header('Location: ./List.php?error=1');
    }
    
    $sql = "INSERT INTO job_posting (title, job_type, job_description, deadline, posting_date, posted_by_emp) VALUES ('$title', '$jobType', '$jobDescription', '$deadline','$postingDate','$postedByEmp')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
        header('Location: ./List.php');
    } else {
        echo "UN-Successfully";
        header('Location: ./List.php?error=1');
    }


}

?>


<?php include '../footer.php'; ?>
