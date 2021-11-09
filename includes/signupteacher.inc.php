
<?php
include_once 'dbh.inc.php';

$name  = $_POST['name'];
$email = $_POST['email'];
$institution = $_POST['institution'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];




$sql = "INSERT INTO signupteacher (name, email, institution, password, passwordConfirm) VALUES('$name', '$email', '$institution', '$password', '$passwordConfirm')"; //please note: always keep this line
    
mysqli_query($conn, $sql); //please note: always keep this line

header("Location: ../teacherSignupSuccess.html");