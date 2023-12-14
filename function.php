<?php

echo "hello function";
        if (isset($_POST['selectedOption'])) {
            $selectedOption = $_POST['selectedOption'];
            
            // Redirect to the selected PHP file
            header("Location: $selectedOption");
            exit();
        }
?>