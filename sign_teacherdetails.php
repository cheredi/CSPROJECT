<?php
$dbserver = "localhost";
$dbusername = "root";
$password="Quincyombati2019";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email 			= $_POST["Email"];
$email 			= $_POST["email"];







$sql="UPDATE user_teacher SET email='$email' WHERE Email='$Email'";

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