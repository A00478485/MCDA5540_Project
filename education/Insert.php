<?php include '../header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the $_POST superglobal
    $instituteName = $_POST['institute_name'];
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];
    $degreeType = $_POST['degree_type'];
    $degreeName = $_POST['degree_name'];
    $grade = $_POST['grade'];


    
    $sql = "INSERT INTO  education (institute_name, start_date, end_date, degree_type, degree_name, grade)VALUES ('$instituteName', '$startDate', '$endDate', '$degreeType', '$degreeName', '$grade')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
    } else {
        echo "UN-Successfully";
    }


}

?>


<?php include '../footer.php'; ?>
