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
$text = strtolower($_POST["response"]);

//echo $text;
$q = $_SESSION["selected_question"];
//echo $q;

$dbhost = 'localhost';
$dbuser = 'Assign2';
$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if($conn )
{
  //echo "Connected";
}
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$q += 1;
$query="SELECT * FROM Questions WHERE Q_id = $q";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

$row = mysqli_fetch_row($result);
$t = $row[1];

echo $t;
//echo $row[6];
$p = strtolower($row[6]);
//echo $p;
$keywords = explode(";", $p);
//print_r($keywords);

$counter = 0.0;
for($i = 0; $i < sizeof($keywords); $i++){
if(sizeof($keywords) > 0 && strlen($text) > 0){
	$th = strpos($text, $keywords[$i]);
	//echo "<br>" . $keywords[$i];
	if (FALSE !== $th){
    	$counter++;
    }
}
}

//echo $counter;
$percent = ($counter/sizeof($keywords)) * 100;
if(sizeof($keywords) == 0){
	$percent = 100;
}
$percent = number_format($percent, 2, '.', '');
echo "<br>" . $percent . "%";
?>
</body>
</html>