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

    <title>EmployED - Find Companies</title>

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
                    <h1 class="page-header">Company Finder</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel panel-default">
                        <div class="panel-heading">
                            My Company Matches
                        </div>
                        <div class="panel-body">
                            <div class="row">

                        <!-- /.panel-body -->
                         <div class="col-lg-12" align="center">
 
 			<?php
 			//GET COMPANY INFO
			$servername = "localhost";
			$username = "Assign2";
			$password = "password";
			$dbname = "Assign2";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			} 
			
			//$query="SELECT * FROM Companies";
			//$conn->query($query) or die ("couldn't connect " . $conn->error);
			//$result = $conn->query($query);
			
                         
			$query="SELECT * FROM Companies ORDER BY distance";
			$conn->query($query) or die ("couldn't connect " . $conn->error);
			$result = $conn->query($query);

			while($row = mysqli_fetch_row($result))
			{
				echo "<table>";
				echo "<tr>";
				echo "<td align='right'><img src='$row[2]' height='100' width='110'></img></td>";
				echo "<td><h1 vertical-align='bottom'>&nbsp $row[1]</h1></td>";
				$percent = 100-(($row[10]/25)*100);
				echo "<td><h3>$percent% Fit</h3></td>";
				echo "</tr>";
				echo " <tr>";
				echo "<td colspan='2' align='center'><h5> $row[3] </h5></td>";
				echo "</tr>";
				echo "<tr>";
				$row4 = $row[4];
				if($row4 == 0 || $row4 == 0.5 || $row4 == 1.0 || $row4 == 1.5 || $row4 == 2.0 || $row4 == 2.5 || $row4 == 3 || $row4 == 3.5 || $row4 == 4.0 
				|| $row4 == 4 || $row4 == 4.5 || $row4 == 5.0){
					$row4 = $row[4];
				}
				else{
					$row4 = round($row4, 0, PHP_ROUND_HALF_UP);
				}
				echo "<td><h2 align='right'> $row[5] &nbsp &nbsp</h2></td>";
				echo "<td><img src='ratings/$row4.png' height='35' width='200'></img></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo " </tr>";
				echo "<tr>";
				echo "<td><h4 align='right'>Compensation &nbsp &nbsp</h4></td>";
				$row5 = $row[5];
				if($row5 == 0 || $row5 == 0.5 || $row5 == 1.0 || $row5 == 1.5 || $row5 == 2.0 || $row5 == 2.5 || $row5 == 3 || $row5 == 3.5 || $row5 == 4.0 
				|| $row5 == 4 || $row5 == 4.5 || $row5 == 5.0){
					$row5 = $row[5];
				}
				else{
					$row5 = round($row5, 0, PHP_ROUND_HALF_UP);
				}
				echo "<td><img src='ratings/$row5.png'  height='25' width='140'></img></td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>&nbsp;</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td><h4 align='right'>Culture &nbsp &nbsp</h4></td>";
				$row6 = $row[6];
				if($row6 == 0 || $row6 == 0.5 || $row6 == 1.0 || $row6 == 1.5 || $row6 == 2.0 || $row6 == 2.5 || $row6 == 3 || $row6 == 3.5 || $row6 == 4.0 
				|| $row6 == 4 || $row6 == 4.5 || $row6 == 5.0){
					$row6 = $row[6];
				}
				else{
					$row6 = round($row6, 0, PHP_ROUND_HALF_UP);
				}
				echo "<td><img src='ratings/$row6.png' height='25' width='140'></img></td>";
				echo "</tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>";
				echo "<td><h4 align='right'>Work/Life Balance &nbsp &nbsp</h4></td>";
				$row7 = $row[7];
				if($row7 == 0 || $row7 == 0.5 || $row7 == 1.0 || $row7 == 1.5 || $row7 == 2.0 || $row7 == 2.5 || $row7 == 3 || $row7 == 3.5 || $row7 == 4.0 
				|| $row7 == 4 || $row7 == 4.5 || $row7 == 5.0){
					$row7 = $row[7];
				}
				else{
					$row7 = round($row7, 0, PHP_ROUND_HALF_UP);
				}
				echo "<td><img src='ratings/$row7.png' height='25' width='140'></img></td>";
				echo "</tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>";
                echo "<td><h4 align='right'>Job Role &nbsp &nbsp</h4></td>";
				$row8 = $row[8];
				if($row8 == 0 || $row8 == 0.5 || $row8 == 1.0 || $row8 == 1.5 || $row8 == 2.0 || $row8 == 2.5 || $row8 == 3 || $row8 == 3.5 
				|| $row8 == 4.0 || $row8 == 4 || $row8 == 4.5 || $row8 == 5.0){
					$row8 = $row[8];
				}
				else{
					$row8 = round($row8, 0, PHP_ROUND_HALF_UP);
				}
				echo "<td><img src='ratings/$row8.png' height='25' width='140'></img></td>";
				echo "</tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>";
                echo "<td><h4 align='right'>Growth Opportunities &nbsp &nbsp</h4></td>";
                $row9 = $row[8];
				if($row9 == 0 || $row9 == 0.5 || $row9 == 1.0 || $row9 == 1.5 || $row9 == 2.0 || $row9 == 2.5 || $row9 == 3 || $row9 == 3.5 
				|| $row9 == 4.0 || $row9 == 4 || $row9 == 4.5 || $row9 == 5.0){
					$row9 = $row[9];
				}
				else{
					$row9 = round($row9, 0, PHP_ROUND_HALF_UP);
				}
				echo "<td><img src='ratings/$row8.png' height='25' width='140'></img></td>";
				echo "<hr width='200%' size='10'>";
			}

 			?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
  
                                    		<!--<input class="btn btn-primary" type="submit" onclick = 'submitForm()'></input>--!>
    
                    </div>
                    <!-- /.panel -->
            
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