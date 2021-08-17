<?php
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$name 			= $_POST["name"];
$CN    = $_POST["CN"];



$sql="UPDATE classrooms SET name='$CN' WHERE name='$name'";


if(mysqli_query($connect,$sql)){

    echo "success";
    header("Location: http://localhost/timetable/is/View_Classroom.php");
}
else{

    echo "failure";
    echo "<br/>";
    header("Location: http://localhost/timetable/is/editClassroom.php");
    echo mysqli_error($connect);
}
?>