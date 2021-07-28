<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Add new Student";
	require "./template/header.php";
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$username = trim($_POST['username']);
        $username = mysqli_real_escape_string($conn, $username);

		$studentid = trim($_POST['studentid']);
        $studentid = mysqli_real_escape_string($conn, $studentid);

		$email = trim($_POST['email']);
        $email = mysqli_real_escape_string($conn, $email);
		
		$class_id = trim($_POST['class_id']);
        $class_id = mysqli_real_escape_string($conn, $class_id);
		



		// find Student and return studentid
		// if student is not in db, create new
		$findStudent = "SELECT * FROM user_student WHERE username = '$username'";
		$findResult = mysqli_query($conn, $findStudent);
		if(!$findResult){
			// insert into Student table and return id
			$insertStudent = "INSERT INTO user_student(username) VALUES ('$username')";
			$insertResult = mysqli_query($conn, $insertStudent);
			if(!$insertResult){
				echo "Can't add new student " . mysqli_error($conn);
				exit;
			}
			$studentid = mysql_insert_id($conn);
		} else {
			$row = mysqli_fetch_assoc($findResult);
			$studentid = $row['studentid'];
		}


		$query = "INSERT INTO user_student VALUES ('" . $username . "', '" . $studentid . "', '" . $email . "', '" . $class_id . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: admin_book.php");
		}
	}
?>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Username</th>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<th>StudentID</th>
				<td><input type="text" name="studentid" required></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="text" name="email" required></td>
			</tr>
			<tr>
				<th>ClassID</th>
				<td><input type="file" name="class_id"></td>
			</tr>

		</table>
		<input type="submit" name="add" value="Add new student" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>