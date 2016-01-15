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
$query = "DROP table Profiles";
$conn->query($query) or die (); 

$query = "CREATE TABLE Profiles (User_id int primary key not null AUTO_INCREMENT, Username char(25) not null, Password char(255) not null, Type char(25) not null, Compensation int not null, Culture int not null, WorkLife int not null, Role int not null, Growth int not null);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "User table initialized";

//Company Profiles Table
$query = "DROP table Companies";
$conn->query($query) or die (); 

$query = "CREATE TABLE Companies (Company_id int primary key not null AUTO_INCREMENT, Name char(255) not null, LogoURL text not null, Description text not null, Overall float not null, Compensation float not null, Culture float not null, WorkLife float not null, Role float not null, Growth float not null, distance float);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "Company table initialized";

//ADD USERS 
$p = 'password';
$password = hash('sha256', $p);
$name1 = "user";
$name2 = "recruiter";

$query = "INSERT INTO Profiles (Username, Password, Type)
                       VALUES
                       ('$name1', '$password', 'user')";
$conn->query($query) or die ("invalid user insert" . $conn->error);

$query = "INSERT INTO Profiles (Username, Password, Type)
                       VALUES
                       ('$name2', '$password', 'recruiter')";
$conn->query($query) or die ("invalid user insert" . $conn->error); 

//ADD COMPANIES
//Microsoft
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Microsoft', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/2000px-Microsoft_logo.svg.png', 'Microsoft, a software corporation, develops licensed and support products and services ranging from personal use to enterprise application.', 3.7, 4, 3.5, 3.5, 4, 3.5);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Google
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Google', 'https://62e528761d0685343e1c-f3d1b99a743ffa4142d9d7f1978d9686.ssl.cf2.rackcdn.com/files/93616/area14mp/image-20150902-6700-t2axrz.jpg', 'Google is a multinational corporation that is specialized in internet-related services and products.', 4.4, 4.4, 4.3, 3.9, 4.4, 3.9);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Facebook
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Facebook', 'https://www.facebook.com/images/fb_icon_325x325.png', 'Facebook is an online social networking service that enables its users to connect with friends and family as well as make new connections.', 4.5, 4.5, 4.5, 3.8, 4.5, 4.3);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Apple
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Apple', 'http://abankirenk.com/wp-content/uploads/2015/01/official-apple-logo-2014-widescreen-2.jpg', 'Apple is a multinational corporation that designs, manufactures, and markets consumer electronics, personal computers, and software.', 4.0, 4.0, 4.1, 3.3, 4.0, 3.5);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Dropbox
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Dropbox', 'http://vnfa8y5n3zndutm1.zippykid.netdna-cdn.com/wp-content/uploads/2011/10/DropBox-Logo-Alternate.png', 'Their mission is to provide a home for everyones most important information and bring it to life.', 4.5, 4.5, 4.5, 4.1, 4.5, 4.3);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Pandora
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Pandora', 'http://electricattitude.com/wp-content/uploads/2014/03/pandoraMusicConnection-1024x1024.png', 'Type in the name of an artist or song to get started with your own customizable internet radio station.', 4.5, 4.5, 4.5, 4.1, 4.5, 4.3);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Yahoo
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Yahoo', 'http://siliconangle.com/files/2014/03/Yahoo-logo.jpg', 'Yahoo! is a technology company that is known for its web services and applications.', 3.5, 3.7, 3.6, 3.6, 3.5, 3.2);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Twitter
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Twitter', 'https://g.twimg.com/Twitter_logo_blue.png', 'Twitter is a global social networking platform that allows its users to send and read 140-character messages known as “tweets.”', 4.1, 4.3, 4.1, 4.0, 4.1, 3.8);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Square
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Square', 'http://investorplace.com/wp-content/uploads/2015/10/Square_Logo_Portrait.jpg', 'Square is a merchant services aggregator and mobile payment company that aims to simplify commerce through technology.', 4.4, 4.1, 4.4, 4.3, 4.4, 4.0);";
$conn->query($query) or die ("invalid company insert" . $conn->error);

//Venmo
$query = "INSERT INTO Companies (Name, LogoURL, Description, Overall, Compensation, Culture, WorkLife, Role, Growth)
                       VALUES
                       ('Venmo', 'http://brand.venmo.com/img/logo-mark.png', 'Venmo offers an app that allows users to share and make payments with friends for a variety of services from.', 4.4, 4.4, 4.4, 4.3, 4.4, 4.0);";
$conn->query($query) or die ("invalid company insert" . $conn->error);


//INTERVIEWS TABLE
$query = "DROP table Interviews";
$conn->query($query) or die (); 

$query = "CREATE TABLE Interviews (Interview_id int primary key not null AUTO_INCREMENT, Link text, Questions text, Passcode text, Nickname text);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
echo "Interviews table initialized";

echo "Tables initialized";
?>
</body>
</html>