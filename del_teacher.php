<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$Email 			= $_POST["Email"];
$facultyNumber	=$_POST["facultyNumber"];


 
 $sql="UPDATE user_teacher SET deleted=1 WHERE Email='$Email' AND faculty_number='$facultyNumber'";
	
if(mysqli_query($connect,$sql)){

	echo "success";
	header("Location: delS_teacher.php");
}
else{
	
	echo "failure";
	echo "<br/>";
	header("Location: delF_teacher.php");
	echo mysqli_error($connect);
}
?>