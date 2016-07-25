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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="click()">
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
            <li><a href="sort_list_resumes.php"><i class="fa fa-th-list"></i>List</a></li>
            <li><a href="grid_resumes.php"><i class="fa fa-th-large"></i>Grid</a></li>
            <li class="active"><a href="graph_resumes.php"><i class="fa fa-bar-chart"></i>Graph</a></li>
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
        Resume Graphs
      </h1>
      <ol class="breadcrumb">
        <li><a href="upload.php"><i class="fa fa-upload"></i>Upload</a></li>
        <li class="active">Graph</li>
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
            <form action="filter_graph_resumes.php" method="post">
            <div class="box-body">
              <!-- /.form-group -->
              <div class="form-group">
                <label>Filter</label>
                <select class="form-control select2" style="width: 100%;" id="filter" name="filter">
                  <option selected="selected">All Batches</option>
                  <?php
                  	$batch_names = '';
                  	
                  	$dbhost = 'localhost';
					$dbuser = 'Assign2';
					$dbpass = 'password';
 
					$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
					if(! $conn )
					{
  						die('Could not connect: ' . mysql_error());
					}     

					$recruiter = $_SESSION['user_id'];

					$query="SELECT * FROM Resumes WHERE Recruiter_id = '$recruiter'";
					$conn->query($query) or die ("couldn't connect " . $conn->error);
					$result = $conn->query($query);

					if (false === $result) {
    					echo mysql_error();
					}
					
					while($row = mysqli_fetch_row($result))
					{
    						if(strpos($batch_names, $row[11]) === false ){
    							echo "<option>" . $row[11] . "</option>";
    							$batch_names .= $row[11] . ' ';
    						}
					}
                  ?>
                </select>
              </div>
              <!-- /.form-group -->
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
    
	<?php
	$dbhost = 'localhost';
	$dbuser = 'Assign2';
	$dbpass = 'password';
 
$conn = new mysqli($dbhost, $dbuser, $dbpass, 'Assign2');
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}     

$recruiter = $_SESSION['user_id'];

if(isset($_POST["filter"]) && $_POST["filter"] != 'All Batches'){
  	$batch= rtrim($_POST["filter"]);

$query="SELECT * FROM Resumes WHERE Recruiter_id = '$recruiter' AND batch = '$batch'";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}
}
else{

$query="SELECT * FROM Resumes WHERE Recruiter_id = '$recruiter'";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

}


$score_1 = 0;
$score_2 = 0;
$score_3 = 0;
$score_4 = 0;
$score_5 = 0;
$score_6 = 0;
$score_7 = 0;
$score_8 = 0;
$score_9 = 0;
$score_10 = 0;
$score_11 = 0;
$score_12 = 0;
$score_13 = 0;
$score_14 = 0;
$score_15 = 0;

$number_resumes = 0;

$edu_green = 0;
$edu_yellow = 0;
$edu_red = 0;

$pl_green = 0;
$pl_yellow = 0;
$pl_red = 0;

$work_green = 0;
$work_yellow = 0;
$work_red = 0;

$xfactor_green = 0;
$xfactor_yellow = 0;
$xfactor_red = 0;

$total_green = 0;
$total_yellow = 0;
$total_red = 0;

while($row = mysqli_fetch_row($result))
{
	if($row[2] != ''){
		$number_resumes += 1;
	}
	
	if($row[7] == 1){
		$score_1 += 1;
	}
	else if($row[7] == 2){
		$score_2 += 1;
	}
	else if($row[7] == 3){
		$score_3 += 1;
	}
	else if($row[7] == 4){
		$score_4 += 1;
	}
	else if($row[7] == 5){
		$score_5 += 1;
	}
	else if($row[7] == 6){
		$score_6 += 1;
	}
	else if($row[7] == 7){
		$score_7 += 1;
	}
	else if($row[7] == 8){
		$score_8 += 1;
	}
	else if($row[7] == 9){
		$score_9 += 1;
	}
	else if($row[7] == 10){
		$score_10 += 1;
	}
	else if($row[7] == 2){
		$score_2 += 1;
	}
	else if($row[7] == 11){
		$score_11 += 1;
	}
	else if($row[7] == 12){
		$score_12 += 1;
	}
	else if($row[7] == 13){
		$score_13 += 1;
	}
	else if($row[7] == 14){
		$score_14 += 1;
	}
	else{
		$score_15 += 1;
	}
	
	if($row[3] >= 3.6){
		$edu_green += 1;
		$total_green += 1;
	}
	elseif($row[3] >= 3.4 && $row[3] <= 3.6){
		$edu_yellow += 1;
		$total_yellow += 1;
	}
	else{
		$edu_red += 1;
		$total_red += 1;
	}
	
	if($row[4] > 6){
		$pl_green += 1;
		$total_green += 1;
	}
	elseif($row[4] > 2 && $row[4] < 6){
		$pl_yellow += 1;
		$total_yellow += 1;
	}
	else{
		$pl_red += 1;
		$total_red += 1;
	}
	
	if($row[5] > 0){
		$work_green += 1;
		$total_green += 1;
	}
	else{
		$work_red += 1;
		$total_red += 1;
	}
	
	if($row[6] > 1){
		$xfactor_green += 1;
		$total_green += 1;
	}
	elseif($row[6] > 0){
		$xfactor_yellow += 1;
		$total_yellow += 1;
	}
	else{
		$xfactor_red += 1;
		$total_red += 1;
	}
}
?>

      <div class="row">
        <div class="col-md-6">
        <div class="box box-success">
          	<div class="box-header with-border">
          	<h4 class="box-title"><button class="btn btn-success" onclick="location.href = 'upload.php';" disabled><b><?php echo $number_resumes; ?> Total Resumes</b></button></h4>
          </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Overall Score Distribution</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
                <h4 class="box-title"><button class="btn btn-primary" disabled><b><?php $sum_score = number_format($sum_score, 2, '.', ''); echo $sum_score; ?> Average Score</b></button></h4>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- DONUT CHART -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Education</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" id="edu"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- DONUT CHART -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Programming Languages</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" id="pl"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart2" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	</div>
      <!-- /.row -->
      
      
        <div class="row">
        <div class="col-md-6">
        
        <div class="box box-primary">
          	<div class="box-header with-border">
          	<h3 class="box-title"><button class="btn btn-primary" onclick="location.href = 'upload.php';">Upload More Resumes</button></h3>
          </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
		
		<!-- BAR CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Overall Quality</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="pieChartOverall" style="height:230px"></canvas>
                &nbsp
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
		 <!-- DONUT CHART -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Work Experience</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" id="work"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart3" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- DONUT CHART -->
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">X-Factors</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" id="xfactor"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="pieChart4" style="height:250px"></canvas>
            </div>
            <!-- /.box-body -->
          </div>
      
      </div>
      </div>
          
    </section>
    <!-- /.content -->

      
    <script>
        function click(){
            $("#edu").click();
            $("#pl").click();
            $("#work").click();
            $("#xfactor").click();
                		
        }
    </script>
                
    </div>
  </body>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
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
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- page script -->
<script>
var score_1 = '<?php echo $score_1; ?>';
score_1 = parseInt(score_1);
var score_2 = '<?php echo $score_2; ?>';
score_2 = parseInt(score_2);
var score_3 = '<?php echo $score_3; ?>';
score_3 = parseInt(score_3);
var score_4 = '<?php echo $score_4; ?>';
score_4 = parseInt(score_4);
var score_5 = '<?php echo $score_5; ?>';
score_5 = parseInt(score_5);
var score_6 = '<?php echo $score_6; ?>';
score_6 = parseInt(score_6);
var score_7 = '<?php echo $score_7; ?>';
score_7 = parseInt(score_7);
var score_8 = '<?php echo $score_8; ?>';
score_8 = parseInt(score_8);
var score_9 = '<?php echo $score_9; ?>';
score_9 = parseInt(score_9);
var score_10 = '<?php echo $score_10; ?>';
score_10 = parseInt(score_10);
var score_11 = '<?php echo $score_11; ?>';
score_11 = parseInt(score_11);
var score_12 = '<?php echo $score_12; ?>';
score_12 = parseInt(score_12);
var score_13 = '<?php echo $score_13; ?>';
score_13 = parseInt(score_13);
var score_14 = '<?php echo $score_14; ?>';
score_14 = parseInt(score_14);
var score_15 = '<?php echo $score_15; ?>';
score_15 = parseInt(score_15);

var edu_green = '<?php echo $edu_green; ?>';
edu_green = parseInt(edu_green);
var edu_yellow = '<?php echo $edu_yellow; ?>';
edu_yellow = parseInt(edu_yellow);
var edu_red = '<?php echo $edu_red; ?>';
edu_red = parseInt(edu_red);

var pl_green = '<?php echo $pl_green; ?>';
pl_green = parseInt(pl_green);
var pl_yellow = '<?php echo $pl_yellow; ?>';
pl_yellow = parseInt(pl_yellow);
var pl_red = '<?php echo $pl_red; ?>';
pl_red = parseInt(pl_red);

var work_green = '<?php echo $work_green; ?>';
work_green = parseInt(work_green);
var work_yellow = '<?php echo $work_yellow; ?>';
work_yellow = parseInt(work_yellow);
var work_red = '<?php echo $work_red; ?>';
work_red = parseInt(work_red);

var xfactor_green = '<?php echo $xfactor_green; ?>';
xfactor_green = parseInt(xfactor_green);
var xfactor_yellow = '<?php echo $xfactor_yellow; ?>';
xfactor_yellow = parseInt(xfactor_yellow);
var xfactor_red = '<?php echo $xfactor_red; ?>';
xfactor_red = parseInt(xfactor_red);

var total_green = '<?php echo $total_green; ?>';
total_green = parseInt(total_green);
var total_yellow = '<?php echo $total_yellow; ?>';
total_yellow = parseInt(total_yellow);
var total_red = '<?php echo $total_red; ?>';
total_red = parseInt(total_red);

  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

	
    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
    // This will get the first returned node in the jQuery collection.
    var areaChart = new Chart(areaChartCanvas);

    var areaChartData = {
      labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"],
      datasets: [
        {
          label: "Resumes",
          fillColor: "rgba(60,141,188,0.9)",
          strokeColor: "rgba(60,141,188,0.8)",
          pointColor: "#3b8bba",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [score_1, score_2, score_3, score_4, score_5, score_6, score_7, score_8, score_9, score_10, score_11, score_12, 
          score_13, score_14, score_15]
        }
      ]
    };

    var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

    //Create the line chart
    areaChart.Line(areaChartData, areaChartOptions);

    //-------------
    //- PIE CHART-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: edu_green,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "green"
      },
      {
        value: edu_yellow,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "yellow"        
      },
      {
        value: edu_red,
        color: "#f56954",
        highlight: "#f56954",
        label: "red"
      },
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

	//-------------
    //- PIE CHART-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart2").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: pl_green,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "green"
      },
      {
        value: pl_yellow,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "yellow"        
      },
      {
        value: pl_red,
        color: "#f56954",
        highlight: "#f56954",
        label: "red"
      },
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);

	//-------------
    //- PIE CHART-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart3").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: work_green,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "green"
      },
      {
        value: work_yellow,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "yellow"        
      },
      {
        value: work_red,
        color: "#f56954",
        highlight: "#f56954",
        label: "red"
      },
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
    
    //-------------
    //- PIE CHART-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChart4").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: xfactor_green,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "green"
      },
      {
        value: xfactor_yellow,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "yellow"        
      },
      {
        value: xfactor_red,
        color: "#f56954",
        highlight: "#f56954",
        label: "red"
      },
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
    
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    //barChartData.datasets[1].fillColor = "#00a65a";
    //barChartData.datasets[1].strokeColor = "#00a65a";
    //barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
  });
  
  	//-------------
    //- PIE CHART-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChartOverall").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: total_green,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "green"
      },
      {
        value: total_yellow,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "yellow"        
      },
      {
        value: total_red,
        color: "#f56954",
        highlight: "#f56954",
        label: "red"
      },
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
    
    //-------------
    //- PIE CHART-
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $("#pieChartTest").get(0).getContext("2d");
    var pieChart = new Chart(pieChartCanvas);
    var PieData = [
      {
        value: total_green,
        color: "#00a65a",
        highlight: "#00a65a",
        label: "green"
      },
      {
        value: total_yellow,
        color: "#f39c12",
        highlight: "#f39c12",
        label: "yellow"        
      },
      {
        value: total_red,
        color: "#f56954",
        highlight: "#f56954",
        label: "red"
      },
    ];
    var pieOptions = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      //String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      //Number - The width of each segment stroke
      segmentStrokeWidth: 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps: 100,
      //String - Animation easing effect
      animationEasing: "easeOutBounce",
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
    };
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions);
</script>
</body>
</html>