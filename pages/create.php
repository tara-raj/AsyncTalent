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
                                        <table>
                                        <tr>
                                        <td>
                                        	<h3 class="text-primary" valign="top"> Behavioral &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h3>
                                        </td>
                                        <td valign="top">
							           		<select id="mainMenu" onchange="displayAccordingly()" class="form-control">
        										<option value="Pick Question Category">Pick Question Category</option>
        										<option value="Ambition">Ambition</option>
        										<option value="Analytical Thinking">Analytical Thinking</option>
        										<option value="Building Relationships">Building Relationships</option>
        										<option value="Communication">Communication</option>
        									</select>
							            </td>	
							            </tr>							            						            
							            </table>
							            
                                        <table class="table">
                                        <tr align="center">
                                                <div id="myDiv"></div>
                                        <label id="dir">Pick a category from the dropdown above to view questions.</label>
                                        

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

	$query = "DROP table Questions";
	$conn->query($query) or die (); 

	$query = "CREATE TABLE Questions (Q_id int primary key not null AUTO_INCREMENT, Question text not null, Category text not null, Sub text, Role text, Company text, Keywords text, Time float, Type text, Tips text);";
	$conn->query($query) or die ("Invalid create" . $conn->error); 

	$handle = fopen("QuestionBank.csv", "r");
	if ($handle) {
    	while (($line = fgets($handle)) !== false) {
        	// process the line read.
        	$ls = explode(",", $line);
        	if($ls[0] != 'Question'){
        		$query = "INSERT INTO Questions (Question, Category, Sub, Role, Company, Keywords, Time, Type, Tips)
                       VALUES
                       ('$ls[0]', '$ls[1]', '$ls[2]', '$ls[3]', '$ls[4]', '$ls[5]', '$ls[6]', '$ls[7]', '$ls[8]')";
			$conn->query($query) or die ("invalid user insert" . $conn->error);
		}
    }

    fclose($handle);
    
	} else {
    	// error opening the file.
	} 
?>
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

			$query="SELECT * FROM Questions";
			$conn->query($query) or die ("couldn't connect " . $conn->error);
			$result = $conn->query($query);

			$array = array();
	
			while($row = mysqli_fetch_row($result))
			{
				$stuff = $row[3].",".$row[1].$row[7];
				array_push($array , $stuff);
			}

		?>
		
	<script type="text/javascript">
    	var created = 0;

        function displayAccordingly() {

            //Call mainMenu the main dropdown menu
            document.getElementById('dir').innerHTML = "";
            var mainMenu = document.getElementById('mainMenu');

            //Create the new dropdown menu
            var whereToPut = document.getElementById('myDiv');
            
            var ar = <?php echo json_encode($array) ?>;
			var m = document.getElementById('mainMenu').value;

			var b = document.getElementById('myDiv');
			var h = document.createElement("LABEL");
			var t = document.createTextNode("Hello World");
			h.appendChild(t);
			
			if(m == "Ambition"){

				var myNode = document.getElementById('myDiv');
				var fc = myNode.firstChild;

				while( fc ) {
    				myNode.removeChild( fc );
    				fc = myNode.firstChild;
				}

				var l2 = document.createElement("br");
					b.appendChild(l2);

				for(var i = 0; i < ar.length; i++){
					if(ar[i].includes(m)){

					var p = document.createElement("DIV");
					p.className = "btn-group";
					p.role = "group";
					
					var lb = document.createElement("BUTTON");
					lb.type = "button";
					lb.className = "btn btn-success";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-plus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 49){
					  var q = text.substring(sub, 49+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].length-1);
						lb2.innerHTML = q;
					}
					
					p.appendChild(lb2);
					
					var lb4 = document.createElement("button");
					lb4.className = "btn btn-default dropdown-toggle";
					lb4.setAttribute("data-toggle","dropdown");
					
					var lb5 = document.createElement("span");
					lb5.className = "caret";
					
					var lb6 = document.createElement("ul");
					lb6.className = "dropdown-menu";
					
					var lb7 = document.createElement("li");
					
					var lb8 = document.createElement("a");
					lb8.innerHTML = ar[i].substring(sub, ar[i].length-1);
					
					lb7.appendChild(lb8);
					lb6.appendChild(lb7);
					
					lb4.appendChild(lb5);
					p.appendChild(lb4);
					p.appendChild(lb6);
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					p.appendChild(r);
					
    				
					b.appendChild(p);
					
					var b4 = document.createElement("br");
					b.appendChild(b4);
					
					var b5 = document.createElement("br");
					b.appendChild(b5);

					}
				}
			}
			else if(m == "Analytical Thinking"){

				document.getElementById('dir').innerHTML = "";
				var myNode = document.getElementById('myDiv');
				var fc = myNode.firstChild;

				while( fc ) {
    				myNode.removeChild( fc );
    				fc = myNode.firstChild;
				}

				var l2 = document.createElement("br");
					b.appendChild(l2);

				for(var i = 0; i < ar.length; i++){
					if(ar[i].includes(m)){

					var p = document.createElement("DIV");
					p.className = "btn-group";
					p.role = "group";
					
					var lb = document.createElement("BUTTON");
					lb.type = "button";
					lb.className = "btn btn-success";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-plus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 49){
					  var q = text.substring(sub, 49+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].length-1);
						lb2.innerHTML = q;
					}
					
					p.appendChild(lb2);
					
					var lb4 = document.createElement("button");
					lb4.className = "btn btn-default dropdown-toggle";
					lb4.setAttribute("data-toggle","dropdown");
					
					var lb5 = document.createElement("span");
					lb5.className = "caret";
					
					var lb6 = document.createElement("ul");
					lb6.className = "dropdown-menu";
					
					var lb7 = document.createElement("li");
					
					var lb8 = document.createElement("a");
					lb8.innerHTML = ar[i].substring(sub, ar[i].length-1);
					
					lb7.appendChild(lb8);
					lb6.appendChild(lb7);
					
					lb4.appendChild(lb5);
					p.appendChild(lb4);
					p.appendChild(lb6);
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					p.appendChild(r);
					
    				
					b.appendChild(p);
					
					var b4 = document.createElement("br");
					b.appendChild(b4);
					
					var b5 = document.createElement("br");
					b.appendChild(b5);

					}
				}
			}
			else if(m == "Building Relationships"){

				document.getElementById('dir').innerHTML = "";
				var myNode = document.getElementById('myDiv');
				var fc = myNode.firstChild;

				while( fc ) {
    				myNode.removeChild( fc );
    				fc = myNode.firstChild;
				}

				var l2 = document.createElement("br");
					b.appendChild(l2);

				for(var i = 0; i < ar.length; i++){
					if(ar[i].includes(m)){

					var p = document.createElement("DIV");
					p.className = "btn-group";
					p.role = "group";
					
					var lb = document.createElement("BUTTON");
					lb.type = "button";
					lb.className = "btn btn-success";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-plus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 49){
					  var q = text.substring(sub, 49+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].length-1);
						lb2.innerHTML = q;
					}
					
					p.appendChild(lb2);
					
					var lb4 = document.createElement("button");
					lb4.className = "btn btn-default dropdown-toggle";
					lb4.setAttribute("data-toggle","dropdown");
					
					var lb5 = document.createElement("span");
					lb5.className = "caret";
					
					var lb6 = document.createElement("ul");
					lb6.className = "dropdown-menu";
					
					var lb7 = document.createElement("li");
					
					var lb8 = document.createElement("a");
					lb8.innerHTML = ar[i].substring(sub, ar[i].length-1);
					
					lb7.appendChild(lb8);
					lb6.appendChild(lb7);
					
					lb4.appendChild(lb5);
					p.appendChild(lb4);
					p.appendChild(lb6);
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					p.appendChild(r);
					
    				
					b.appendChild(p);
					
					var b4 = document.createElement("br");
					b.appendChild(b4);
					
					var b5 = document.createElement("br");
					b.appendChild(b5);

					}
				}
			}
			else if(m == "Communication"){

				document.getElementById('dir').innerHTML = "";
				var myNode = document.getElementById('myDiv');
				var fc = myNode.firstChild;

				while( fc ) {
    				myNode.removeChild( fc );
    				fc = myNode.firstChild;
				}

				var l2 = document.createElement("br");
					b.appendChild(l2);

				for(var i = 0; i < ar.length; i++){
					if(ar[i].includes(m)){

					var p = document.createElement("DIV");
					p.className = "btn-group";
					p.role = "group";
					
					var lb = document.createElement("BUTTON");
					lb.type = "button";
					lb.className = "btn btn-success";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-plus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 49){
					  var q = text.substring(sub, 49+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].length-1);
						lb2.innerHTML = q;
					}
					
					p.appendChild(lb2);
					
					var lb4 = document.createElement("button");
					lb4.className = "btn btn-default dropdown-toggle";
					lb4.setAttribute("data-toggle","dropdown");
					
					var lb5 = document.createElement("span");
					lb5.className = "caret";
					
					var lb6 = document.createElement("ul");
					lb6.className = "dropdown-menu";
					
					var lb7 = document.createElement("li");
					
					var lb8 = document.createElement("a");
					lb8.innerHTML = ar[i].substring(sub, ar[i].length-1);
					
					lb7.appendChild(lb8);
					lb6.appendChild(lb7);
					
					lb4.appendChild(lb5);
					p.appendChild(lb4);
					p.appendChild(lb6);
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					p.appendChild(r);
					
    				
					b.appendChild(p);
					
					var b4 = document.createElement("br");
					b.appendChild(b4);
					
					var b5 = document.createElement("br");
					b.appendChild(b5);

					}
				}
			}
			else if(m == "Pick Question Category"){

				var myNode = document.getElementById('myDiv');
				var fc = myNode.firstChild;

				while( fc ) {
    				myNode.removeChild( fc );
    				fc = myNode.firstChild;
				}
				
				var lb = document.createElement("label");
				lb.innerHTML = "Pick a category from the dropdown above to view questions.";
				
				myNode.appendChild(lb);

			}
        }
    </script>
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
                                        <div class="btn-group" role="group" aria-label="...">
  											<button type="button" class="btn btn-success"><i class="fa fa-plus fa-fw"></i></button>
  											<button type="button" class="btn btn-default" disabled>Question Preview</button>
  											<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-time"></i></button>
										</div>
										<br>
										<br>
                                        <div class="btn-group" role="group" aria-label="...">
  											<button type="button" class="btn btn-danger"><i class="fa fa-minus fa-fw"></i></button>
  											<button type="button" class="btn btn-default" disabled>Question Preview</button>
  											<button type="button" class="btn btn-default"><i class="glyphicon glyphicon-time"></i></button>
										</div>
										<?php
											/*$t = "Tell us about a time when you had to go above and...";
											echo strlen($t);
											echo substr($t, 0,49);*/
										?>
                                        <h4>Use the menu on the left to select interview questions</h4>
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