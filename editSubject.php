<?php
session_start();
?>
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
    <title>Admin - AutoT</title>
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

        input[type=text], input[type=password], input[type=int]{
            width: 100%;
            padding: 10px;
            margin: 5px 0 7px 0;
            border: none;
            background: #f1f1f1;
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
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 30%;
            height: 500px;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 70%;
            border-left: none;
            height: 500px;
        }
        .container {
            position: absolute;
            width:50%;
            margin: 0px;
            max-width: 900px;
            padding: 30px;
            background-color: white;
            margin-top:0px;
            background: rgb(0, 0, 0); /* Fallback color */
            background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
            color: black;
            height:500px;

        }
        #p01{
            margin-left:32%;
            margin-top:5px;
        }
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

    </style>

</head>

<body>
<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <?php


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
                        <li><a href="Admin.php">Subjects</a></li>
                        <li class="active">Edit Subjects details</li>
                        <li><a href="admin_logout.php">Logout </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')"id="defaultOpen" >Change Course Code</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Change Subject Name</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Change Course Type</button>
                <button class="tablinks" onclick="openCity(event, 'Nairobi')">Change Semester</button>
                <button class="tablinks" onclick="openCity(event, 'Mombasa')">Change Department</button>
               
            </div>

            <div id="London" class="tabcontent">
                <form action="sign_subject.php" class="container" method="post">
                    <h1 id="p01">  Course Code </h1>
                    <label for="Previous Code"><b>Previous Course Code</b></label>
                    <input type="text" placeholder=" Please enter Previous Course Code" name="Code" autofocus required>
                    </br>
                    <label for="New Course Code"><b>New Course Code</b></label>
                    <input type="text" placeholder="Please Enter New code" name="CC" required>
                    <button type="submit" onclick="myFunction2()" class="btn">Submit</button>
                </form>
            </div>

            <div id="Paris" class="tabcontent">
                <form action="sign_subject2.php" class="container" method="post">
                    <h1 id="p01">  Subject Name </h1>
                    <label for="Previous Code"><b> Course Code</b></label>
                    <input type="text" placeholder=" Please enter Course Code" name="Code" autofocus required>
                    </br>
                    <label for="New Subject Name"><b>New Subject Name</b></label>
                    <input type="text" placeholder="Please Enter New Subject Name" name="CN" required>
                    <button type="submit" onclick="myFunction2()" class="btn">Submit</button>
                </form>
            </div>

            <div id="Tokyo" class="tabcontent">
                <form action="sign_subject3.php" class="container" method="post">
                    <h1 id="p01">  Course Type </h1>
                    <label for="Previous Code"><b> Course Code</b></label>
                    <input type="text" placeholder=" Please enter Course Code" name="Code" autofocus required>
                    </br>
                    <label for="New Course Type"><b>New Course Type</b></label>
                    <input type="text" placeholder="Please Enter Course Type" name="CT" required>
                    <button type="submit" onclick="myFunction2()" class="btn">Submit</button>
                </form>
            </div>

            <div id="Nairobi" class="tabcontent">
                <form action="sign_subject4.php" class="container" method="post">
                    <h1 id="p01">  Semester </h1>
                    <label for="Previous Code"><b> Course Code</b></label>
                    <input type="text" placeholder=" Please enter Course Code" name="Code" autofocus required>
                    </br>
                    <label for="New Semester"><b>New Semester</b></label>
                    <input type="text" placeholder="Please Enter New Semester" name="CS" required>
                    <button type="submit" onclick="myFunction2()" class="btn">Submit</button>
                </form>
            </div>

            <div id="Mombasa" class="tabcontent">
                <form action="sign_subject5.php" class="container" method="post">
                    <h1 id="p01">  Department </h1>
                    <label for="Previous Code"><b> Course Code</b></label>
                    <input type="text" placeholder=" Please enter Course Code" name="Code" autofocus required>
                    </br>
                    <label for="New Department"><b>New Department</b></label>
                    <input type="text" placeholder="Please Enter New Department" name="CD" required>
                    <button type="submit" onclick="myFunction2()" class="btn">Submit</button>
                </form>
            </div>





            

    

            <!-- Right Panel -->


            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>

            <script>
                function myFunction2() {
                    var txt;
                    if (confirm("Are you sure you want to edit the above Subject?")) {
                        txt = "You pressed OK!";
                    } else {
                        txt = "You pressed Cancel!";
                    }
                    document.getElementById("demo").innerHTML = txt;
                }
            </script>
            <script>
                function myFunction3() {
                    var x = document.getElementById("password");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
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
