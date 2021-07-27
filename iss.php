<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
a:visited{
	color:black ;
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
  background-image: url("images/school2.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    height: 100%;
    width:100%;


}
/* Add styles to the form container */
.container {
  position: absolute;
  width:32%;
  margin: 450px;
  max-width: 900px;
  padding: 30px;
  background-color: grey;
  margin-top:10px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: Lavender; /* Grey text */
  
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=int],input[type=email]{
  width: 100%;
  padding: 10px;
  margin: 5px 0 7px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=int], input[type=password]:focus,input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color:Coral;
  color: white;
  padding: 16px 20px;
  margin-top:20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: absolute;
  padding: 20px;
  margin-top: 280px;
  margin-left:900px;
  width:30%;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
#p01{
	margin-left:32%;
	margin-top:5px;
}
h4{
	padding:1px;
	margin:7px;
	
}

</style>
</head>
<body>


<div class="bg-img">
  <form action="sign.php" class="container" method="post">
  <h1 id="p01"> Sign up </h1>

      <label for="Username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="Username" required>

	<label for="Email"><b>Email Address</b></label>
    <input type="email" placeholder="Enter Email Address" name="Email" required>

      <label for="StudentID"><b>StudentID</b></label>
      <input type="text" placeholder="Enter Student ID" name="StudentID" required>

      <label for="ClassID"><b>ClassID</b></label>
      <input type="text" placeholder="Enter Class ID" name="ClassID" required>

      <label for="Password">Password</label>
    <input type="password" id="Password" placeholder="Create Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <input type="checkbox" onclick="myFunction()">Show Password

    <button type="submit" class="btn">Sign up</button>
	<h4>Already have an account? <a href="isl.php"> Login</a></h4>
	
  </form>
  <div id="message" class="container">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</div>


				
<script>
var myInput = document.getElementById("Password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
<script src="assets/js/sweetalert.min.js"></script>

<script>
function myFunction() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
