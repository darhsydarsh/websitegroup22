<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subjectID = $_POST['subjectID'];
    $subjectName = $_POST['subjectName'];
    $departmentID = $_POST['departmentID'];

    if (empty($subjectID) || empty($subjectName) || empty($teacherID) || empty($departmentID)) {
        echo "Please fill in all fields.";
    } else {

        echo "<h2>Submitted Data:</h2>";
        echo "Subject ID: " . $subjectID . "<br>";
        echo "Subject Name: " . $subjectName . "<br>";
        echo "Department ID: " . $departmentID . "<br>";
    }
} else {

    header("Location: subject.php");
    exit;
}