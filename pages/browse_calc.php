<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/star-rating.js" type="text/javascript"></script>

    <title>EmployED - Find Companies</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<body>
<?php

//CULTURE CALCULATION
$sort = $_POST["sortSelect"];
//echo $sort;

//UPDATE USER PROFILE WITH CORRECT NUMBERS
$servername = "localhost";
$username = "Assign2";
$password = "password";
$dbname = "Assign2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if($sort == "Alphabetical (A-Z)"){
	$_SESSION["order"] = "Name";
} else if($sort == "Overall Rating"){
	$_SESSION["order"] = "Overall DESC";
} else if($sort == "Compensation"){
	$_SESSION["order"] = "Compensation DESC";
} else if($sort == "Culture"){
	$_SESSION["order"] = "Culture DESC";
} else if($sort == "Work/Life Balance"){
	$_SESSION["order"] = "WorkLife DESC";
} else if($sort == "Job Role"){
	$_SESSION["order"] = "Role DESC";
} else if($sort == "Growth Opportunities"){
	$_SESSION["order"] = "Growth DESC";
}


header("Location: browse.php");
?>
</body>
</html>