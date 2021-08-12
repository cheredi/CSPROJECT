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
                        <li><a href="Admin.php">Theory</a></li>
                        <li class="active">Delete Alloted Theory</li>
                         <li><a href="admin_logout.php">Logout </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <form action="deleteTheory.php" method="POST" onsubmit="alert('Thanks for Subscribing');>
                                            <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong>Delete Allotment </strong>
                </div>
                <div class="card-body card-block">
                    <div action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="SC-input" class=" form-control-label">Subject Code</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="SC" name="SC" placeholder="Enter Subject Code" class="form-control" required="true"><small class="help-block form-text"></small></div>
                        </div>

                        










                        <div class="card-footer">
                            <button type="submit" onclick="myFunction()" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            </form>

            <!-- Right Panel -->


            <script>
                function myFunction() {
                    var txt;
                    if (confirm("Are you sure you want to delete the above Allotment?")) {
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
