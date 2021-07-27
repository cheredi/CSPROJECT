
<?php
session_start();
$dbserver = "localhost";
$dbusername = "root";
$password="Quincyombati2019";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$Password = md5($Password);

$sql="SELECT 
		*
		FROM `user_teacher` 
		WHERE `email` = '$Email' AND `Password` = '$Password';";

try
{
	$result = mysqli_query($connect,$sql);

	if(mysqli_fetch_assoc($result))
	{
		$_SESSION['User']=$_POST["Email"];
		header("Location: http://localhost/timetable/is/Welcome_teacher.php");

	}
	else
	{
		header("Location: teacher.php? Invalid=Username or password is incorrect");

	}


}
catch(exception $e)
{
	echo $e->message;
	echo mysqli_error($connect);
}



?>


