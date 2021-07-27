
<?php
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: http://localhost/timetable/isl.php");
}
?>