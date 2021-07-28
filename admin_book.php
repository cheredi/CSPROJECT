<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Admin";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
<html>
<body>
<p>WELCOME</p>
</body>
</html>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>