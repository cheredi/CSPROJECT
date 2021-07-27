<?php

session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="Quincyombati2019";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);



$Email 			= $_POST["Email"];
$TeacherId 	= $_POST["teacherId"];
$Username 	= $_POST["Username"];
$Password 		= $_POST["Password"];
$deleted=0;


$Password = md5($Password);

$insert="INSERT INTO `user_teacher`(`email`, `teacherid`, `username`, `password`,deleted) VALUES 
 ('".$Email."','".$TeacherId."','".$Username."','".$Password."','".$deleted."')";

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