<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a:visited{
	color:blue;
}
a:link{
	color:black;
}
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("wp2036953-books-wallpapers.jpg");


  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; 
  position: relative;

  /* Full height */
  height: 100%;
  width:100%;
}

/* Add styles to the form container */
.container {
  position: absolute;
  width:29%;
  margin: 450px;
  max-width: 900px;
  padding: 30px;
  background-color: grey;
  margin-top:75px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: Lavender; /* Grey text */
  
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: LightCoral;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
#p01{
	margin-left:32%;
}
h4{
	padding:1px;
	margin:7px;
	
}
</style>
</head>
<body>


<div class="bg-img">
  <form action="login.php" class="container" method="post">
     <h1 id="p01"> Login</h1>

    <label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required>

    <label for="Password"><b>Password</b></label>
    <input type="Password" placeholder="Enter Password" name="Password" required>
    <button type="submit" class="btn">Login</button>
	
	<h4>Don't have an account?<a href="iss.php">Sign Up</a></h4>
	</pre>
  </form>
</div>
</body>
</html>
