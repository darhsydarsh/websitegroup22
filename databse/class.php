<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $classID = $_POST['classID'];
    $startTime = $_POST['startTime'];
    $endTime = $_POST['endTime'];
    $capacity = $_POST['capacity'];
    $subjectName = $_POST['subjectName'];


    if (empty($classID) || empty($startTime) || empty($endTime) || empty($capacity) || empty($subjectName)) {
        echo "Please fill in all fields.";
    } else {

        echo "Class ID: " . $classID . "<br>";
        echo "Start Time: " . $startTime . "<br>";
        echo "End Time: " . $endTime . "<br>";
        echo "Capacity: " . $capacity . "<br>";
        echo "Subject Name: " . $subjectName . "<br>";
    }
} else {

    header("Location: class.php");
    exit;
}
?>