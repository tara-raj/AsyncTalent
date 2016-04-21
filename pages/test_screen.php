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
 	
  		$tr = $_FILES["file"];
  		//print_r($tr);
  		
  		//echo $tr['name'] . "<br>";
  		
  		if ($_FILES["file"]["error"] > 0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			$fp = fopen($_FILES['file']['tmp_name'], 'rb');
    		while ( ($line = fgets($fp)) !== false) {
      			echo "$line<br>";
    		}
		}
?>
</body>
</html>