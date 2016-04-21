<?php
	session_start();
	/*if($_SESSION['admin'] == "none"){
		header('Location: Login.php');
	}*/
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
                            Screen Resumes
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                						<!--<form method='post' action='screen_calc.php'>--!>
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <h3 class="text-primary">Use this analysis engine to screen resumes. Upload a .txt file containing resumes below to get started!<h3>
                                        <form action="screen_calc.php" method="post" enctype="multipart/form-data">
   											<h4><input type="file" name="file" id="file"/></h4>
											<input class="btn btn-lg btn-success" type="submit" value="Results">
										</form>
                                        
                                        
                                        <!--<textarea class="form-control" rows="8" name="text_input"></textarea>
                                        <br>
                                        <div align="center">
                                    		<input class="btn btn-primary" type="submit" onclick = 'submitForm()'></input>
                                    		<button type="submit" value="Go To Form" onclick="sub();" class="btn btn-lg btn-success"">Results</button>
                                    	</div>
                                    	</form>
                                    	<script>
                                    		function sub(){
                                    			window.location.assign("screen_calc.php");
                                    		}
                                    	</script>--!>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            
                         
                         
                                    <!--<table>
                                    <tr>
                                    	<td align="right"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/2000px-Microsoft_logo.svg.png" height="100" width="100"></img></td>
                                    	<td><h1 vertical-align="bottom">&nbsp Microsoft</h1></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td><h2 align="right">3.7 &nbsp &nbsp</h2></td>
                                    	<td><img src="http://localhost/bootstrap/pages/ratings/4.png" height="35" width="200"></img></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td><h4 align="right">Compensation &nbsp &nbsp</h4></td>
                                    	<td><img src="http://localhost/bootstrap/pages/ratings/4.png" height="25" width="140"></img></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td><h4 align="right">Culture &nbsp &nbsp</h4></td>
                                    	<td><img src="http://localhost/bootstrap/pages/ratings/3.5.png" height="25" width="140"></img></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td><h4 align="right">Work/Life Balance &nbsp &nbsp</h4></td>
                                    	<td><img src="http://localhost/bootstrap/pages/ratings/3.5.png" height="25" width="140"></img></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td><h4 align="right">Job Role &nbsp &nbsp</h4></td>
                                    	<td><img src="http://localhost/bootstrap/pages/ratings/4.png" height="25" width="140"></img></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td><h4 align="right">Growth Opportunities &nbsp &nbsp</h4></td>
                                    	<td><img src="http://localhost/bootstrap/pages/ratings/3.5.png" height="25" width="140"></img></td>
                                    </tr>
                                    <tr>
                                    	<td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                    	<td colspan="2" align="center"><button type="submit" class="btn btn-primary btn-lg">Apply</button></td>
                                    </tr>
                                    </table>--!>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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