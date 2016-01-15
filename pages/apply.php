<?php
	session_start();
	if($_SESSION['admin'] == "none"){
		header('Location: Login.php');
	}
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
                    <h1 class="page-header">Apply</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<h3 class="text-primary"> Apply to Jobs</h3>
			<h4> You may use this job board to find jobs that are interesting to you. If available, we have listed recruiter contact information for your convenience.
			Refer to the application crash course page for best practices for contacting recruiters. </h4>
			<br>
			<h1 class="text-primary" align="center">Coming Soon!</h1>
			<!--<table>
			<tr>
				<td>
                     <div class="panel panel-default">
  					<div class="panel-heading">Panel heading without title</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
				<td>
					&nbsp &nbsp &nbsp
				</td>
				<td>
					<div class="panel panel-default">
  					<div class="panel-heading">
    					<h3 class="panel-title">Panel title</h3>
  					</div>
  					<div class="panel-body">
    					Panel content
  					</div>
					</div>
				</td>
			</tr>
			</table>--!>
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