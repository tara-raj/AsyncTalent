<?php
	session_start();
	$_SESSION['admin'] = "none";
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

$query="SELECT * FROM Profiles";
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
    		$_SESSION['admin'] = $username;
			if($row[3] == 'user'){
				$success = 5;
			}
			if($row[3] == 'recruiter'){
				$success = 10;
			}
			//echo "hit";
    } else {
    	continue;
    }
}

if($success == 5){
	header("Location: find.php");
}
else if($success == 10){
	header("Location: create.php");
}
else {
	header("Location: Login.php");
}

?>
</body>
</html>