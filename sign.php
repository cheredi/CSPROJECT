<?php
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email 			= $_POST["Email"];
$email 			= $_POST["email"];
$studentid 		= $_POST["studentid"];
$classID	=$_POST["class_id"];
$username	=$_POST["username"];



$sql="UPDATE user_student SET username='$username' WHERE Email='$Email'";
$sql="UPDATE user_student SET class_id='$classID' WHERE Email='$Email'";
$sql="UPDATE user_student SET studentid='$studentid' WHERE Email='$Email'";
$sql="UPDATE user_student SET email='$email' WHERE Email='$Email'";

if(mysqli_query($connect,$sql)){

    echo "success";
    header("Location: http://localhost/timetable/is/View_Staff.php");
}
else{

    echo "failure";
    echo "<br/>";
    header("Location: http://localhost/timetable/is/edit.php");
    echo mysqli_error($connect);
}
?>