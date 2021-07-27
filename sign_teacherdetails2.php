<?php
$dbserver = "localhost";
$dbusername = "root";
$password="Quincyombati2019";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email 			= $_POST["Email"];
$password    = $_POST["password"];

$password = md5($password);

$sql="UPDATE user_teacher SET password='$password' WHERE Email='$Email'";


if(mysqli_query($connect,$sql)){

    echo "success";
    header("Location: http://localhost/timetable/is/View_teacherdetails.php");
}
else{

    echo "failure";
    echo "<br/>";
    header("Location: http://localhost/timetable/is/edit_teacherdetails.php");
    echo mysqli_error($connect);
}
?>