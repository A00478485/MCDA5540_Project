<?php
// Your PHP logic for processing the redirect


if (isset($_POST['selectedTuple'])) {
    $selectedOption = $_POST['selectedTuple'];

    header("Location: $selectedTuple");
    exit();
}
?>