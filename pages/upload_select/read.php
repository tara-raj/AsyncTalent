<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/star-rating.js" type="text/javascript"></script>

    <title>EmployEDU - Find</title>

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

$query = "DROP table Questions";
$conn->query($query) or die (); 
//echo "Dropped";

$query = "CREATE TABLE Questions (Q_id int primary key not null AUTO_INCREMENT, Question text not null, Category text not null, Sub text, Role text, Company text, Keywords text, Time float, Type text, Tips text);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
//echo "Company table initialized";

$handle = fopen("QuestionBank.csv", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $ls = explode(",", $line);
        if($ls[0] != 'Question'){
        $query = "INSERT INTO Questions (Question, Category, Sub, Role, Company, Keywords, Time, Type, Tips)
                       VALUES
                       ('$ls[0]', '$ls[1]', '$ls[2]', '$ls[3]', '$ls[4]', '$ls[5]', '$ls[6]', '$ls[7]', '$ls[8]')";
        //echo $ls[0] . " " . $ls[1] . "<br>";
		$conn->query($query) or die ("invalid user insert" . $conn->error);
		}
        /*for($i = 0; $i < sizeof($ls); $i++){
        	echo $line_separated[$i] . "<br>";
        }*/
    }

    fclose($handle);
    
} else {
    // error opening the file.
} 

	$query="SELECT * FROM Questions";
	$conn->query($query) or die ("couldn't connect " . $conn->error);
	$result = $conn->query($query);

	$array = array();
	
	while($row = mysqli_fetch_row($result))
	{
		//echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . " " . $row[5] . " " . $row[6] . " " . $row[7] . $row[8] . $row[9]. "<br>";
		array_push($array, $row);
	}
	
	pickRandom(sizeof($array)-1, $array);
	
	function pickRandom($var, $arr){
		$select = rand(0, $var);

		echo $arr[$select][1];
	}
	
	//print_r($array);
	/*for($i = 0; $i < sizeof($array); $i++){
		echo $array[$i];
	}*/
?>

</body>

</html>