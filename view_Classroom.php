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
        table {
            margin-top:50px;
            margin-left:50px;

            width: 80%;
            color: #588c7e;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            font-size: 25px;
            text-align: left;
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #588c7e;
            color: white;
            border: 1px solid #ddd;
            padding: 8px;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
        tr:hover {background-color: #ddd;}
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
                    <h1>View Classroom</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="Admin.php">Dashboard</a></li>
                        <li><a href="Admin.php">Classroom</a></li>
                        <li class="active">View Classroom</li>
                        <li><a href="admin_logout.php">Logout </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <th>Classroom Name</th>




        </tr>

        <div class="content mt-3">
            <div class="animated fadeIn">




                <script src="vendors/jquery/dist/jquery.min.js"></script>
                <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                <script src="assets/js/main.js"></script>
</body>
</html>
<?php
$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);


// sql to view  records
$sql = "SELECT *
		FROM  `classrooms`
        WHERE deleted=0;";

try
{
    $result = mysqli_query($connect,$sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"]. "</td><td>".
                "</td><tr>";
        }
        echo "</table>";
    } else { echo "0 results"; }
}
catch(exception $e)
{
    echo $e->message;
    echo mysqli_error($connect);
}

?>
