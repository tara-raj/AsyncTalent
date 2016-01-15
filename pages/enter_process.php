<?php
	session_start();
	$_SESSION['name'] = "none";
?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<head>
		<title> EmployEDU </title>
	</head>
	<body>
 <?php 
 	
  		$link = rtrim($_POST["link"]);
  		$_SESSION['link'] = $link;
  		$keyword = rtrim($_POST["keyword"]);
    	//echo $password . "<br>";
		$success = 0;
?>
<?php
	$dbhost = 'localhost';
	$dbuser = 'Assign2';
	$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}     

$query="SELECT * FROM Interviews";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

while($row = mysqli_fetch_row($result))
{
    //echo "<br>" . $row[2];
    //echo $row[3]. "<br>";
    if($row[1] == $link && $row[3] == $keyword){ //compare row to username
    		$_SESSION['admin'] = "interviewee";
			$success = 15;
			//echo "hit";
    } else {
    	continue;
    }
}

if($success == 15){
	header("Location: questions_int.php");
}
else {
	header("Location: enter.php");
}

?>
</body>
</html>