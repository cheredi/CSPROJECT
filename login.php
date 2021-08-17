<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="qbooks";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$Password = md5($Password);
 
$sql="SELECT 
		`Username`, `Password` 
		FROM `user` 
		WHERE `Username` = '$Username' AND `Password` = '$Password';";

try
{
	$result = mysqli_query($connect,$sql);
	
	if($result->num_rows > 0)
	{
		echo "Login successful";

	}
	else
	{
		echo "Username or password is incorrect";
	}
}
catch(exception $e)
{
	echo $e->message;
	echo mysqli_error($connect);
}


	
?>