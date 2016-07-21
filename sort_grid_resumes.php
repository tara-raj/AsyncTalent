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
            <li><a href="sort_list_resumes.php"><i class="fa fa-th-list"></i>List</a></li>
            <li class="active"><a href="grid_resumes.php"><i class="fa fa-th-large"></i>Grid</a></li>
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
        Resume Grid
      </h1>
      <ol class="breadcrumb">
        <li><a href="upload.php"><i class="fa fa-upload"></i>Upload</a></li>
        <li class="active">Grid</li>
      </ol>
    </section>
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
  
$query="SELECT * FROM Resumes WHERE Recruiter_id = '$recruiter'";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

 		$selected_1 = '';
 		$selected_2 = '';
 		$selected_3 = '';
 		$selected_4 = '';
 		
 		$z_value = 0;
		$z_names = '';
 		
 		if(isset($_POST["edu"]) && isset($_POST["langs"]) && isset($_POST["work"]) && isset($_POST["xfactor"])){
  			$selected_1 = rtrim($_POST["edu"]);
  			$selected_2 = rtrim($_POST["langs"]);
  			$selected_3 = rtrim($_POST["work"]);
  			$selected_4 = rtrim($_POST["xfactor"]);
  			
  			//echo $selected_1 . " " . $selected_2 . " " . $selected_3 . " " . $selected_4;
  			
  			while($row = mysqli_fetch_row($result))
			{
				$name = ucwords($row[2]);
				
				//GPA RANKINGS
				if($row[3] >= 3.6){
					$edu = 'Green';
				}
				elseif($row[3] >= 3.4 && $row[3] <= 3.6){
					$edu = 'Yellow';
				}
				else{
					$edu = 'Red';
				}

				//PROGRAMMING LANGUAGE RANKINGS
				if($row[4] > 6){
					$langs = 'Green';
				}
				elseif($row[4] > 2 && $row[4] < 6){
					$langs = 'Yellow';
				}
				else{
					$langs = 'Red';
				}

				//COMPANY RANKINGS
				if($row[5] > 0){
					$work = 'Green';
				}
				else{
					$work = 'Red';
				}

				//XFACTOR RANKINGS
				if($row[6] > 1){
					$xfactor = 'Green';
				}
				elseif($row[6] > 0){
					$xfactor = 'Yellow';
				}
				else{
					$xfactor = 'Red';
				}
			
			if(strcmp($edu, $selected_1) == 0 &&  strcmp($langs, $selected_2) == 0 && strcmp($work, $selected_3) == 0 && strcmp($xfactor, $selected_4) == 0){	
				$z_value += 1;
				$z_names .= $name . ',';
			}
  		}
  		
  		if(strcmp('Green', $selected_1) == 0){
  			$icon_1 = "btn btn-success";
  		}
  		elseif(strcmp('Yellow', $selected_1) == 0){
  			$icon_1 = "btn btn-warning";
  		}
  		else{
  			$icon_1 = "btn btn-danger";
  		}
  		
  		if(strcmp('Green', $selected_2) == 0){
  			$icon_2 = "btn btn-success";
  		}
  		elseif(strcmp('Yellow', $selected_2) == 0){
  			$icon_2 = "btn btn-warning";
  		}
  		else{
  			$icon_2 = "btn btn-danger";
  		}
  		
  		if(strcmp('Green', $selected_3) == 0){
  			$icon_3 = "btn btn-success";
  		}
  		elseif(strcmp('Yellow', $selected_3) == 0){
  			$icon_3 = "btn btn-warning";
  		}
  		else{
  			$icon_3 = "btn btn-danger";
  		}
  		
  		if(strcmp('Green', $selected_4) == 0){
  			$icon_4 = "btn btn-success";
  		}
  		elseif(strcmp('Yellow', $selected_4) == 0){
  			$icon_4 = "btn btn-warning";
  		}
  		else{
  			$icon_4 = "btn btn-danger";
  		}
  	}
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

$recruiter = $_SESSION['user_id'];
  
$query="SELECT * FROM Resumes WHERE Recruiter_id = '$recruiter'";
$conn->query($query) or die ("couldn't connect " . $conn->error);
$result = $conn->query($query);

if (false === $result) {
    echo mysql_error();
}

$a_value = 0;
$a_names = '';
$b_value = 0;
$b_names = '';
$c_value = 0;
$c_names = '';
$d_value = 0;
$d_names = '';
$e_value = 0;
$e_names = '';
$f_value = 0;
$f_names = '';
$g_value = 0;
$g_names = '';
$h_value = 0;
$h_names = '';
$i_value = 0;
$i_names = '';
$j_value = 0;
$j_names = '';
$k_value = 0;
$k_names = '';
$l_value = 0;
$l_names = '';

while($row = mysqli_fetch_row($result))
{
	$green = $row[8];
	$yellow = $row[9];
	$red = $row[10];
	$name = ucwords($row[2]);
	
	if($green == 4 && $yellow == 0 && $red == 0){
		$a_value += 1;
		$a_names .= $name . ',';
	}
	if($green == 3 && $yellow == 1 && $red == 0){
		$b_value += 1;
		$b_names .= $name . ',';
	}
	if($green == 2 && $yellow == 2 && $red == 0){
		$c_value += 1;
		$c_names .= $name . ',';
	}
	if($green == 1 && $yellow == 3 && $red == 0){
		$d_value += 1;
		$d_names .= $name . ',';
	}
	if($green == 0 && $yellow == 4 && $red == 0){
		$e_value += 1;
		$e_names .= $name . ',';
	}
	if($green == 3 && $yellow == 0 && $red == 1){
		$f_value += 1;
		$f_names .= $name . ',';
	}
	if($green == 2 && $yellow == 0 && $red == 2){
		$g_value += 1;
		$g_names .= $name . ',';
	}
	if($green == 1 && $yellow == 0 && $red == 3){
		$h_value += 1;
		$h_names .= $name . ',';
	}
	if($green == 0 && $yellow == 3 && $red == 1){
		$i_value += 1;
		$i_names .= $name . ',';
	}
	if($green == 0 && $yellow == 2 && $red == 2){
		$j_value += 1;
		$j_names .= $name . ',';
	}
	if($green == 0 && $yellow == 1 && $red == 3){
		$k_value += 1;
		$k_names .= $name . ',';
	}
	if($green == 0 && $yellow == 0 && $red == 4){
		$l_value += 1;
		$l_names .= $name . ',';
	}
}
?>

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
            <form action="sort_grid_resumes.php" method="post">
            <div class="box-body">
              <!-- /.form-group -->
              <div class="form-group">
              <table>
              <tr>
              <td>
                <label>Education</label>
                <select class="form-control select2" style="width: 100%;" id="edu" name="edu">
                  <option selected="selected">Green</option>
                  <option>Yellow</option>
                  <option>Red</option>
                </select>
              </td>
              <td>
              &nbsp &nbsp
              </td>
              <td>
                <label>Programming Langs</label>
                <select class="form-control select2" style="width: 100%;" id="langs" name="langs">
                  <option selected="selected">Green</option>
                  <option>Yellow</option>
                  <option>Red</option>
                </select>
              </td>
              <td>
              &nbsp &nbsp
              </td>
              <td>
                <label>Work Exp</label>
                <select class="form-control select2" style="width: 100%;" id="work" name="work">
                  <option selected="selected">Green</option>
                  <option>Yellow</option>
                  <option>Red</option>
                </select>
              </td>
               <td>
              &nbsp &nbsp
              </td>
              <td>
                <label>X-Factors</label>
                <select class="form-control select2" style="width: 100%;" id="xfactor" name="xfactor">
                  <option selected="selected">Green</option>
                  <option>Yellow</option>
                  <option>Red</option>
                </select>
              </td>
              </tr>
              </table>
              </div>
              <!-- /.form-group -->
              <div class="box-body">
              	<button class="btn btn-sm btn-primary" type="submit">Sort</button>
              </div>
              </form>
              <form action="filter_grid_resumes.php" method="post">
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
            <div class="box-body">
              <button class="btn btn-sm btn-primary" type="submit">Filter</button>
            </div>
            <!-- /.box-body -->
            </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!--/.row -->
  
   <div class="row">
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $z_value ?></span>
              <button type='button' class='<?php echo $icon_1 ?>'>
              	<span class='glyphicon glyphicon-education'></span>
              </button>
              <button type='button' class='<?php echo $icon_2 ?>'>
              	<span class='glyphicon glyphicon-random'></span>
              </button>
              <button type='button' class='<?php echo $icon_3 ?>'>
              	<span class='glyphicon glyphicon-briefcase'></span>
              </button>
              <button type='button' class='<?php echo $icon_4 ?>'>
              	<span class='glyphicon glyphicon-fire'></span>
              </button>
			  </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="z">
              <?php 
              	$pieces = explode(",", $z_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>         
 <div class="row">
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $a_value ?></span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
			  </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="a">
              <?php 
              	$pieces = explode(",", $a_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
			  <span data-toggle="tooltip" class="badge bg-default"><?php echo $b_value ?></span>
			  <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              </h3>
              
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $b_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $c_value ?></span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $c_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $d_value ?></span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $d_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 <div class="row">
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $e_value ?></span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $e_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $f_value ?></span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $f_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $g_value ?></span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $g_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $h_value ?></span>
              <span data-toggle="tooltip" class="badge bg-green">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $h_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
 <div class="row">
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $i_value ?></span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $i_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $j_value ?></span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<?php 
              		$pieces = explode(",", $j_names);
              		for ($i = 0; $i < count($pieces); $i++) {
    					echo $pieces[$i];
    					echo "<br>";
					} 
              	?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $k_value ?></span>
              <span data-toggle="tooltip" class="badge bg-yellow">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $k_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3">
          <div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">
              <span data-toggle="tooltip" class="badge bg-default"><?php echo $l_value ?></span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              <span data-toggle="tooltip" class="badge bg-red">&nbsp</span>
              </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php 
              	$pieces = explode(",", $l_names);
              	for ($i = 0; $i < count($pieces); $i++) {
    				echo $pieces[$i];
    				echo "<br>";
				} 
              ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
       </div>
      <!-- /.row -->

      <div class="box-footer">
        <button class="btn btn-lg btn-primary" onclick="location.href = 'upload.php';">Upload More Resumes</button>
      </div>
      
    </section>
    <!-- /.content -->
</div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0.0
    </div>
    <strong>Copyright &copy; 2016 AsyncTalent.</strong> All rights
    reserved.
  </footer>
</div>

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
</body>
</html>