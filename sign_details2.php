<?php
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email 			= $_POST["Email"];
$classID    =$_POST["class_id"];



$sql="UPDATE user_student SET class_id='$classID' WHERE Email='$Email'";


if(mysqli_query($connect,$sql)){

    echo "success";
    header("Location: http://localhost/timetable/is/View_details.php");
}
else{

    echo "failure";
    echo "<br/>";
    header("Location: http://localhost/timetable/is/edit_details.php");
    echo mysqli_error($connect);
}
?>