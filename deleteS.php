<?php
 $dbserver = "localhost";
 $dbusername = "root";
 $password="";
 $dbname="timetable";
 
 $connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
$CC 			= $_POST["CC"];
$SN	=$_POST["SN"];



 $sql="UPDATE subjects SET deleted=1 WHERE subject_code='$CC' AND subject_name='$SN'";

         if(mysqli_query($connect,$sql)){

             echo "success";
             header("Location: delSubject.php");
         }
     else{

             echo "failure";
             echo "<br/>";
             header("Location: delFSubject.php");
             echo mysqli_error($connect);


 }

?>