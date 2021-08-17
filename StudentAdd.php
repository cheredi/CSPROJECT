<?php

session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);



$Email 			= $_POST["Email"];
$StudentId 	= $_POST["StudentId"];
$classId 	= $_POST["classId"];
$Username 	= $_POST["Username"];
$Password 		= $_POST["Password"];
$deleted=0;


$Password = md5($Password);

$insert="INSERT INTO `user_student`(`email`, `studentid`, `class_id`, `username`, `password`,deleted) VALUES 
 ('".$Email."','".$StudentId."','".$classId."','".$Username."','".$Password."','".$deleted."')";

if(mysqli_query($connect,$insert)){

    $_SESSION['status']="Account has been added";
    header("Location: View_Staff.php");
}
else{

    echo "failure";
    echo "<br/>";
    echo mysqli_error($connect);
}

?>