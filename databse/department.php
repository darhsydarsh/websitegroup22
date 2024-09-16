<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $departmentID = $_POST['departmentID'];
    $teacherID = $_POST['teacherID'];

    // Validate form data (you can add more validation as needed)
    if (empty($departmentID) || empty($teacherID)) {
        echo "Please fill in all fields.";
    } else {
        // Process the data (for example, you could insert it into a database)
        // Here, we'll just echo the submitted data
        echo "Department ID: " . $departmentID . "<br>";
        echo "Teacher ID: " . $teacherID . "<br>";
    }
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: department.php");
    exit;
}
?>