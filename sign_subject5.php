<?php
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Code          = $_POST["Code"];
$CD    = $_POST["CD"];



$sql="UPDATE subjects SET department='$CD' WHERE subject_code='$Code'";


if(mysqli_query($connect,$sql)){

    echo "success";
    header("Location: http://localhost/timetable/is/view_subjects.php");
}
else{

    echo "failure";
    echo "<br/>";
    header("Location: http://localhost/timetable/is/editSubject.php");
    echo mysqli_error($connect);
}
?>