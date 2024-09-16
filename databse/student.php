<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentID = $_POST['studentID'];
    $firstName = $_POST['firstName'];
    $surname = $_POST['surname'];
    $dateOfBirth = $_POST['dateOfBirth'];
    if ($gender == "male" || $title == "female" || $title == "neutral") {
        echo "Title: " . $title . "<br>";
    } else {
        echo "Please enter a valid title.";
    }
    $contactNo = $_POST['contactNo'];
    if ($goesToSociety == "true" || $goesToSociety == "false") {
        echo "goesToSociety: " . $goesToSociety . "<br>";
    } else {
        echo "Please enter a valid goesToSociety.";
    } 

    if (empty($studentID) || empty($emergencyContactName) || empty($emergencyContactNumber) || empty($relationship)) {
        echo "Please fill in all fields.";
    } else {

        echo "<h2>Submitted Data:</h2>";
        echo "Student ID: " . $studentID . "<br>";
        echo "Emergency Contact Name: " . $emergencyContactName . "<br>";
        echo "Emergency Contact Number: " . $emergencyContactNumber . "<br>";
        echo "gender: " . $gender . "<br>";
    }
} else {

    header("Location: student.php");
    exit;
}