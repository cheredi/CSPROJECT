<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$CN 			= $_POST["CN"];


$sql="UPDATE `classrooms` SET `status` = '0' WHERE `classrooms`.`name` = '$CN'";
	
if(mysqli_query($connect,$sql)){

	echo "success";
	header("Location: delS_class.php");
}
else{
	
	echo "failure";
	echo "<br/>";
	header("Location: delF_class.php");
	echo mysqli_error($connect);
}
?>