<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$SC 			= $_POST["SC"];



 
 $sql="UPDATE subjects SET deleted=0,isAlloted=0,allotedTo='',allotedTo2='',allotedTo3=''  WHERE subject_code='$SC'" ;
	
if(mysqli_query($connect,$sql)){

	echo "success";
	header("Location: delS_prac.php");
}
else{
	
	echo "failure";
	echo "<br/>";
	header("Location: delF_prac.php");
	echo mysqli_error($connect);
}
?>