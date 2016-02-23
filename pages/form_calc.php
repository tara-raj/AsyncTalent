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
$Q1 = $_POST["Q1"];
$Q2 = $_POST["Q2"];

$culture = ($Q1 + $Q2)/2;
$culture_print = number_format($culture, 2, '.', '');

echo "culture: ";
echo $culture_print;

//WORK/LIFE BALANCE CALCULATION
$Q3 = $_POST["Q3"];
$Q4 = $_POST["Q4"];

$workLife = ($Q3 + $Q4)/2;
$workLife_print = number_format($workLife, 2, '.', '');

echo "<br> work/life balance: ";
echo $workLife_print;

//COMPENSATION CALCULATION
$Q5 = $_POST["Q5"];
$Q6 = $_POST["Q6"];

$comp = ($Q5 + $Q6)/2;
$comp_print = number_format($comp, 2, '.', '');

echo "<br> compensation: ";
echo $comp_print;

//GROWTH OPPORTUNITIES CALCULATION
$Q7 = $_POST["Q7"];
$Q8 = $_POST["Q8"];

$growth = ($Q7 + $Q8)/2;
$growth_print = number_format($growth, 2, '.', '');

echo "<br> growth opportunities: ";
echo $growth_print;

//JOB ROLE CALCULATION
$Q9 = $_POST["Q9"];
$Q10 = $_POST["Q10"];

$role = ($Q9 + $Q10)/2;
$role_print = number_format($role, 2, '.', '');

echo "<br> role: ";
echo $role_print;

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

$sql = "UPDATE Users SET Culture=$culture_print WHERE username='traj'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE Users SET WorkLIfe=$workLife_print WHERE username='traj'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE Users SET Compensation=$comp_print WHERE username='traj'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE Users SET Growth=$growth_print WHERE username='traj'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE Users SET Role=$role_print WHERE username='traj'";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error updating record: " . $conn->error;
}

//DISTANCE CALCULATION - FIND ONE MAX
//Initialize a minimum distance and company match
$min_dist = 90;
$min_comp = "No suitable matches";

$query="SELECT * FROM Companies";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

while($row = mysqli_fetch_row($result))
{
    $comp_dist = abs($comp_print - $row[5]);
    $culture_dist = abs($culture_print - $row[6]);
    $workLife_dist = abs($workLife_print - $row[7]);
    $role_dist = abs($role_print - $row[8]);
    $growth_dist = abs($growth_print - $row[9]);
    
    $total_dist = $comp_dist + $culture_dist + $workLife_dist + $role_dist + $growth_dist;
    //echo "<br> total dist: ";
    //echo $total_dist;
    
    $name = $row[0];
    $sql = "UPDATE Companies SET distance=$total_dist WHERE Company_id=$name";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

   if($total_dist < $min_dist){
   		$min_dist = $total_dist;
   		$min_comp = $row[1];
   	}
}

echo "<br> Best match: ";
echo $min_comp;
$_SESSION['company'] = $min_comp;
//echo $_POST["Q30"];

$query="SELECT * FROM Companies ORDER BY distance";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

while($row = mysqli_fetch_row($result))
{
	echo "<br> $row[1]";
}

header("Location: results.php");
?>
</body>
</html>