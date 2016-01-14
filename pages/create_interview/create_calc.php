<?php
session_start();
?>
<!DOCTYPE html>
<html>
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
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body id="bod">
<script>
</script>
                                    	<?php
/*$str_json = file_get_contents('php://input'); //($_POST doesn't work here)
$response = json_decode($str_json, true); // decoding received JSON to array

echo $response;*/
$resp = $_POST["stuffT"];
$questions = explode(",", $resp);
$qarray = array();
//echo $resp;

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

			$query="SELECT * FROM Questions";
			$conn->query($query) or die ("couldn't connect " . $conn->error);
			$result = $conn->query($query);

			$array = array();
	
			while($row = mysqli_fetch_row($result))
			{
				if(in_array($row[0], $questions)){
					//echo $row[1] . "<br>";
					array_push($qarray, $row[1]);
				}
			}

	//print_r($qarray);
	
	for($i = 0; $i < sizeof($qarray); $i++){
		echo $qarray[$i] . "<br>";
	}
	
	$_SESSION['qarray'] = $qarray;
	$_SESSION['qnum'] = 0;
	
	//echo $_SESSION['qarray'][$_SESSION['qnum']] . "<br>";
	
	//$_SESSION['qnum'] += 1;
	
	//echo $_SESSION['qarray'][$_SESSION['qnum']];
	//$id = base_convert(microtime(false), 10, 36);

	header('Location: questions.php');
?>
    </body>

</html>