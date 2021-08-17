<?php
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Code          = $_POST["Code"];
$CN   =$_POST["CN"];



$sql="UPDATE subjects SET subject_name='$CN' WHERE subject_code='$Code'";


if(mysqli_query($connect,$sql)){

    echo "success";
    header("Location: http://localhost/timetable/is/view_Subjects.php");
}
else{

    echo "failure";
    echo "<br/>";
    header("Location: http://localhost/timetable/is/editSubject.php");
    echo mysqli_error($connect);
}
?>