<?php

session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);



$classroomName			= $_POST["CN"];
$status=0;
$deleted=0;






$insert="INSERT INTO `classrooms`(`name`, `status`,deleted) VALUES 
 ('".$classroomName."','".$status."','".$deleted."')";

if(mysqli_query($connect,$insert)){

    $_SESSION['status']="Classroom has been added";
    header("Location: View_Classroom.php");
}
else{

    echo "failure";
    echo "<br/>";
    echo mysqli_error($connect);
}

?>