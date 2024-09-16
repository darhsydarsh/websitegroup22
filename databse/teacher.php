<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $teacherID = $_POST['teacherID'];
    if ($title == "Mr" || $title == "Ms" || $title == "Mrs") {
        echo "Title: " . $title . "<br>";
    } else {
        echo "Please enter a valid title.";
    }
    $departmentID = $_POST['departmentID'];
    $teacherName = $_POST['teacherName'];
    if ($headOf == "true" || $headOf == "false") {
        echo "headOf: " . $headOf . "<br>";
    } else {
        echo "Please enter a valid head of.";
    }
    $teacherPhone = $_POST['teacherPhone'];

    if (empty($teacherID) || empty($departmentID) || empty($teacherName) || empty($teacherEmail) || empty($teacherPhone)) {
        echo "Please fill in all fields.";
    } else {

        echo "<h2>Submitted Data:</h2>";
        echo "Teacher ID: " . $teacherID . "<br>";
        echo "Department ID: " . $departmentID . "<br>";
        echo "Teacher Name: " . $teacherName . "<br>";
        echo "Teacher Email: " . $teacherEmail . "<br>";
        echo "Teacher Phone: " . $teacherPhone . "<br>";
    }
} else {

    header("Location: teacher.php");
    exit;
}
