<?php
	session_start();
	//$_SESSION["admin"] = "none";
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
                                <div class="col-lg-12" style="width: 515px !important;">
                
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

	$query = "DROP table Question";
	$conn->query($query) or die (); 

	$query = "CREATE TABLE Question (Q_id int primary key not null AUTO_INCREMENT, Question text not null, Category text not null, Sub text, Role text, Company text, Keywords text, Time float, Type text, Tips text);";
	$conn->query($query) or die ("Invalid create" . $conn->error); 

	$handle = fopen("QuestionBank.csv", "r");
	if ($handle) {
    	while (($line = fgets($handle)) !== false) {
        	// process the line read.
        	$ls = explode(",", $line);
        	if($ls[0] != 'Question'){
        		$query = "INSERT INTO Question (Question, Category, Sub, Role, Company, Keywords, Time, Type, Tips)
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

			$query="SELECT * FROM Question";
			$conn->query($query) or die ("couldn't connect " . $conn->error);
			$result = $conn->query($query);

			$array = array();
	
			while($row = mysqli_fetch_row($result))
			{
				$stuff = $row[0].",".$row[3].",".$row[1].$row[7];
				array_push($array , $stuff);
			}

		?>
		
	<script type="text/javascript">
    	var created = 0;

		function clicked(some){
			//alert($(some).attr('class') + " " + $(some).attr('id'));
			if($(some).attr('class')  == 'btn btn-success'){
				$(some).removeClass("btn btn-success");
            	$(some).addClass("btn btn-danger");
            	$(some).children().eq(0).removeClass("glyphicon glyphicon-plus");
            	$(some).children().eq(0).addClass("glyphicon glyphicon-minus");
            	var s = document.getElementById('myDiv2');
            	var another = $(some).parent();
            	//alert($(another).attr('class'));
            	another.appendTo(s);
            	//l2.appendTo(s);
            	
            	var b = document.createElement('br');
            	b.appendTo(s);
            }
            else{
            	$(some).removeClass("btn btn-danger");
            	$(some).addClass("btn btn-success");
            	$(some).children().eq(0).removeClass("glyphicon glyphicon-minus");
            	$(some).children().eq(0).addClass("glyphicon glyphicon-plus");
            	var s = document.getElementById('myDiv');
            	var another = $(some).parent();
            	//alert($(another).attr('class'));
            	
            	another.appendTo(s);
            }
			//$(some).toggleClass('btn btn-danger');
		}
		
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
					lb.setAttribute('onClick', 'clicked(this)');
					var id = ar[i].substring(0,1);
					lb.setAttribute('id', ar[i].substring(0,1));
					var nm = "Q" + ar[i].substring(0,1);
					lb.setAttribute('name', nm);
					
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
					
					if(text.length > 40){
					  var q = text.substring(sub+2, 40+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub+2, ar[i].length-1);
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
					lb8.innerHTML = ar[i].substring(sub+2, ar[i].length-1);
					var st = lb8.innerHTML;
					lb8.innerHTML = addNewlines(st);
					
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
					var tris = ar[i].substring(0,1);
					p.name = tris;
					//alert(p.name);
    				
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
			else{

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
					lb.setAttribute('onClick', 'clicked(this)');
					var id = ar[i].substring(0,2);
					lb.setAttribute('id', ar[i].substring(0,2));
					var nm = "Q" + ar[i].substring(0,2);
					lb.setAttribute('name', nm);
					
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
					
					if(text.length > 40){
					  var q = text.substring(sub+3, 40+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub+3, ar[i].length-1);
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
					lb8.innerHTML = ar[i].substring(sub+3, ar[i].length-1);
					var st = lb8.innerHTML;
					lb8.innerHTML = addNewlines(st);
					
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
					var tris = ar[i].substring(0,2);
					p.name = tris;
					//alert(p.name);
    				
					b.appendChild(p);
					
					var b4 = document.createElement("br");
					b.appendChild(b4);
					
					var b5 = document.createElement("br");
					b.appendChild(b5);

					}
				}
			}
        }
        
        function addNewlines(str) {
  var result = '';
  while (str.length > 0) {
    result += str.substring(0, 49) + "<br>";
    str = str.substring(49);
  }
  return result;
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
                                <div class="col-lg-12"  style="width: 500px !important;">
                
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                        <form action="create_calc.php" method="post" id="myForm">
                                        <h3 class="text-primary"> Selected Questions </h3>
                                        <hr></hr>
                                        <br>
                                        <div id="myDiv2"></div>
                                        <br>
										<label id="lbl">Use the menu on the left to select interview questions</label>
										<div class="form-group">
    										<label for="passcode">Interview Keyword</label>
    										<input type="text" class="form-control" id="passcode" placeholder="Windows10" name="passcode">
  										</div>
  										<div class="form-group">
    										<label for="interviewName">Interview Name</label>
    										<input type="text" class="form-control" id="interviewName" placeholder="Interview with Alex Smith" name="nickname">
  										</div>
										<input type="hidden" name="stuffT" id="stuffT" visibility="hidden"></input>
                                        <div align="center">
                                    		<!--<input class="btn btn-primary" type="submit" onclick = 'submitForm()'></input>--!>
                                    		<input type="button" value="Save + Send" onclick="sub();" class="btn btn-lg btn-success""></input>
                                    	</div>
                                    	</form>
                                    	<script>
                                    		function sub(){
                                    		var myNode = document.getElementById('myDiv2');
											var fc = myNode.firstChild;
											var arr = [];
											var arr2 = <?php echo json_encode($array) ?>;
											var stuff = document.getElementById('stuffT');
											
											while(fc) {
    											//arr.push(fc.name);
    											myNode.removeChild( fc );
    											var i = 0;
    											arr.push(fc.name);
    											//alert(fc.name);	
    											fc = myNode.firstChild;
											}
											
											var str = "";
											for(var i = 0; i < arr.length; i++){
												if(i != arr.length - 1){
												str += arr[i] + ",";
												}
												else{
													str += arr[i];
												}
											}
											
											//alert(str);
											stuff.value = str;
											document.getElementById("myForm").submit();
											//window.location.href = "create_calc.php";
											//Questions holds all questions info
											/*var questions = [];
											for(var i = 0; i < arr.length; i++){
    											for(var j = 0; j < arr2.length; j++){
    												if(arr2[j].substring(0,1) == arr[i]){
														//alert(arr[i] + " " + arr2[j]);
														questions.push(arr2[j]);
													}
												}
											}*/
											
										}
											//3rd element and not last char
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