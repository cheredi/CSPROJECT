<?php
// Start the session
session_start();
if (isset($_GET['success'])) {
    echo "<script type='text/javascript'>alert('Time Table Generated');</script>";
}
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
    <title>Admin - Teacher signUp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
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
                            <li><a href="Admin.php">Timetable</a></li>
                            <li class="active">Generate Timetable</li>
                             <li><a href="admin_logout.php">Logout </a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="close">&times</span>
                            <h2 id="popupHead">Assign Substitute</h2>
                        </div>
                        <div class="modal-body" id="AssignSubstitute">
                            <!--Admin Login Form-->

                            <div style="display:block" id="assignSubstituteForm">
                                <form method="post" action="assignSubstituteFormValidation.php">
                                    <div class="form-group">
                                        <label for="substitute">Substitute</label>
                                        <select class="form-control" id="substitute" name="SB">

                                        </select>
                                        <input type="hidden" id="cell_number" class="btn btn-default" name="CN">

                                    </div>
                                    <div align="right" class="form-group">

                                        <input type="submit" id="submit" class="btn btn-default" name="ADD" value="CHECK">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    var assignsubstitueForm = document.getElementById("assignSubstitueForm");
                    // Get the <span> element that closes the modal
                    var modal = document.getElementById('myModal');
                    var span = document.getElementsByClassName("close")[0];
                    span.onclick = function () {
                        modal.style.display = "none";
                        assignsubstitueForm.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function (event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                            assignsubstitueForm.style.display = "none";
                        }
                    }
                </script>
                <form action="algo.php" method="post">
                    <div align="center" style="margin-top: 50px">
                        <button type="submit"
                                id="generatebutton" class="btn btn-success btn-lg">GENERATE
                        </button>
                    </div>
                </form>

                <form action="generatetimetable.php" method="post">
                    <div align="center" style="margin-top: 30px">
                        <select name="select_teacher" class="list-group-item">
                            <option selected disabled>Select Teacher</option>
                            <?php
                            $q = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                "SELECT * FROM user_teacher WHERE deleted=0 ");
                            while ($row = mysqli_fetch_assoc($q)) {
                                echo " \"<option value=\"{$row['faculty_number']}\">{$row['username']}</option>\"";
                            }
                            ?>

                        </select>
                        <button type="submit" id="viewteacher" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
                        </button>
                    </div>
                </form>
                <form action="generatetimetable.php" method="post">
                    <div align="center" style="margin-top: 20px">
                        <select name="select_semester" class="list-group-item">
                            <option selected disabled>Select Semester</option>
                            <option value="3">3</option>
                            <option value="5">5</option>

                        </select>
                        <button type="submit" id="viewsemester" class="btn btn-success btn-lg" style="margin-top: 5px">VIEW TIMETABLE
                        </button>
                    </div>
                </form>
                <script>
                    var index = -1;
                    function Substitute() {
                        var table = document.getElementById("timetable");
                        var cells = table.getElementsByTagName("td");
                        // window.alert(cells[3].innerHTML.toString());
                        for (i = 0; i < cells.length; i++) {
                            if (i % 8 == 6 || i % 8 == 7 || parseInt(i / 8) == 0 || i % 8 == 0) {
                                continue;
                            }
                            var currentCell = cells[i];
                            //var b = currentRow.getElementsByTagName("td")[0];
                            var createSubstituteHandler =
                                function (cell, i) {
                                    return function () {

                                        document.getElementById('cell_number').value = i;
                                        index = i;
                                        var xmlhttp = new XMLHttpRequest();
                                        xmlhttp.onreadystatechange = function () {
                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                var modal = document.getElementById('myModal');
                                                modal.style.display = "block";
                                                document.getElementById("substitute").innerHTML = this.responseText;

                                            }
                                        };
                                        xmlhttp.open("GET", "getcellindex.php?i=" + i, false);
                                        xmlhttp.send();
                                    };
                                };
                            currentCell.onclick = createSubstituteHandler(currentCell, i);
                        }
                    }
                </script>

                <div>
                    <br>
                    <style>
                        table {
                            margin-top: 20px;
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }

                        td, th {
                            border: 2px solid #dddddd;
                            text-align: left;
                            padding: 8px;
                        }

                        tr:nth-child(even) {
                            background-color: #ffffff;
                        }

                        tr:nth-child(odd) {
                            background-color: #ffffff;
                        }
                    </style>
                    <div id="TT" style="background-color: #FFFFFF">
                        <table border="2" cellspacing="3" align="center" id="timetable">
                            <caption><strong><br><br>
                                    <?php
                                    if (isset($_POST['select_semester'])) {
                                        echo "COMPUTER ENGINEERING DEPARTMENT SEMESTER " . $_POST['select_semester'] . " ";
                                        $year = (int)($_POST['select_semester'] / 2) + $_POST['select_semester'] % 2;
                                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "timetable"), "SELECT * from classrooms
                        WHERE status = '$year'"));
                                        echo " ( " . $r['name'], " ) ";
                                    } else if (isset($_POST['select_teacher'])) {
                                        $id = $_POST['select_teacher'];
                                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "timetable"), "SELECT * from user_teacher 
                        WHERE faculty_number = '$id'AND deleted=0"));
                                        echo $r['username'];
                                    } else if (isset($_GET['display'])) {
                                        $id = $_GET['display'];
                                        $r = mysqli_fetch_assoc(mysqli_query(mysqli_connect("localhost", "root", "", "timetable"), "SELECT * from user_teacher 
                        WHERE faculty_number = '$id' AND deleted=0"));
                                        echo $r['username'];

                                    }
                                    ?>
                                </strong></caption>
                            <tr>
                                <td style="text-align:center">WEEKDAYS</td>
                                <td style="text-align:center">8:15-9:15</td>
                                <td style="text-align:center">10:15-11:15</td>
                                <td style="text-align:center">11:15-12:15</td>
                                <td style="text-align:center">12:15-1:15</td>
                                <td style="text-align:center">1:15-2:00</td>
                                <td style="text-align:center">2:00-5:00</td>
                            </tr>
                            <tr>
                                <?php
                                $table = null;
                                if (isset($_POST['select_semester'])) {
                                    $table = " semester" . $_POST['select_semester'] . " ";
                                } else if (isset($_POST['select_teacher'])) {
                                    $table = " " . $_POST['select_teacher'] . " ";
                                } else if (isset($_GET['display'])) {
                                    $table = " " . $_GET['display'] . " ";
                                } else
                                    echo '</table>';
                                if (isset($_POST['select_semester']) || isset($_POST['select_teacher']) || isset($_GET['display'])) {
                                    $q = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                        "SELECT * FROM" . $table);
                                    $qq = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                        "SELECT * FROM subjects");
                                    $days = array('MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY');
                                    $i = -1;
                                    $str = "<br>";
                                    $tid = "";
                                    if (isset($_POST['select_semester'])) {
                                        while ($r = mysqli_fetch_assoc($qq)) {
                                            if ($r['isAlloted'] == 1 && $r['semester'] == $_POST['select_semester']) {
                                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . ", ";
                                                if (isset($r['allotedTo'])) {
                                                    $id = $r['allotedTo'];
                                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                                        "SELECT * FROM user_teacher WHERE faculty_number = '$id' AND deleted=0");
                                                    $rr = mysqli_fetch_assoc($qqq);
                                                    $str .= " " . $rr['alias'] . ": " . $rr['username'] . " ";
                                                }
                                                if ($r['course_type'] !== "LAB") {
                                                    $str .= "<br>";
                                                    continue;
                                                } else {
                                                    $str .= ", ";
                                                }
                                                if (isset($r['allotedTo2'])) {
                                                    $id = $r['allotedTo2'];
                                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                                        "SELECT * FROM user_teacher WHERE faculty_number = '$id' AND deleted=0");
                                                    $rr = mysqli_fetch_assoc($qqq);
                                                    $str .= " " . $rr['alias'] . ": " . $rr['username'] . ", ";
                                                }
                                                if (isset($r['allotedTo3'])) {
                                                    $id = $r['allotedTo3'];
                                                    $qqq = mysqli_query(mysqli_connect("localhost", "root", "", "timetable"),
                                                        "SELECT * FROM user_teacher WHERE faculty_number = '$id'AND deleted=0");
                                                    $rr = mysqli_fetch_assoc($qqq);
                                                    $str .= " " . $rr['alias'] . ": " . $rr['username'] . "<br>";
                                                }
                                            }
                                        }
                                    } else if (isset($_POST['select_teacher']) || isset($_GET['display'])) {
                                        if (isset($_POST['select_teacher'])) {
                                            $tid = $_POST['select_teacher'];
                                        } else if (isset($_GET['display'])) {
                                            $tid = $_GET['display'];
                                            $tid = strtoupper($tid);
                                        }
                                        while ($r = mysqli_fetch_assoc($qq)) {
                                            if ($r['isAlloted'] == 1 && $r['allotedTo'] == $tid) {
                                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                                            } else if ($r['isAlloted'] == 1 && isset($r['allotedTo2']) && $r['allotedTo2'] == $tid) {
                                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                                            } else if ($r['isAlloted'] == 1 && isset($r['allotedTo3']) && $r['allotedTo3'] == $tid) {
                                                $str .= $r['subject_code'] . ": " . $r['subject_name'] . " <br>";
                                            }
                                        }
                                    }
                                    while ($row = mysqli_fetch_assoc($q)) {
                                        $i++;

                                        echo "
                 <tr><td style=\"text-align:center\">$days[$i]</td>
                 <td style=\"text-align:center\">{$row['period1']}</td>
                <td style=\"text-align:center\">{$row['period2']}</td>
                <td style=\"text-align:center\">{$row['period3']}</td>
                 <td style=\"text-align:center\">{$row['period4']}</td>
                  <td style=\"text-align:center\">{$row['period5']}</td>
         
                  <td style=\"text-align:center\">{$row['period6']}</td>
                </tr>\n";
                                    }

                                    echo '</table>';
                                    $sign = "GENERATED VIA AutoT TIMETABLE MANAGEMENT SYSTEM";
                                    echo "<div style='margin-left: 10px' align='center'>" . "<br>" . $str . "<br></div>" .
                                        "<div style='margin-left: 10px' align='center'>" . "<strong>" . $sign . "<br></strong></div>";
                                }
                                if (isset($_POST['select_teacher'])) {
                                    echo "<script>Substitute();</script>";
                                    $_SESSION['shown_id'] = $_POST['select_teacher'];
                                }
                                if (isset($_GET['display'])) {
                                    echo "<script>Substitute();</script>";
                                    $_SESSION['shown_id'] = $_GET['display'];
                                }
                                ?>


                    </div>
                </div>

                <script type="text/javascript">
                    function gendf() {
                        var doc = new jsPDF();

                        doc.addHTML(document.getElementById('TT'), function () {
                            doc.save('<?php
                                if (isset($_POST["select_semester"])) {
                                    echo "timetable semester " . $_POST["select_semester"];
                                } else if (isset($_POST["select_teacher"])) {
                                    echo "timetable " . $_POST["select_teacher"];
                                } else if (isset($_GET["display"])) {
                                    echo "timetable " . $_GET["display"];
                                }
                                ?>' + '.pdf');
                            alert("Downloaded!");

                        });
                    }

                </script>
                <div align="center" style="margin-top: 10px">
                    <button id="saveaspdf" class="btn btn-info btn-lg" onclick="gendf()" name="button">SAVE AS PDF</button>
                </div>











            </div>
                                               
                                          </form>   

                                <!-- Right Panel -->


							</form>
</body>
</html>
