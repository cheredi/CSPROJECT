<?php

session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="Quincyombati2019";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);



$Email 			= $_POST["Email"];
$StudentID 	= $_POST["StudentID"];
$ClassID 	= $_POST["ClassID"];
$Username 	= $_POST["Username"];
$Password 		= $_POST["Password"];


$Password = md5($Password);

$insert="INSERT INTO `user_student`(`email`, `studentid`, `class_id`, `username`, `password`) VALUES 
 ('".$Email."','".$StudentID."','".$ClassID."','".$Username."','".$Password."')";

if(mysqli_query($connect,$insert)){

  $_SESSION['status']="Account has been registered. Please login";
    header("Location: isl.php");
}
else{

    echo "failure";
    echo "<br/>";
    echo mysqli_error($connect);
}

?>