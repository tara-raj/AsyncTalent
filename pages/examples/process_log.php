<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<link rel = "stylesheet" type = "text/css" href = "style.css"/>
	<head>
		<title> PeelOffPounds </title>
	</head>
	<body>
 <?php 
 	
  		$mood = rtrim($_POST["mood"]);
  		echo "Mood is: " . $mood;
  		$hunger = rtrim($_POST["hunger"]);
  		echo "<br> Hunger level is: " . $hunger;
  		$weight = rtrim($_POST["weight"]);
  		echo "<br> Current weight: " . $weight;
  		$date = rtrim($_POST["date"]);
  		echo "<br> Date is: " . $date;
  		$time = rtrim($_POST["time"]);
  		echo "<br> Time is: " . $time;
  		$user_id = $_SESSION['user_id'];
  		echo "<br> Current user: " . $user_id;
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

$query= "INSERT INTO DailyLogs (User_id, Mood, Hunger, Weight, Date, Time) VALUES ('$user_id', '$mood', '$hunger', '$weight', '$date', '$time');";
$conn->query($query) or die ("couldn't connect " . $conn->error);


$query="SELECT * FROM DailyLogs";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

$logs = "";

while($row = mysqli_fetch_row($result))
{
    //echo "<br>" . $row[2];
    //echo $row[3]. "<br>";
    if($row[1] == $user_id){ //compare row to username
    		$logs .= $row[0] . ",";
    } else {
    	continue;
    }
}

$all_logs = explode(",", $logs);
echo "<br>";
print_r($all_logs);

$query="SELECT * FROM DailyLogs WHERE User_id = $user_id";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

$mood_happy = 0;
$mood_indifferent = 0;
$mood_sad = 0;
$mood_angry = 0;
$mood_stressed = 0;

$hunger_1 = 0;
$hunger_2 = 0;
$hunger_3 = 0;
$hunger_4 = 0;
$hunger_5 = 0;

$weight_array = array();

$total_logs = 0;

while($row = mysqli_fetch_row($result))
{
    if($row[2] == "Happy"){
    	$mood_happy += 1;
    } else if($row[2] == "Indifferent") {
    	$mood_indifferent += 1;
    } else if($row[2] == "Sad") {
    	$mood_sad += 1;
    } else if($row[2] == "Angry") {
    	$mood_angry += 1;
    } else if($row[2] == "Stressed") {
    	$mood_stressed += 1;
    }
    
    if($row[3] == "1"){
    	$hunger_1 += 1;
    } else if($row[3] == "2") {
    	$hunger_2 += 1;
    } else if($row[3] == "3") {
    	$hunger_3 += 1;
    } else if($row[3] == "4") {
    	$hunger_4 += 1;
    } else if($row[3] == "5") {
    	$hunger_5 += 1;
    }
    
    array_push($weight_array, $row[4]);
    
    $total_logs += 1;
    continue;
}

echo "<br> happy: " . $mood_happy . " indifferent: " . $mood_indifferent . " sad: " . $mood_sad . " angry: " . $mood_angry . " stressed: " . $mood_stressed;
echo "<br> 1: " . $hunger_1 . " 2: " . $hunger_2 . " 3: " . $hunger_3 . " 4: " . $hunger_4 . " 5: " . $hunger_5;
echo "<br>";
print_r($weight_array);
echo "<br> total user logs: " . $total_logs;

//header("Location: log_2.php");

?>
</body>
</html>