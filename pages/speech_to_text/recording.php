<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Web Speech API Demo</title>
    <style>
      body
      {
        max-width: 500px;
        margin: 2em auto;
        font-size: 20px;
      }

      h1
      {
        text-align: center;
      }

      .buttons-wrapper
      {
        text-align: center;
      }

      .hidden
      {
        display: none;
      }

      #transcription,
      #log
      {
        display: block;
        width: 100%;
        height: 5em;
        overflow-y: scroll;
        border: 1px solid #333333;
        line-height: 1.3em;
      }

      .button-demo
      {
        padding: 0.5em;
        display: inline-block;
        margin: 1em auto;
      }
    </style>
  </head>
  <body>
<h1 class="page-header">Mock Interview</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Question
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <table>
                                        <td>
                                        <h3 class="text-primary">
                                        <?php
	$dbhost = 'localhost';
	$dbuser = 'Assign2';
	$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if($conn )
{
  //echo "Connected";
}
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$query = "DROP table Questions";
$conn->query($query) or die (); 
//echo "Dropped";

$query = "CREATE TABLE Questions (Q_id int primary key not null AUTO_INCREMENT, Question text not null, Category text not null, Sub text, Role text, Company text, Keywords text, Time float, Type text, Tips text);";
$conn->query($query) or die ("Invalid create" . $conn->error); 
//echo "Company table initialized";

$handle = fopen("QuestionBank.csv", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $ls = explode(",", $line);
        if($ls[0] != 'Question'){
        $query = "INSERT INTO Questions (Question, Category, Sub, Role, Company, Keywords, Time, Type, Tips)
                       VALUES
                       ('$ls[0]', '$ls[1]', '$ls[2]', '$ls[3]', '$ls[4]', '$ls[5]', '$ls[6]', '$ls[7]', '$ls[8]')";
        //echo $ls[0] . " " . $ls[1] . "<br>";
		$conn->query($query) or die ("invalid user insert" . $conn->error);
		}
        /*for($i = 0; $i < sizeof($ls); $i++){
        	echo $line_separated[$i] . "<br>";
        }*/
    }

    fclose($handle);
    
} else {
    // error opening the file.
} 

	$query="SELECT * FROM Questions";
	$conn->query($query) or die ("couldn't connect " . $conn->error);
	$result = $conn->query($query);

	$array = array();
	
	while($row = mysqli_fetch_row($result))
	{
		//echo $row[0] . " " . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . " " . $row[5] . " " . $row[6] . " " . $row[7] . $row[8] . $row[9]. "<br>";
		array_push($array, $row);
	}
	
	pickRandom(sizeof($array)-1, $array);
	
	function pickRandom($var, $arr){
		$select = rand(0, $var);
		$_SESSION["selected_question"] = $select;
		//echo $_SESSION["selected_question"];
		echo $arr[$select][1];
		$_SESSION["time"] = $arr[$select][7];
	}
	
	//print_r($array);
	/*for($i = 0; $i < sizeof($array); $i++){
		echo $array[$i];
	}*/
?>
                                        <h3></td>
                                        <td>&nbsp &nbsp</td>
                                        <td>
                                            <form>
<input class="btn btn-primary" type="button" onClick="history.go(0)" value="New Question" id="new_q">
</form>
</table>
<?php
$timestamp = time();
$_SESSION['ts'] = "";
$diff = $_SESSION["time"]*60; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;
?>
<div id="strclock" align="right">Clock Here!</div>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
 setTimeout("countdown()",1000);
 
 var tt = document.getElementById('strclock').innerHTML
 if(sec <= "15" && min == "00" && hour == "00"){
 	//document.getElementById('strclock').innerHTML = "Time's Up!";
 	document.getElementById('strclock').style.color = "red";
 	document.getElementById("strclock").style.font = "bold 20px arial";
 }
 if(sec == "00" && min == "00" && hour == "00"){
 	document.getElementById('strclock').innerHTML = "Time's Up!";
 	document.getElementById('sub').click();
 }
 
 }
 countdown();
</script> 
<br>

<form align="center" action="questions_calc.php" method="post">
<label>Response Transcription</label>
<textarea id="transcription" readonly="readonly" name='transcription'></textarea>
<br>
<input class="btn btn-lg btn-success" type="submit" value="Submit" id="sub">
</form>
<button class="btn btn-lg btn-primary" id="button-stop-ws" class="button-demo">Stop recording</button>
   <!--<span>Results:</span>
   <label><input type="radio" name="recognition-type" value="final"  checked="checked"/> Final only</label>
    <label><input type="radio" name="recognition-type" value="interim"/> Interim</label>--!>

    <!--<h3>Log</h3>
    <div id="log"></div>--!>

    <div class="buttons-wrapper">
      <!--<button id="button-play-ws" class="button-demo">Play demo</button>--!>
      
      <!--<button id="clear-all" class="button-demo">Clear all</button>--!>
    </div>
    <span id="ws-unsupported" class="hidden">API not supported</span>

    <script>
      // Test browser support
      window.SpeechRecognition = window.SpeechRecognition       ||
                                 window.webkitSpeechRecognition ||
                                 null;

      if (window.SpeechRecognition === null) {
        document.getElementById('ws-unsupported').classList.remove('hidden');
        document.getElementById('button-play-ws').setAttribute('disabled', 'disabled');
        document.getElementById('button-stop-ws').setAttribute('disabled', 'disabled');
      } else {
        var recognizer = new window.SpeechRecognition();
        var transcription = document.getElementById('transcription');
        var log = document.getElementById('log');

        // Recogniser doesn't stop listening even if the user pauses
        recognizer.continuous = true;

        // Start recognising
        recognizer.onresult = function(event) {
          transcription.textContent = '';

          for (var i = event.resultIndex; i < event.results.length; i++) {
            if (event.results[i].isFinal) {
              transcription.textContent = event.results[i][0].transcript; 
              //+ ' (Confidence: ' + event.results[i][0].confidence + ')';
            } else {
              transcription.textContent += event.results[i][0].transcript;
            }
          }
        };

        // Listen for errors
        recognizer.onerror = function(event) {
          log.innerHTML = 'Recognition error: ' + event.message + '<br />' + log.innerHTML;
        };

		try {
            recognizer.start();
            //recognizer.interimResults = document.querySelector('input[name="recognition-type"][value="interim"]').checked;
            log.innerHTML = 'Recognition started' + '<br />' + log.innerHTML;
          } catch(ex) {
            log.innerHTML = 'Recognition error: ' + ex.message + '<br />' + log.innerHTML;
          }
          
        document.getElementById('button-play-ws').addEventListener('click', function() {
          // Set if we need interim results
          recognizer.interimResults = document.querySelector('input[name="recognition-type"][value="interim"]').checked;

          try {
            recognizer.start();
            log.innerHTML = 'Recognition started' + '<br />' + log.innerHTML;
          } catch(ex) {
            log.innerHTML = 'Recognition error: ' + ex.message + '<br />' + log.innerHTML;
          }
        });

        document.getElementById('button-stop-ws').addEventListener('click', function() {
          recognizer.stop();
          log.innerHTML = 'Recognition stopped' + '<br />' + log.innerHTML;
        });

        document.getElementById('clear-all').addEventListener('click', function() {
          transcription.textContent = '';
          log.textContent = '';
        });
      }
    </script>
  </body>
</html>