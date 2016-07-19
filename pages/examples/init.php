<!DOCTYPE html>
<html>
	<head>
		<title> EmployEDU - Initialize </title>
	</head>
	<body>
<?php
	$dbhost = 'localhost';
	$dbuser = 'Assign2';
	$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if($conn){
	echo "Connected";
}
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//User Profiles Table
$query = "DROP table MyUsers";
$conn->query($query) or die (); 

$query = "CREATE TABLE MyUsers (User_id int primary key not null AUTO_INCREMENT, Username char(25) not null, Password char(255) not null);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "<br> MyUsers table initialized";

$query = "DROP table DailyLogs";
$conn->query($query) or die ();

$query = "CREATE TABLE DailyLogs (Log_id int primary key not null AUTO_INCREMENT, User_id int not null, Mood char(50), Hunger char(50), Weight char(20), Date char(50), Time char(50));";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "<br> DailyLogs table initialized";

//ADD USERS 
$p = 'password';
$password = hash('sha256', $p);
$name1 = "shanti@peeloff.com";
$name2 = "traj908@gmail.com";

$query = "INSERT INTO MyUsers (Username, Password)
                       VALUES
                       ('$name1', '$password')";
$conn->query($query) or die ("invalid user insert" . $conn->error);

$query = "INSERT INTO MyUsers (Username, Password)
                       VALUES
                       ('$name2', '$password')";
$conn->query($query) or die ("invalid user insert" . $conn->error); 

echo "<br> All users and tables initialized";
?>
</body>
</html>