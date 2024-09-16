<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $societyID = $_POST['societyID'];
    $societyName = $_POST['societyName'];
    $category = $_POST['category'];
    $studentID = $_POST['studentID'];

    // Validate form data (you can add more validation as needed)
    if (empty($societyID) || empty($societyName) || empty($category) || empty($studentID)) {
        echo "Please fill in all fields.";
    } else {
        // Process the data (for example, you could insert it into a database)
        // Here, we'll just echo the submitted data
        echo "<h2>Submitted Data:</h2>";
        echo "Society ID: " . $societyID . "<br>";
        echo "Society Name: " . $societyName . "<br>";
        echo "Category: " . $category . "<br>";
        echo "Student ID: " . $studentID . "<br>";
    }
} else {
    // If the form is not submitted, redirect back to the form page
    header("Location: society.php");
    exit;
}
?>