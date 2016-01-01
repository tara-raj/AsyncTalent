<!DOCTYPE html>
<html>
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
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body id="bod">
<script src="http://code.jquery.com/jquery-latest.js"></script>
        <select id="mainMenu" onchange="displayAccordingly()">
        	<option value="Pick A Category">Pick A Category</option>
        	<option value="Ambition">Ambition</option>
        	<option value="Analytical Thinking">Analytical Thinking</option>
        	<option value="Building Relationships">Building Relationships</option>
        	<option value="Communication">Communication</option>
        </select>
        <div id="myDiv"></div>

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
	//echo "Dropped";

	$query = "CREATE TABLE Questions (Q_id int primary key not null AUTO_INCREMENT, Question text not null, Category text not null, Sub text, Role text, Company text, Keywords text, Time float, Type text, Tips text);";
	$conn->query($query) or die ("Invalid create" . $conn->error); 
	//echo "Company table initialized";
	//chmod("QuestionBank.csv", 0755);

	$handle = fopen("QuestionBank.csv", "r");
	if ($handle) {
    	while (($line = fgets($handle)) !== false) {
        	// process the line read.
        	$ls = explode(",", $line);
        	if($ls[0] != 'Question'){
        		$query = "INSERT INTO Questions (Question, Category, Sub, Role, Company, Keywords, Time, Type, Tips)
                       VALUES
                       ('$ls[0]', '$ls[1]', '$ls[2]', '$ls[3]', '$ls[4]', '$ls[5]', '$ls[6]', '$ls[7]', '$ls[8]')";
        		//echo $ls[0] . " " . $ls[1] . "<br>";
			$conn->query($query) or die ("invalid user insert" . $conn->error);
			//echo "here";
		}
        /*for($i = 0; $i < sizeof($ls); $i++){
        	echo $line_separated[$i] . "<br>";
        }*/
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
			
			//$ar = array('apple', 'orange', 'banana', 'strawberry');
			//echo json_encode($ar); // ["apple","orange","banana","strawberry"]
			
			//echo json_encode($array);
		?>
		
	<script type="text/javascript">
    	var created = 0;

        function displayAccordingly() {

            /*if (created == 1) {
                removeDrop();
            }*/

            //Call mainMenu the main dropdown menu
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
					lb.className = "btn btn-danger";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-minus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 40){
					  var q = text.substring(sub, 40+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].lenght-1);
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
					
					/*var lb3 = document.createElement("BUTTON");
					lb3.type = "button";
					lb3.className = "btn btn-default";
					lb3.disabled = true;
					
					var it3 = document.createElement("i");
					it3.className = "glyphicon glyphicon-time";*/
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					//lb3.appendChild(it3);
					//p.appendChild(lb3);
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
					lb.className = "btn btn-danger";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-minus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 40){
					  var q = text.substring(sub, 40+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].lenght-1);
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
					
					/*var lb3 = document.createElement("BUTTON");
					lb3.type = "button";
					lb3.className = "btn btn-default";
					lb3.disabled = true;
					
					var it3 = document.createElement("i");
					it3.className = "glyphicon glyphicon-time";*/
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					//lb3.appendChild(it3);
					//p.appendChild(lb3);
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
					lb.className = "btn btn-danger";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-minus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 40){
					  var q = text.substring(sub, 40+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].lenght-1);
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
					
					/*var lb3 = document.createElement("BUTTON");
					lb3.type = "button";
					lb3.className = "btn btn-default";
					lb3.disabled = true;
					
					var it3 = document.createElement("i");
					it3.className = "glyphicon glyphicon-time";*/
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					//lb3.appendChild(it3);
					//p.appendChild(lb3);
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
					lb.className = "btn btn-danger";
					
					var it = document.createElement("i");
					it.className = "glyphicon glyphicon-minus";
					
					lb.appendChild(it);
					p.appendChild(lb);
					
					var lb2 = document.createElement("BUTTON");
					lb2.type = "button";
					lb2.className = "btn btn-default";
					lb2.disabled = true;
					
					var text = ar[i];
					var sub = m.length+1;
					
					if(text.length > 40){
					  var q = text.substring(sub, 40+sub);
					  q += "...";
					  lb2.innerHTML = q;
					}
					else{
						var q = text.substring(sub, ar[i].lenght-1);
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
					
					/*var lb3 = document.createElement("BUTTON");
					lb3.type = "button";
					lb3.className = "btn btn-default";
					lb3.disabled = true;
					
					var it3 = document.createElement("i");
					it3.className = "glyphicon glyphicon-time";*/
					
					var r = document.createElement("BUTTON");
					r.type = "button";
					r.className = "btn btn-primary";
					r.disabled = true;
					r.innerHTML = ar[i].substring(ar[i].length-1, ar[i].length);
					r.innerHTML += "m";
					
					//lb3.appendChild(it3);
					//p.appendChild(lb3);
					p.appendChild(r);
					
    				
					b.appendChild(p);
					
					var b4 = document.createElement("br");
					b.appendChild(b4);
					
					var b5 = document.createElement("br");
					b.appendChild(b5);

					}
				}
			}
            /*var newDropdown = document.createElement('select');
            newDropdown.setAttribute('id',"newDropdownMenu");
            whereToPut.appendChild(newDropdown);*/

            /*if (mainMenu.value == "fruit") { //The person chose fruit

				var h = document.createElement("LABEL");                // Create a <h1> element
				var t = document.createTextNode("Hello World");     // Create a text node
				h.appendChild(t); 
				var b = document.getElementById("bod");
				b.appendChild(h);
				
				/*var d = document.createElement("DIV");
				d.class = "btn-group";
				d.role = "group";
				d.aria-label = "...";*/
				
				/*var bo = document.createElement("BUTTON");
				bo.setAttribute("class", "btn btn-success");
				bo.innerHTML = "Button yo";
				
				b.appendChild(bo);

                //Add an option called "Apple"
                var optionApple=document.createElement("option");
                optionApple.text="Apple";
                newDropdown.add(optionApple,newDropdown.options[null]);

                //Add an option called "Banana"
                var optionBanana=document.createElement("option");
                optionBanana.text="Banana";
                newDropdown.add(optionBanana,newDropdown.options[null]);

            } else if (mainMenu.value == "vegetable") { //The person chose vegetabes

                //Add an option called "Spinach"
                var optionSpinach=document.createElement("option");
                optionSpinach.text="Spinach";
                newDropdown.add(optionSpinach,newDropdown.options[null]);

                //Add an option called "Zucchini"
                var optionZucchini=document.createElement("option");
                optionZucchini.text="Zucchini";
                newDropdown.add(optionZucchini,newDropdown.options[null]);

            }*/

            //created = 1;

        }

        /*function removeDrop() {
            var d = document.getElementById('myDiv');

            var oldmenu = document.getElementById('newDropdownMenu');

            d.removeChild(oldmenu);
        }*/
    </script>
            <!--<?php
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
			
			$query="SELECT * FROM Questions";
			$conn->query($query) or die ("couldn't connect " . $conn->error);
			$result = $conn->query($query);
			
            $subcategories = array();     

			while($row = mysqli_fetch_row($result)){
				if(!(in_array($row[3], $subcategories))){
					array_push($subcategories, $row[3]);
				}
				else{
					continue;
				}
			}
			
			echo "<select id='mainMenu' onchange='displayAccordingly()'>";
			
			for($i = 0; $i < sizeof($subcategories); $i++){
				echo "<option value='$subcategories[$i]'>$subcategories[$i]</option>";
			}
			
			echo "<option value='fruit'>Fruit</option>";
			echo "</select>";
        	?>--!>



    </body>

</html>