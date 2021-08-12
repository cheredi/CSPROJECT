<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin -  </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <style>
	#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: absolute;
  padding: 20px;
  margin-top: 40px;
  margin-left:510px;
  width:75%;
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
  
  #p01{
	
	padding:2px;
}
  
}
</style>

</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <?php
session_start();

                if(isset($_SESSION['admin'])){
                    ?>
                    <h3 style="font-size: 100%; color: ghostwhite;margin-top: 10px;">
                        <?php
                        echo $_SESSION['admin'].'<br/>';
                        $user=$_SESSION['admin'];

                        ?>

                    </h3>
                    <?php
                }else{

                    header("Location: http://localhost/timetable/admin.php");
                }
                ?>

            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="http://localhost/timetable/IS/admin.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Student</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Students</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="studentAdd1.php">Add students</a></li>
                            <li><i class="fa fa-table"></i><a href="View_Staff.php">View students</a></li>
                            <li><i class="fa fa-table"></i><a href="edit.php">Edit student details</a></li>
                            <li><i class="fa fa-table"></i><a href="delete.php">Delete student</a></li>
                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->



            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <h3 class="menu-title">Teacher</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Teachers</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="teacherAdd1.php">Add teacher</a></li>
                            <li><i class="fa fa-table"></i><a href="View_Teacher.php">View teachers</a></li>
                            <li><i class="fa fa-table"></i><a href="edit_teacher.php">Edit teacher details</a></li>
                            <li><i class="fa fa-table"></i><a href="delete_teacher1.php">Delete teacher</a></li>
                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <h3 class="menu-title">Subjects</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Subjects</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="subjectAdd1.php">Add subject</a></li>
                            <li><i class="fa fa-table"></i><a href="View_Subjects.php">View subjects</a></li>
                            <li><i class="fa fa-table"></i><a href="editSubject.php">Edit subject details</a></li>
                            <li><i class="fa fa-table"></i><a href="deleteSubject.php">Delete subject</a></li>
                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <h3 class="menu-title">Classrooms</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Classroom</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="classroomAdd1.php">Add Classroom</a></li>
                            <li><i class="fa fa-table"></i><a href="View_Classroom.php">View Classroom</a></li>
                            <li><i class="fa fa-table"></i><a href="editClassroom.php">Edit Classroom details</a></li>
                            <li><i class="fa fa-table"></i><a href="deleteClassroom.php">Delete Classroom</a></li>
                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <h3 class="menu-title">Allotment</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Allotment</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="allotTheory.php">THEORY</a></li>
                            <li><i class="fa fa-table"></i><a href="allotviewTheory.php">View Theory course</a></li>
                            <li><i class="fa fa-table"></i><a href="deleteTheory1.php">Delete Theory course</a></li>
                            <li><i class="fa fa-table"></i><a href="allotPrac.php">PRACTICAL</a></li>
                            <li><i class="fa fa-table"></i><a href="allotviewPrac.php">View Practical course</a></li>
                            <li><i class="fa fa-table"></i><a href="deletePrac1.php">Delete Practical course</a></li>
                            <li><i class="fa fa-table"></i><a href="allotClass.php">CLASSROOM</a></li>
                            <li><i class="fa fa-table"></i><a href="allotviewClass.php">View Assigned classes</a></li>
                            <li><i class="fa fa-table"></i><a href="deleteClass1.php">Delete Assigned  classes</a></li>

                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <h3 class="menu-title">Generate Timetable</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Generate Timetable</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="generatetimetable.php">Timetable</a></li>

                        </ul>

                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->


        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="Admin.php">Dashboard</a></li>
                            <li><a href="Admin.php">Classrooms</a></li>
                            <li class="active">Assign Classroom</li>
                             <li><a href="admin_logout.php">Logout </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <?php
                if (isset($_POST['in_class'])) {

                    $year = $_POST['course'];
                    $class = $_POST['in_class'];
                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                        "UPDATE classrooms SET status = '$year' WHERE name = '$class'");


                }
                ?>
                                            <form action="http://localhost/timetable/is/allotClass.php" method="POST">
                                            <div class="col-lg-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <strong>Assign Classroom </strong>
                                                    </div>
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="form-group">
                                                                <select name="course" class="list-group-item">
                                                                    <option selected disabled>Select Course</option>
                                                                    ';
                                                                    <option value="2">Computer Science 2nd Year Semester III</option>
                                                                    <option value="3">Computer Science 2nd Year Semester V</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="in_class" class="list-group-item">
                                                                    <?php
                                                                    include 'connection.php';
                                                                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                                                        "SELECT * FROM classrooms  WHERE deleted=0 ");
                                                                    $row_count = mysqli_num_rows($q);
                                                                    if ($row_count) {
                                                                        $mystring = '<option selected disabled>Select Classroom</option>';
                                                                        while ($row = mysqli_fetch_assoc($q)) {
                                                                            if ($row['status'] != 0)
                                                                                continue;
                                                                            $mystring .= '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
                                                                        }
                                                                        echo $mystring;
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>



                                                           
                                                            
                                                            
           
                                                          

                                                            
                                                                
                                                                
                                                                
                                                            
                                                    <div class="card-footer">
                                                        <button type="submit"  onclick="myFunction2()" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-ban"></i> Reset
                                                        </button>
                                                    </div>
													
                                                </div>
                                               
                                          </form>   
        <div id="message" class="container">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>                             
                                <!-- Right Panel -->

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

 <script>
                    function myFunction2() {
                        var txt;
                        if (confirm("Are you sure you want to assign the above Classroom?")) {
                            txt = "You pressed OK!";
                        } else {
                            txt = "You pressed Cancel!";
                        }
                        document.getElementById("demo").innerHTML = txt;
                    }
                </script>

                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
							</form>
</body>
</html>
