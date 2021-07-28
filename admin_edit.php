<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Edit Student";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['student_id'])){
        $studentid = $_GET['student_id'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($studentid)){
		echo "Empty ID! check again!";
		exit;
	}

	// get Student data
	$query = "SELECT * FROM user_student WHERE student_id = '$studentid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="edit_book.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Username</th>
				<td><input type="text" name="username" value="<?php echo $row['username'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Student ID</th>
				<td><input type="text" name="studentid" value="<?php echo $row['studentid'];?>" required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email" value="<?php echo $row['email'];?>" required></td>
			</tr>

			<tr>
				<th>Class ID</th>
				<td><input type="text" name="classid" value="<?php echo $row['class_Id'];?>" required></td>
			</tr>

		</table>
		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
	<a href="admin_book.php" class="btn btn-success">Confirm</a>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require "./template/footer.php"
?>