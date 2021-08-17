<!DOCTYPE html>
<?php
 $dbserver = "localhost";
 $dbusername = "root";
 
 $sql = "SELECT * FROM `user` WHERE userid = insert user id for doctor user";
 
 $result = mysqli_query($sql);
 
 $resultArr = mysqli_fetch_array($result);
 
 $FirstName = $resultArr["First Name"];
 $LastName = $resultArr["Last Name"];
 $Email = $resultArr["Email"];
 $PhoneNumber = $resultArr["Phone Number"];
 $DOB = $resultArr["Date Of Birth"];
 $Gender = $resultArr["Gender"];
 $Username = $resultArr["Username"];
 $password = $resultArr["Password"];
?>

<html>
<head>
	<title>SMART HEALTH - Sign Up</title>
</head>
<body>
<form action="insert.php"method="POST">
	<div class="container">
		<div class="signup-box">
			<div class="title">
				Create Account
			</div>
				<input type="FirstName" 	id="FirstName"		required value="<?php echo $FirstName?>">	
				<input type="LastName" 		id="LastName" 		required value="<?php echo $LastName?>">	
				<input type="Email" 		id="Email" 			required value="<?php echo $Email?>" >
				<input type="PhoneNumber" 	id="PhoneNumber" 	required value="<?php echo $PhoneNumber?>" >
				<input type="DOB" 			id="DOB" 			required value="<?php echo $DOB?>" >
				<input type="Gender" 		id="Gender" 		required value="<?php echo $Gender?>" >
				<input type="Username" 		id="Username" 		required value="<?php echo $Username?>" >
				<input type="password" 		id="password" 		required value="<?php echo $Password?>" >
				<input type="submit" value="Sign Up">				
		
		</div>
		<button onlick="updateDoc">
		update
		</button>
		<button onlick="deleteDoc">
		delete
		</button>
		<button onlick="?">
		</button>
	</div>
	</form>
	<script>
		function updateDoc()
		{
			var FirstName = document.getElementById("FirstName").value;
			var LastName = document.getElementById("LastName").value;
			var Email = document.getElementById("Email").value;
			var PhoneNumber = document.getElementById("PhoneNumber").value;
			var DOB = document.getElementById("DOB").value;
			var Gender = document.getElementById("Gender").value;
			var Username = document.getElementById("Username").value;
			var password = document.getElementById("Password").value;
 
			var xhttp = new XMLHttpRequest();
			xhttp.onnreadystatechange = function()
			{
				console.log("success");
			}
			
			xhttp.open("GET", `update.php?FirstName=${FirstName}&LastName=${LastName}&Email=${Email}&PhoneNumber=${PhoneNumber}&DOB=${DOB}&Gender=${Gender}&Username=${Username}&password=${password}`);
			xhttp.send();
		}
		
		function deleteDoc()
		{
			var xhttp = new XMLHttpRequest();
			xhttp.onnreadystatechange = function()
			{
				console.log("success");
			}
			
			xhttp.open("GET", "Delete.php?FirstName=`);
			xhttp.send();
		}
	</script>
</body>
</html>