<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$name 			= $_POST["name"];




 $sql="UPDATE classrooms SET deleted=1 WHERE name='$name'";

         if(mysqli_query($connect,$sql)){

             echo "success";
             header("Location: delSClassroom.php");
         }
     else{

             echo "failure";
             echo "<br/>";
             header("Location: delFClassroom.php");
             echo mysqli_error($connect);


 }

?>