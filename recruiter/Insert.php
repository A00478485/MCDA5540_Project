<?php include '../header.php'; ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the $_POST superglobal
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $phoneNumber = $_POST['phone_number'];
    $emailId = $_POST['email_id'];
    $title = $_POST['title'];


    
    $sql = "INSERT INTO employee (first_name, last_name, phone_number, email_id, position_name) VALUES ('$firstName', '$lastName', '$phoneNumber', '$emailId','$title')";
    $result = $conn->query($sql);

    if($result == TRUE){
        echo "Successfully";
    } else {
        echo "UN-Successfully";
    }


}

?>

<?php header('Location: ./List.php'); ?>


<?php include '../footer.php'; ?>
