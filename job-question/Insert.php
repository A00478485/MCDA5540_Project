<?php include '../header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the $_POST superglobal
    $jobId = $_POST['job_id'];
    $question = $_POST['question'];
    $questionType = $_POST['question_type'];
    $answerType = $_POST['answer_type'];
    $postedByEmp = $_POST['posted_by_emp'];


    
    $sql = "INSERT INTO job_questions (job_id, question, question_type, answer_type, posted_by_emp) VALUES ('$jobId', '$question', '$questionType', '$answerType', '$postedByEmp')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
    } else {
        echo "UN-Successfully";
    }


}

?>


<?php include '../footer.php'; ?>
