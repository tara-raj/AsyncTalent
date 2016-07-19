<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AsyncTalent</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>T</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Async</b>Talent</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg"  class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['user']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg"  class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['user']?>
                </p>
              </li>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="login.html" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h4><?php echo $_SESSION['user']?></h4>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="upload.php">
            <i class="fa fa-upload"></i> <span>Upload Resumes</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="sort.php">
            <i class="fa fa-flask"></i> <span>View Results</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="sort_list_resumes.php"><i class="fa fa-th-list"></i>List</a></li>
            <li><a href="grid_resumes.php"><i class="fa fa-th-large"></i>Grid</a></li>
            <li><a href="graph_resumes.php"><i class="fa fa-bar-chart"></i>Graph</a></li>
          </ul>
        </li>
        <li>
          <a href=#>
            <i class="fa fa-edit"></i>
            <span>Manage</span>
            <small class="label pull-right bg-primary">coming soon</small>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Resume List
      </h1>
      <ol class="breadcrumb">
        <li><a href="upload.php"><i class="fa fa-upload"></i>Upload</a></li>
        <li class="active">List</li>
      </ol>
    </section>
    
    
          
    <!-- Main content -->
    <section class="content">
    <div class="row">
        <div class="col-md-6">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <i class="fa fa-flask"></i><h3 class="box-title">Analysis Tools</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <form action="sort_list_resumes.php" method="post">
            <div class="box-body">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Sort</label>
                <select class="form-control select2" style="width: 100%;" id="sort" name="sort">
                  <option selected="selected">Score</option>
                  <option>Education</option>
                  <option>Programming Languages</option>
                  <option>Work Experience</option>
                  <option>X-Factors</option>
                </select>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              Filter <small class="label pull-right bg-primary">coming soon</small>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              Search <small class="label pull-right bg-primary">coming soon</small>
            </div>
            <!-- /.box-body -->
            <div class="box-body">
              <button class="btn btn-sm btn-primary" type="submit">Apply</button>
            </div>
            <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
    
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
              </div>
              <!-- /.box-body -->
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Total Score</th>
                  <th>Education</th>
                  <th>Languages</th>
                  <th>Work Exp</th>
                  <th>X-Factors</th>
                </tr>
                </thead>
                <tbody>
                
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
$green = 0;
$yellow = 0;
$red = 0;

//GPA RANKINGS
if($gpa >= 3.6){
	$g_rank =  "btn btn-success";
	$total_score += 4;
	$green += 1;
}
elseif($gpa >= 3.4 && $gpa <= 3.6){
	$g_rank = "btn btn-warning";
	$total_score += 3;
	$yellow += 1;
}
else{
	$g_rank = "btn btn-danger";
	$red += 1;
}

//PROGRAMMING LANGUAGE RANKINGS
if($langs > 6){
	$l_rank = "btn btn-success";
	$total_score += 3;
	$green += 1;
}
elseif($langs > 2 && $langs < 6){
	$l_rank = "btn btn-warning";
	$total_score += 2;
	$yellow += 1;
}
else{
	$l_rank = "btn btn-danger";
	$total_score += 1;
	$red += 1;
}

//COMPANY RANKINGS
if($comps > 0){
	$c_rank = "btn btn-success";
	$total_score += 5;
	$green += 1;
}
else{
	$c_rank = "btn btn-danger";
	$red += 1;
}

//XFACTOR RANKINGS
if($xfactor > 1){
	$x_rank = "btn btn-success";
	$total_score += 3;
	$green += 1;
}
elseif($xfactor > 0){
	$x_rank = "btn btn-warning";
	$total_score += 2;
	$yellow += 1;
}
else{
	$x_rank = "btn btn-danger";
	$red += 1;
}


?>
<?php
//ADD THE INFO TO A TABLE
?>
<?php
//echo "<br>" . "STATS: " . $gpa . " " . $langs . " " . $comps . " " . $xfactor . "<br>";
//echo "<br>" . "STATS: " . $g_rank . " " . $l_rank . " " . $c_rank . " " . $x_rank . "<br>";

$recruiter_id = $_SESSION['user_id'];

	$dbhost = 'localhost';
	$dbuser = 'Assign2';
	$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}     

$querycheck = "SELECT * FROM Resumes WHERE Recruiter_id = '$recruiter_id' AND name = '$candidate_name'";
$result = $conn->query($querycheck);
if(mysqli_num_rows($result) > 0)
{ 

}
else
{
	$query = "INSERT INTO Resumes (Recruiter_id, name, edu, lang, work, xfactor, total_score, green, yellow, red)
                VALUES ('$recruiter_id', '$candidate_name', $gpa, $langs, $comps, $xfactor, $total_score, $green, $yellow, $red)";
	$conn->query($query) or die ("Invalid create" . $conn->error);

}

//LOOP THROUGH TABLE AND PRINT SORTED ROWS

/*echo "<div class='btn-group'>";
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
echo "<br>";*/

$candidate_name = ucwords($candidate_name);

echo "<tr>";

echo "<td><b><h4>". $candidate_name . "</h4></b></td>";

echo "<td><b><h4>". $total_score . "</h4></b></td>";

echo "<td>";
echo "<button type='button' class='" . $g_rank . "'>";
echo "<span class='glyphicon glyphicon-education'></span>";
echo "</button>";
echo "</td>";

echo "<td>";
echo "<button type='button' class='" . $l_rank . "'>";
echo "<span class='glyphicon glyphicon-random'></span>";
echo "</button>";
echo "</td>";

echo "<td>";
echo "<button type='button' class='" . $c_rank . "'>";
echo "<span class='glyphicon glyphicon-briefcase'></span>";
echo "</button>";
echo "</td>";

echo "<td>";
echo "<button type='button' class='" . $x_rank . "'>";
echo "<span class='glyphicon glyphicon-fire'></span>";
echo "</button>";
echo "</td>";

echo "</tr>";

}

//echo "<input class='btn btn-group'>";
//echo "<input class='btn btn-success'>";


?>              
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Total Score</th>
                  <th>Education</th>
                  <th>Languages</th>
                  <th>Work Exp</th>
                  <th>X-Factors</th>
                </tr>
                </tfoot>
              </table>
              </div>
              <div class="box-footer">
                <button class="btn btn-lg btn-primary" onclick="location.href = 'upload.php';">Upload More Resumes</button>
              </div>
              
          </div>
          </div>
          <!-- /.box -->

          
        </div>
        <!--/.col (right) -->
    </section>
    <!-- /.content -->

  </body>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.0
    </div>
    <strong>Copyright &copy; 2016 AsyncTalent.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src=".plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page script -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>