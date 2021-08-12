
<?php
session_start();
// destroys current session
if(isset($_COOKIE[session_name("Admin")])){
setcookie(session_name("Admin"), '', time() - 42000, '/');
}
if(isset($_COOKIE[session_name("Admin") . '_rememberMe'])){
setcookie(session_name("Admin") . '_rememberMe', '', time() - 42000);
}
session_destroy();
$_SESSION = array();
header("Location: http://localhost/timetable/admin.php");

?>
