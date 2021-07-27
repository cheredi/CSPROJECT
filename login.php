
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
		FROM `user_student` 
		WHERE `email` = '$Email' AND `Password` = '$Password';";

try
{
	$result = mysqli_query($connect,$sql);

	if(mysqli_fetch_assoc($result))
	{
		$_SESSION['User']=$_POST["Email"];
		require_once  header("Location: http://localhost/timetable/is/Welcome.php");

	}
	else
	{
		header("Location: iss.php? Invalid=Username or password is incorrect");
	}


}
catch(exception $e)
{
	echo $e->message;
	echo mysqli_error($connect);
}



?>


