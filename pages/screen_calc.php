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
                            <a href="create.php"><i class="fa fa-edit fa-fw"></i>Create</a>
                        </li>
                        <li>
                            <a href="view_feedback.php"><i class="fa fa-dashboard fa-fw"></i>View Feedback</a>
                        </li>
                        <li>
                            <a href="screen.php"><i class="fa fa-search fa-fw"></i>Screen</a>
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
                            <?php                            
$text = strtolower($_POST["text_input"]);
$splitted = preg_split('/\s+\,/', $text);
//echo $text . "<br>";
//echo $text;
//echo $text;

for($j = 0; $j < sizeof($splitted); $j++){
$findme   = 'gpa';
$pattern = '/[0-4]\.[0-9]+/';
preg_match($pattern, $text, $matches);
//print_r($matches);
}

if(sizeof($matches) > 0){
	$output = $matches[0];
}
else{
	$output = "none detected";
}
echo "<h4>" . "GPA: " . $output . "<br>";

$handle = fopen("languages.csv", "r");
$languages=array();
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $p = strtolower($line);
        $q = rtrim($p);
        array_push($languages,$q);
        /*for($i = 0; $i < sizeof($ls); $i++){
        	echo $line_separated[$i] . "<br>";
        }*/
    }

    fclose($handle);
    
} else {
    // error opening the file.
} 


echo "<br>" . "Programming languages: ";

for($j = 0; $j < sizeof($splitted); $j++){
	for($i = 0; $i < sizeof($languages); $i++){
		if($languages[$i] != null){
		$pos = strpos($splitted[$j], $languages[$i]);
		if($pos === false){
		}
		else{
			echo $languages[$i] . " ";
		}
		}
	}
	/*if (in_array($languages[$i],$splitted) !== false) {
		echo $languages[$i] . " ";
	}*/
}

$handle = fopen("companies.csv", "r");
$companies=array();
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
        $p = strtolower($line);
        $q = rtrim($p);
        array_push($companies,$q);
        /*for($i = 0; $i < sizeof($ls); $i++){
        	echo $line_separated[$i] . "<br>";
        }*/
    }

    fclose($handle);
    
} else {
    // error opening the file.
} 


echo "<br>" . "<br>" . "Company Experience: ";
for($j = 0; $j < sizeof($splitted); $j++){
	for($i = 0; $i < sizeof($companies); $i++){
		if($companies[$i] != null){
			$pos = strpos($splitted[$j], $companies[$i]);
			if($pos === false){
			}
			else{
				if($companies[$i] == 'microsoft'){
					$p = strpos($text, 'redmond');
					if($p === false){
					}
					else{
						echo $companies[$i] . " ";
					}
				} else if($companies[$i] == 'google' || $companies[$i] == 'linkedin'){
					$p = strpos($text, 'mountain view');
					if($p === false){
					}
					else{
						echo $companies[$i] . " ";
					}
				} else if($companies[$i] == 'facebook'){
					$p = strpos($text, 'menlo park');
					if($p === false){
					}
					else{
						echo $companies[$i] . " ";
					}
				} else {
					echo $companies[$i] . " ";
				}
				
			}
		}
	}
}

echo "<br>" . "<br>" . "Special Considerations: ";
for($j = 0; $j < sizeof($splitted); $j++){
	$p = strpos($text, 'teaching assistant');
	if($p === false){
					}
	else{
		echo "Teaching assitant" . ", ";
	}
	$p = strpos($text, 'teaching fellow');
	if($p === false){
					}
	else{
		echo "Teaching fellow" . ", ";
	}
	$p = strpos($text, 'resident advisor');
	if($p === false){
					}
	else{
		echo "Resident advisor" . ", ";
	}
	$p = strpos($text, 'startup');
	if($p === false){
					}
	else{
		echo "Startup interests" . ", ";
	}
	$p = strpos($text, 'entrepreneurship');
	if($p === false){
					}
	else{
		echo "Entrepreneruship interests" . ", ";
	}
	$p = strpos($text, 'founder');
	if($p === false){
					}
	else{
		echo "Founder" . ", ";
	}
	$p = strpos($text, 'president');
	if($p === false){
					}
	else{
		echo "Club president" . ", ";
	}
}
?>
<br>
<br>
<br>
<br>
<div align="center">
<button class="btn btn-lg btn-success" align="center" onclick="navigate()">Back to Screening Tool</button>
</div>
 			<script>
 				function navigate(){
 					window.location = "screen.php";
 				}
 			</script>
 			
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