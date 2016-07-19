<?php
	session_start();
	$_SESSION['user'] = "none";
?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<head>
		<title> EmployEDU </title>
	</head>
	<body>
 <?php 
 	
  		$username = rtrim($_POST["email"]);
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

$userexist = 0;
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
    if($row[1] == $username){ //compare row to username
    		echo "User already registered. Please go to regular login.";
    		$userexist = 5;
    } else {
    	continue;
    }
}

if (isset($_POST['terms'])) {
if($userexist == 0){
	$query = "INSERT INTO MyUsers (Username, Password)
                       VALUES
                       ('$username', '$password')";
	$conn->query($query) or die ("invalid user insert" . $conn->error);
	echo "Added";
	$_SESSION['user'] = $username;
	$success = 5;
}
} else {
   $success = 0;
}


if($success == 5){
	header("Location: ../../index.php");
}
else {
	header("Location: register.html");
}

?>
</body>
</html>