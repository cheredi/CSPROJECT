<?php
	$studentid = $_GET['student_id'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM user_student WHERE student_id = '$studentid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: admin_book.php");
?>