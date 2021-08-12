<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$SC 			= $_POST["SC"];



 
 $sql="UPDATE subjects SET deleted=1 WHERE subject_code='$SC'" ;
	
if(mysqli_query($connect,$sql)){

	echo "success";
	header("Location: delS_allotment.php");
}
else{
	
	echo "failure";
	echo "<br/>";
	header("Location: delF_allotment.php");
	echo mysqli_error($connect);
}
?>