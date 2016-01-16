<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/star-rating.js" type="text/javascript"></script>

    <title>EmployEDU - Find</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script src="http://code.jquery.com/jquery-latest.js"></script>

<body>

    <div id="wrapper">

       <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">EmployEDU</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION['admin'] ?><?php echo "'s Profile" ?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <!--<input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>--!>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                        </li>
                        <li>
                            <a href="find.php"><i class="fa fa-search fa-fw"></i>Find Companies</a>
                        </li>
                        <li>
                            <a href="apply.php"><i class="fa fa-edit fa-fw"></i>Apply</a>
                        </li>
                        <li>
                            <a href="interview.php"><i class="fa fa-briefcase fa-fw"></i>Interview</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Interview</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Break
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <table>
                                        <td>
                                        <h3 class="text-primary">Question Finished</h3>
                                        <h4>Go ahead and click Next Question when you are ready to proceed in your interview. We recommend a 5 to 10 minutes break.</h4>
                            <?php                            
$text = strtolower($_POST["final_span"]);
//echo $text . "<br>";

//echo $text;
$q = $_SESSION["selected_question"];
//echo $q;

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

$q += 1;
$query="SELECT * FROM Questions WHERE Q_id = $q";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

$row = mysqli_fetch_row($result);
$t = $row[1];

//echo $t;
//echo $row[6];
$p = strtolower($row[6]);
//echo $p;
$keywords = explode(";", $p);
//print_r($keywords);

$counter = 0.0;
for($i = 0; $i < sizeof($keywords); $i++){
if(sizeof($keywords) > 1 && strlen($text) > 0){
	$th = strpos($text, $keywords[$i]);
	//echo "<br>" . $keywords[$i];
	if (FALSE !== $th){
    	$counter++;
    }
}
}

//echo $counter;

//KEYWORD SCORE
if(sizeof($keywords) > 1){
	 $score = ($counter/sizeof($keywords))*100;
	 if($score >= 0 && $score < 35){
	 	$_SESSION["keyword_score"] = 1;
	 }
	 if($score >= 35 && $score < 68){
	 	$_SESSION["keyword_score"] = 2;
	 }
	 if($score >= 68){
	 	$_SESSION["keyword_score"] = 3;
	 }
}
if(sizeof($keywords) <= 1){
	$_SESSION["keyword_score"] = 3;
}

//SPEECH SCORE
$text_arr = explode(' ', $text);
$time = $row[7];
$wpm = sizeof($text_arr)/$time;

if($wpm < 120 || $wpm > 165){
	$_SESSION["speech_score"] = 1;
}
if(($wpm >= 151 && $wpm <= 165) || ($wpm >= 120 && $wpm < 135)){
	$_SESSION["speech_score"] = 2;
}
if( $wpm <= 150 && $wpm >= 135){
	$_SESSION["speech_score"] = 3;
}

//EXAMPLE SCORE
$example = array("for example", "such as", "for instance", "instance", "examples", "examples include", "one example is", "including",
"in a similar case", "to illustrate", "by way of illustration", "if you look at", "includes", "example", "case in point", "especially",
"namely", "in addition to", "in particular" );

$res = 0;
for($j = 0; $j < sizeof($example); $j++){
if(strlen($text) > 0){
	$th = strpos($text, $example[$j]);
	//echo "<br>" . $keywords[$i];
	if (FALSE !== $th){
    	$res = 1;
    }
}
}
$_SESSION["example_score"] = $res;

/*echo "<br>" . "keyword score: " . $_SESSION["keyword_score"];
echo "<br>" . "speech score: " . $_SESSION["speech_score"];
echo "<br>" . "example score: " . $_SESSION["example_score"];*/


?>           
<h4></td>
<td>&nbsp &nbsp</td>
<td>
</table>
<?php
$_SESSION["result_name"] = "Buzzword Wizard";
$_SESSION["final_score"] = 2;

$k = $_SESSION["keyword_score"];
$p = $_SESSION["speech_score"];
$e = $_SESSION["example_score"];
if($k == 1 && $p == 1 && $e == 0){
	$_SESSION["result_name"] = "Rookie Raccoon";
	$_SESSION["final_score"] = 1;
	$_SESSION["tips"] = "Could be better. First, make sure you are touching on relevant concepts. Next, you should alter your speaking pace.
	Finally, try using some specific examples in your response. Try again! You will get better with practice.";
}
if($k == 1 && $p == 1 && $e == 1){
	$_SESSION["result_name"] = "Starter Skunk";
	$_SESSION["final_score"] = 1.5;
	$_SESSION["tips"] = "Ok start. Nice job using a specific example. That's a good start. But, make sure you are touching on relevant concepts. 
	You should also alter your speaking pace. Try again! You will get better with practice.";
}
if($k == 1 && $p == 2 && $e == 0){
	$_SESSION["result_name"] = "Rising Rabbit";
	$_SESSION["final_score"] = 1;
	$_SESSION["tips"] = "Could be better. First, make sure you are touching on relevant concepts. Next, you should alter your speaking pace
	a bit. Finally, try using some specific examples in your response. Try again! You will get better with practice.";
}
if($k == 1 && $p == 2 && $e == 1){
	$_SESSION["result_name"] = "Starter Skunk";
	$_SESSION["final_score"] = 1.5;
	$_SESSION["tips"] = "Ok start. Nice job using a specific example. That's a good start. But, make sure you are touching on relevant concepts. 
	You should also alter your speaking pace a bit. Try again! You will get better with practice.";
}
if($k == 2 && $p == 1 && $e == 0){
	$_SESSION["result_name"] = "Alright Aardvark";
	$_SESSION["final_score"] = 2;
	$_SESSION["tips"] = "Doing alright. Nice job using touching on relevant concepts. Keep improving there. You really need to alter your
	speaking pace. Also, be sure to use a specific example in your response. Try again! You will get better with practice.";
}
if($k == 2 && $p == 1 && $e == 1){
	$_SESSION["result_name"] = "Amateur Alpaca";
	$_SESSION["final_score"] = 2.5;
	$_SESSION["tips"] = "An amateur is better than a rookie, but not quite a pro. Nice job using touching on relevant concepts. Keep improving there.
	Also a good use of a specific example. But, you really need to alter your speaking pace! Try again and this time pay attention to how quickly/slowly
	you are speaking.";
}
if($k == 2 && $p == 2 && $e == 0){
	$_SESSION["result_name"] = "Alright Aardvark";
	$_SESSION["final_score"] = 2.5;
	$_SESSION["tips"] = "Doing alright. Nice job using touching on relevant concepts. Keep improving there. You should alter your
	speaking pace a bit. Be sure to use a specific example in your response an you'll be more than alright. Try again and use
	a specific example in your response this time!";
}
if($k == 2 && $p == 2 && $e == 1){
	$_SESSION["result_name"] = "Descent Dino";
	$_SESSION["final_score"] = 3;
	$_SESSION["tips"] = "Pretty descent. Nice job using touching on relevant concepts. Keep improving there. You should alter your
	speaking pace a bit. Try again and pay attention to the concepts you should touch on as well as your speaking pace.";
}
if($k == 2 && $p == 3 && $e == 0){
	$_SESSION["result_name"] = "Upcoming Unicorn";
	$_SESSION["final_score"] = 3;
	$_SESSION["tips"] = "Getting there. Nice job with your speaking pace. You're touching on most concepts. Keep improving there. 
	You need to include a specific example in your response. Try again and use a specific example in your response this time!";
}
if($k == 2 && $p == 3 && $e == 1){
	$_SESSION["result_name"] = "Crusin' Crab!";
	$_SESSION["final_score"] = 4.5;
	$_SESSION["tips"] = "Crushing it! Great job overall. You are missing a few concepts, so be sure to think about the most important
	topics next time you should be considering next time you interview.";
}
if($k == 3 && $p == 1 && $e == 0){
	$_SESSION["result_name"] = "Buzzword Babboon";
	$_SESSION["final_score"] = 2;
	$_SESSION["tips"] = "Well, you know some buzzwrods. Your speaking pace needs to be significantly altered. Also, try and use a 
	specific example in your response. Try again and this time focus on your speaking pace and having substance in your response.";
}
if($k == 3 && $p == 1 && $e == 1){
	$_SESSION["result_name"] = "Buzzword Babboon";
	$_SESSION["final_score"] = 2;
	$_SESSION["tips"] = "Well, you know some buzzwrods. Your speaking pace needs to be significantly altered. Also, try and use a 
	specific example in your response. Try again and this time focus on your speaking pace and having substance in your response.";
}
if($k == 3 && $p == 2 && $e == 0){
	$_SESSION["result_name"] = "Meh Moose";
	$_SESSION["final_score"] = 3;
	$_SESSION["tips"] = "That was alright. You touched on all the concepts you should be! Now pay a little more attention
	to your speaking pace. Also, be sure to use a specific example. Try again with these pointers in mind and you'll be a pro in no time!";
}
if($k == 3 && $p == 2 && $e == 1){
	$_SESSION["result_name"] = "Super Squirrel!";
	$_SESSION["final_score"] = 4.5;
	$_SESSION["tips"] = "Great job! You're so close. Just pay a little more attention to your speaking pace next time.";
}
if($k == 3 && $p == 3 && $e == 0){
	$_SESSION["result_name"] = "Kickin' Kangaroo!";
	$_SESSION["final_score"] = 4.5;
	$_SESSION["tips"] = "Crushing it! You're so close. Just be sure to use a specific example next time.";
}
if($k == 3 && $p == 3 && $e == 1){
	$_SESSION["result_name"] = "Perfection Pelican!";
	$_SESSION["final_score"] = 5;
	$_SESSION["tips"] = "PERFECTION! You did it! That was a perfect interview. Keep up the great work!";
}
?>
<h5 class="text-muted">
<?php
$tire = $_POST['r_id'];
echo "The name of your audio file is: " . $tire . "Please save this for your records." . "<br><br>";
?>
</h5>

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

$link = stripslashes($_SESSION['link']); 
$score = $_SESSION["final_score"] + ",";                                       
										
$query= "UPDATE Interviews SET Score = CONCAT(Score, '$score') WHERE Link = '$link'";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

$next = "";
if($_SESSION['qnum'] == (sizeof($_SESSION['qarray']) - 1)){
	//header('Location: questions_end.php');
	$next = "questions_end.php";
}
else{
	$_SESSION['qnum'] += 1;
	//header('Location: questions_int.php');
	$next = "questios_int.php";
}
?>
<form align="center" action='<?php echo $next ?>' method="post">
<input class="btn btn-lg btn-success" type="submit" value="Next Question" id="sub">
</form>
<script>
</script>
<!--<h4> Check out more tips: </h4>
<li><a>Putting buzzwords in meaningful sentences</a></li>
<li><a>Situation, Action, Response</a></li> 
<li><a>Specific examples</a></li>--!>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>