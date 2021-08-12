<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$Email 			= $_POST["Email"];
$Username	=$_POST["Username"];



 $sql="UPDATE user_student SET deleted=1 WHERE Email='$Email' AND Username='$Username'";
	
if(mysqli_query($connect,$sql)){

	echo "success";
	header("Location: delS.php");
}
else{
	
	echo "failure";
	echo "<br/>";
	header("Location: delF.php");
	echo mysqli_error($connect);
}
?>