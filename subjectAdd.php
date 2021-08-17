<?php

session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);



$subjectName			= $_POST["SN"];
$subjectCode 	= $_POST["SC"];
$courseType	= $_POST["ST"];
$semester 	= $_POST["SS"];
$department		= $_POST["SD"];
$deleted=0;
$isAlloted=0;
$allotedTo='';
$allotedTo2='';
$allotedTo3='';




$insert="INSERT INTO `subjects`(`subject_code`, `subject_name`, `course_type`, `semester`, `department`,isAlloted,allotedTo,allotedTo2,allotedto3,deleted) VALUES 
 ('".$subjectCode."','".$subjectName."','".$courseType."','".$semester."','".$department."','".$isAlloted."','".$allotedTo."','".$allotedTo2."','".$allotedTo3."','".$deleted."')";

if(mysqli_query($connect,$insert)){

    $_SESSION['status']="Subject has been added";
    header("Location: View_Subjects.php");
}
else{

    echo "failure";
    echo "<br/>";
    echo mysqli_error($connect);
}

?>