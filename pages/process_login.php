<?php
	session_start();
	$_SESSION['name'] = "none";
?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<head>
		<title> Landing </title>
	</head>
	<body>
 <?php 
 	
  		$username = rtrim($_POST["username"]);
  		$_SESSION['name'] = $username;
    	$password = hash('sha256', rtrim($_POST["password"]));
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
    if($row[1] == $username){ //compare row to username
    	if($row[2] = $password){ //compare hashed passwords
    		$_SESSION['admin'] = $username;
			$success = 5;
			echo "hit";
    	}
    } else {
    	continue;
    }
}

if($success == 5){
		header("Location: forms.php");
}
else {
	header("Location: Login.php");
}

?>
</body>
</html>