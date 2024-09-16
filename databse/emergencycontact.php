<?php
    // Process form data when form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $studentID = $_POST['studentID'];
        if ($title == "Mr" || $title == "Ms" || $title == "Mrs") {
            echo "Title: " . $title . "<br>";
        } else {
            echo "Please enter a valid title.";
        }
        $firstName = $_POST['firstName'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $emergencyContactNumber = $_POST['emergencyContactNumber'];
    
        // Validate form data (you can add more validation as needed)
        if (empty($studentID) || empty($emergencyContactName) || empty($emergencyContactNumber) || empty($relationship)) {
            echo "Please fill in all fields.";
        } else {
            // Process the data (for example, you could insert it into a database)
            // Here, we'll just echo the submitted data
            echo "<h2>Submitted Data:</h2>";
            echo "Student ID: " . $studentID . "<br>";
            echo "title" . $title . "<br>";
            echo "First Name: " . $firstName . "<br>";
            echo "Surname: " . $surname . "<br>";
            echo "Address: " . $address . "<br>";
            echo "Emergency Contact Number: " . $emergencyContactNumber . "<br>";
    
        }
    } else {
        // If the form is not submitted, redirect back to the form page
        header("Location: emergencycontact.php");
        exit;
    }
    ?>  