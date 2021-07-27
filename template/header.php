<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">AutoT</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- link to student login_list.php -->
                <li><a href="isl.php"><span class="glyphicon glyphicon-education"></span>&nbsp; Student</a></li>
                <!-- link to teacher login.php -->
                <li><a href="teacher.php"><span class="glyphicon glyphicon-briefcase"></span>&nbsp; Teacher</a></li>
                <!-- link to admin.php -->
                <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span>&nbsp; Admin</a></li>


            </ul>
        </div>
    </div>
</nav>
<?php
if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Welcome to AutoT </h1>

        </div>
    </div>
<?php } ?>

<div class="container" id="main">