
<?php
session_start();
// destroys current session
if(isset($_COOKIE[session_name("User")])){
    setcookie(session_name("User"), '', time() - 42000, '/');
}
if(isset($_COOKIE[session_name("User") . '_rememberMe'])){
    setcookie(session_name("User") . '_rememberMe', '', time() - 42000);
}
session_destroy();
$_SESSION = array();
header("Location: http://localhost/timetable/teacher.php");

?>
