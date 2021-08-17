<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="smart_health";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
 
$FirstName 		= $_POST["FirstName"];
$LastName 		= $_POST["LastName"];
$Email 			= $_POST["Email"];
$PhoneNumber 	= $_POST["PhoneNumber"];
$DateOfBirth 	= $_POST["DOB"];
$Gender 		= $_POST["Gender"];
$Username 		= $_POST["Username"];
$Password 		= $_POST["password"];


$Password = sha1($Password);
 
 $insert="INSERT INTO `user`(`First Name`, `Last Name`, `Phone Number`, `Gender`, `Email`, `Date of Birth`, `Username`, `Password`,`user_type`, `department`) VALUES 
 ('".$FirstName."','".$LastName."','".$PhoneNumber."','".$Gender."','".$Email."','".$DateOfBirth."','".$Username."','".$Password."',3,5)";
	
if(mysqli_query($connect,$insert)){

	echo "success";
	header("Location: HOME.html");
}
else{
	
	echo "failure";
	echo "<br/>";
	echo mysqli_error($connect);
}
	
?>