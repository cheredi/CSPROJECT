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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="Admin.html"><img src="images/admin.jpg" alt="Logo"></a>
            <a class="navbar-brand hidden" href="Admin.html"><img src="images/icons8_treatment_96_A0_Rectangle_17_pattern.png" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="Admin.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Students</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="images/icons8-health-graph-50.png" alt="Logo"></i>Student</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="studentAdd.html">Add Student</a></li>
                        <li><i class="fa fa-table"></i><a href="view_Staff.php">View Students</a></li>
                        <li><i class="fa fa-table"></i><a href="edit.php">Edit Student details</a></li>
                        <li><i class="fa fa-table"></i><a href="delete.php">Delete Student</a></li>
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
                            <li><i class="fa fa-table"></i><a href="teacherAdd.html">Add teacher</a></li>
                            <li><i class="fa fa-table"></i><a href="view_Teacher.php">View teachers</a></li>
                            <li><i class="fa fa-table"></i><a href="edit_teacher.php">Edit teacher details</a></li>
                            <li><i class="fa fa-table"></i><a href="delete_teacher.html">Delete teacher</a></li>
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
                    <h1>View Teacher</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="Admin.html">Dashboard</a></li>
                        <li><a href="Admin.html">Teacher</a></li>
                        <li class="active">View Teacher</li>
                        <li><a href="logout.php?logout">Logout </a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <table>
        <tr>
            <th>Teacher Name</th>
            <th>Email</th>
            <th>Teacher ID</th>
           

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
$password="Quincyombati2019";
$dbname="timetable";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);


// sql to view  records
$sql = "SELECT `email`, `teacherid`, `username`
		FROM  `user_teacher` 
        WHERE deleted=0;";

try
{
    $result = mysqli_query($connect,$sql);

    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["username"]. "</td><td>" . $row["email"] . "</td><td>". $row["teacherid"]. "</td><td>"
                . $row["class_id"]. "</td><tr>";
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
