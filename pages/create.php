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
                            <a href="manage.php"><i class="fa fa-star fa-fw"></i>Manage</a>
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
                    <h1 class="page-header">Create Interview</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
 				<table>
 				<td>
 				<div class="col-lg-12">
                    <div class="panel panel-default">
                    
                        <div class="panel-heading">
                            Available Questions
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                
                                        <div class="form-group">
                                        <h3 class="text-primary"> Behavioral <h3>
                                        <table class="table">
                                        <tr align="center">
                                        <td>
										<button class="btn btn-success">Ambition</button>
										</td>
										<td>
										<button class="btn btn-success">Analytical Thinking</button>
										</td>
										<td>
										<button class="btn btn-success">Building Relationships</button>
										</td>
										</tr>
										<tr align="center">
                                        <td>
										<button class="btn btn-success">Communication</button>
										</td>
										<td>
										<button class="btn btn-success">SubCategory</button>
										</td>
										<td>
										<button class="btn btn-success">SubCategory</button>
										</td>
										</tr>
										</table>
                                        <br>
                                    	</div> 
                                    	<!-- /.form-group -->
                                </div>
                        		<!-- /.col-lg-6 -->
                        		</div>
                        		<!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                        
                    </div>
                    <!-- /.panel-panel-default -->
                    
                </div>
                <!-- /.col-lg-6 -->                    

                </div>
                <!-- /.page-wrapper -->
                </td>
                
                 <td>
 				<div class="col-lg-12">
                    <div class="panel panel-default">
                    
                        <div class="panel-heading">
                            Interview
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <h3 class="text-primary"> Selected Questions <h3>
                                        <hr></hr>
                                        <h4> No questions currently selected. Use the menu on the left to select interview questions. </h4>
                                        <br>
                                        <div align="center">
                                    		<!--<input class="btn btn-primary" type="submit" onclick = 'submitForm()'></input>--!>
                                    		<button type="button" value="Go To Form" onclick="sub();" class="btn btn-lg btn-success"">Save + Send</button>
                                    	</div>
                                    	</form>
                                    	<script>
                                    		function sub(){
                                    			window.location.assign("forms.php");
                                    		}
                                    	</script>
                                    	</div> 
                                    	<!-- /.form-group -->
                                </div>
                        		<!-- /.col-lg-6 -->
                        		</div>
                        		<!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                        
                    </div>
                    <!-- /.panel-panel-default -->
                    
                </div>
                <!-- /.col-lg-6 -->                    

                </div>
                <!-- /.page-wrapper -->
                </td>
                </table>
            
            <!--<div class="panel panel-default">
                        <div class="panel-heading">
                            Browse Companies
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <h3 class="text-primary"> Browse Companies <h3>
                                        <h4> Look through a list of companies and learn more about which each has to offer. If you are
                                        interested, you can apply right in EmployEDU! </h4>
                                        <br>
                                        <div align="center">
                                    		<input class="btn btn-primary" type="submit" onclick = 'submitForm()'></input>
                                    		<button type="button" value="Go To Form" onclick="sub2();" class="btn btn-lg btn-success"">Browse</button>
                                    	</div>
                                    	</form>
                                    	<script>
                                    		function sub2(){
                                    			window.location.assign("browse.php");
                                    		}
                                    	</script>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
  
                        <!-- /.panel-body -->
                         <div class="col-lg-6">
            
            
                         
                         
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