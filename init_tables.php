<!DOCTYPE html>
<html>
	<head>
		<title> AsyncTalent - Initialize Tables</title>
	</head>
	<body>
<?php
	$dbhost = 'localhost';
	$dbuser = 'Assign2';
	$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if($conn){
	echo "Connected";
	echo "<br>";
}
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

//User Profiles Table
$query = "DROP table AsyncUsers;";
$conn->query($query) or die (); 

$query = "CREATE TABLE AsyncUsers (User_id int primary key not null AUTO_INCREMENT, Username char(25) not null, Password char(255) not null, Type char(25) not null);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "User table initialized";
echo "<br>";

//ADD AsyncUsers 
$p = 'password';
$password = hash('sha256', $p);
$name1 = "user";
$name2 = "recruiter";

$query = "INSERT INTO AsyncUsers (Username, Password, Type)
                       VALUES
                       ('$name1', '$password', 'user')";
$conn->query($query) or die ("invalid user insert" . $conn->error);

$query = "INSERT INTO AsyncUsers (Username, Password, Type)
                       VALUES
                       ('$name2', '$password', 'recruiter')";
$conn->query($query) or die ("invalid user insert" . $conn->error); 

//Resumes Table
$query = "DROP table Resumes;";
$conn->query($query) or die (); 

$query = "CREATE TABLE Resumes (Resume_id int primary key not null AUTO_INCREMENT, Recruiter_id char(255) not null, name char(255), edu decimal(4,2), lang int, work int, xfactor int, total_score int, green int, yellow int, red int);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "Resume table initialized";
echo "<br>";


echo "All tables initialized";
?>
</body>
</html>