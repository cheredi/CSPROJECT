<?php

session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);



$Email 			= $_POST["Email"];
$Alias 			= $_POST["alias"];
$facultyNumber 	= $_POST["facultyNumber"];
$Username 	= $_POST["Username"];
$Password 		= $_POST["Password"];
$deleted=0;


$Password = md5($Password);

$insert="INSERT INTO `user_teacher`(`email`,alias, `faculty_number`, `username`, `password`,deleted) VALUES 
 ('".$Email."','".$Alias."','".$facultyNumber."','".$Username."','".$Password."','".$deleted."')";

if(mysqli_query($connect,$insert)){

    $_SESSION['status']="Account has been added";
    header("Location: view_Teacher.php");
}
else{

    echo "failure";
    echo "<br/>";
    echo mysqli_error($connect);
}

?>