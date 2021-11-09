
<?php
include_once 'dbh.inc.php';

$instruction  = $_POST['instruction'];
$courseName = $_POST['courseName'];
$courseCode = $_POST['courseCode'];
$startDate = $_POST['startDate'];
$startTime = $_POST['startTime'];
$endDate = $_POST['endDate'];
$endTime = $_POST['endTime'];
$attendanceFile =$_POST['attendanceFile'];
$rubricFile = $_POST['rubricFile'];



$sql = "INSERT INTO instructoractivity (instruction, courseName, courseCode, startDate, startTime, endDate, endTime, attendanceFile, rubricFile) VALUES('$instruction', '$courseName', '$courseCode', '$startDate', '$startTime', '$endDate', '$endTime', '$attendanceFile', '$rubricFile')"; //please note: always keep this line
    
mysqli_query($conn, $sql); //please note: always keep this line

header("Location: ../teacherdashboard.php?ActivityCreation=success");