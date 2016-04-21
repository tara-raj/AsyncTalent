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

    <title>AsyncTalent</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">AsyncTalent</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo " " . $_SESSION['admin'] ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['admin'] ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="login.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                        </li>
                        <li>
                            <a href="screen.php"><i class="fa fa-search fa-fw"></i>Screen</a>
                        </li>
                        <li>
                            <a href="create.php"><i class="fa fa-edit fa-fw"></i>Interview</a>
                        </li>
                        <li>
                            <a href="view_feedback.php"><i class="fa fa-dashboard fa-fw"></i>Manage</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Screen</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Resume Screening Results
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <table>
                                        <td>
                                        <h4>
                            <?php 
$tr = $_FILES["file"];
  		//print_r($tr);
  		
  		//echo $tr['name'] . "<br>";
$init = "";
  		if ($_FILES["file"]["error"] > 0)
		{
			echo "Error: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			$fp = fopen($_FILES['file']['tmp_name'], 'rb');
    		while ( ($line = fgets($fp)) !== false) {
      			//echo "$line<br>";
      			$init .= $line . "<br>";
    		}
		}
		                           
$text = strtolower($init);
$resume_array = explode("nextresume", $text);
//$resume_array = preg_split("/^nextresume$/", $text);

//print_r($resume_array);

$gpa = 0;
for($a = 0; $a < sizeof($resume_array); $a++){

$array = explode("\n", $resume_array[$a]);
if($a == 0){
	$firstLine = $array[0];
	$candidate_name = $firstLine;
}
else{
	$firstLine = $array[1];
	$candidate_name = substr($firstLine, 4);
}

//echo "<br>" . $candidate_name;

$splitted = preg_split('/\s+\,/', $resume_array[$a]);


for($j = 0; $j < sizeof($splitted); $j++){
$findme   = 'gpa';
$pattern = '/[0-4]\.[0-9]+/';
preg_match($pattern, $resume_array[$a], $matches);
//print_r($matches);
}

if(sizeof($matches) > 0){
	$output = $matches[0];
	$gpa = $output;
}
else{
	$output = "none detected";
	$gpa = 0;
}
//echo "<h4>" . "GPA: " . $output . "<br>";


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


//echo "<br>" . "Programming languages: ";

$langs = 0;
for($j = 0; $j < sizeof($splitted); $j++){
	for($i = 0; $i < sizeof($languages); $i++){
		if($languages[$i] != null){
		$pos = strpos($splitted[$j], $languages[$i]);
		if($pos === false){
		}
		else{
			//echo $languages[$i] . " ";
			$langs += 1;
		}
		}
	}
	/*if (in_array($languages[$i],$splitted) !== false) {
		echo $languages[$i] . " ";
	}*/
}

$comps = 0;
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


//echo "<br>" . "<br>" . "Company Experience: ";
for($j = 0; $j < sizeof($splitted); $j++){
	for($i = 0; $i < sizeof($companies); $i++){
		if($companies[$i] != null){
			$pos = strpos($splitted[$j], $companies[$i]);
			if($pos === false){
			}
			else{
				if($companies[$i] == 'microsoft'){
					$p = strpos($resume_array[$a], 'redmond');
					if($p === false){
					}
					else{
						//echo $companies[$i] . " ";
						$comps += 1;
					}
				} else if($companies[$i] == 'google' || $companies[$i] == 'linkedin'){
					$p = strpos($resume_array[$a], 'mountain view');
					if($p === false){
					}
					else{
						//echo $companies[$i] . " ";
						$comps += 1;
					}
				} else if($companies[$i] == 'facebook'){
					$p = strpos($resume_array[$a], 'menlo park');
					if($p === false){
					}
					else{
						//echo $companies[$i] . " ";
						$comps += 1;
					}
				} else {
					//echo $companies[$i] . " ";
					$comps += 1;
				}
				
			}
		}
	}
}

$xfactor = 0;
//echo "<br>" . "<br>" . "Special Considerations: ";
for($j = 0; $j < sizeof($splitted); $j++){
	$p = strpos($resume_array[$a], 'teaching assistant');
	if($p === false){
					}
	else{
		//echo "Teaching assitant" . ", ";
		$xfactor += 1;
	}
	$p = strpos($resume_array[$a], 'teaching fellow');
	if($p === false){
					}
	else{
		//echo "Teaching fellow" . ", ";
		$xfactor += 1;
	}
	$p = strpos($resume_array[$a], 'resident advisor');
	if($p === false){
					}
	else{
		//echo "Resident advisor" . ", ";
		$xfactor += 1;
	}
	$p = strpos($resume_array[$a], 'startup');
	if($p === false){
					}
	else{
		//echo "Startup interests" . ", ";
		$xfactor += 1;
	}
	$p = strpos($resume_array[$a], 'entrepreneurship');
	if($p === false){
					}
	else{
		//echo "Entrepreneruship interests" . ", ";
		$xfactor += 1;
	}
	$p = strpos($resume_array[$a], 'founder');
	if($p === false){
					}
	else{
		//echo "Founder" . ", ";
		$xfactor += 1;
	}
	$p = strpos($resume_array[$a], 'president');
	if($p === false){
	}
	else{
		//echo "Club president" . ", ";
		$xfactor += 1;
	}
}


$total_score = 0;
//GPA RANKINGS
if($gpa >= 3.6){
	$g_rank =  "btn btn-success";
	$total_score += 4;
}
elseif($gpa >= 3.4 && $gpa <= 3.6){
	$g_rank = "btn btn-warning";
	$total_score += 3;
}
else{
	$g_rank = "btn btn-danger";
}

//PROGRAMMING LANGUAGE RANKINGS
if($langs > 6){
	$l_rank = "btn btn-success";
	$total_score += 3;
}
elseif($langs > 2 && $langs < 6){
	$l_rank = "btn btn-warning";
	$total_score += 2;
}
else{
	$l_rank = "btn btn-danger";
	$total_score += 1;
}

//COMPANY RANKINGS
if($comps > 0){
	$c_rank = "btn btn-success";
	$total_score += 5;
}
else{
	$c_rank = "btn btn-danger";
}

//XFACTOR RANKINGS
if($xfactor > 1){
	$x_rank = "btn btn-success";
	$total_score += 3;
}
elseif($xfactor > 0){
	$x_rank = "btn btn-warning";
	$total_score += 2;
}
else{
	$x_rank = "btn btn-danger";
}
?>
<?php
//ADD THE INFO TO A TABLE
?>
<?php
//echo "<br>" . "STATS: " . $gpa . " " . $langs . " " . $comps . " " . $xfactor . "<br>";
//echo "<br>" . "STATS: " . $g_rank . " " . $l_rank . " " . $c_rank . " " . $x_rank . "<br>";

//LOOP THROUGH TABLE AND PRINT SORTED ROWS

echo "<div class='btn-group'>";
echo "<button type='button' class='" . $g_rank . "'>";
echo "<span class='glyphicon glyphicon-education'></span>";
echo "</button>";

echo "<button type='button' class='" . $l_rank . "'>";
echo "<span class='glyphicon glyphicon-random'></span>";
echo "</button>";

echo "<button type='button' class='" . $c_rank . "'>";
echo "<span class='glyphicon glyphicon-briefcase'></span>";
echo "</button>";

echo "<button type='button' class='" . $x_rank . "'>";
echo "<span class='glyphicon glyphicon-fire'></span>";
echo "</button>";

echo "<button type='button' class='btn btn-default'>" . $candidate_name . "</button>";

echo "<button type='button' class='btn btn-default'>" . $total_score . "</button>";

echo "</div>";
echo "<br>";
echo "<br>";

}

//echo "<input class='btn btn-group'>";
//echo "<input class='btn btn-success'>";


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