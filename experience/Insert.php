<?php include '../header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the $_POST superglobal
    $designation = $_POST['designation'];
    $expRole = $_POST['exp_role'];
    $expDesc = $_POST['exp_desc'];
    $company = $_POST['company'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];


    
    $sql = "INSERT INTO experience (designation, exp_role, exp_desc, company, start_date, end_date) VALUES ('$designation', '$expRole', '$expDesc', '$company', '$startDate', '$endDate')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
    } else {
        echo "UN-Successfully";
    }


}

?>


<?php include '../footer.php'; ?>
