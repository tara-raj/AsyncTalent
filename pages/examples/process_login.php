<?php
	session_start();
	$_SESSION['user'] = "none";
	$_SESSION['user_id'] = "none";
?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<head>
		<title> EmployEDU </title>
	</head>
	<body>
 <?php 
 	
  		$username = rtrim($_POST["username"]);
  		$_SESSION['name'] = $username;
  		$p = rtrim($_POST["password"]);
    	$password = hash('sha256', $p);
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

$query="SELECT * FROM MyUsers";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

while($row = mysqli_fetch_row($result))
{
    //echo "<br>" . $row[2];
    //echo $row[3]. "<br>";
    if($row[1] == $username && $row[2] == $password){ //compare row to username
    		$_SESSION['user'] = $username;
    		$_SESSION['user_id'] = $row[0];
			$success = 5;
			//echo "hit";
    } else {
    	continue;
    }
}

if($success == 5){
	header("Location: log.php");
}
else {
	header("Location: login.html");
}

?>
</body>
</html>