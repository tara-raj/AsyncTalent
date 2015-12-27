<!DOCTYPE html>

<html>
<head>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="../js/star-rating.js" type="text/javascript"></script>

    <title>MusicEDU</title>

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
	<title>Live input record and playback</title>
  <style type='text/css'>
    ul { list-style: none; }
    #recordingslist audio { display: block; margin-bottom: 10px; }
  </style>
</head>
<body>

  <h1>Record your song</h1>

  <button onclick="startRecording(this);" id="record">record</button>
  <button onclick="stopRecording(this);" id="stop">stop</button>
  
  <h2>Your Songs</h2>
  <ul id="recordingslist" name="recordingslist"></ul>
  
  <h2></h2>
  <pre id="log" name="log"></pre>

  <script>
  
  $("#record").click();
  function __log(e, data) {
    log.innerHTML += "\n" + e + " " + (data || '');
  }

  var audio_context;
  var recorder;

  function startUserMedia(stream) {
    var input = audio_context.createMediaStreamSource(stream);
    //__log('Media stream created.');

    // Uncomment if you want the audio to feedback directly
    input.connect(audio_context.destination);
    //__log('Input connected to audio context destination.');
    
    recorder = new Recorder(input);
    //__log('Recorder initialised.');
  }

  function startRecording(button) {
    recorder && recorder.record();
    button.disabled = true;
    button.nextElementSibling.disabled = false;
    //__log('Recording...');
  }

  //CHANGED BASED ON TIME FOR QUESTION
  setInterval(function(){ 
   $("#stop").click();
	},8000);
	
	
	
  function stopRecording(button) {
    recorder && recorder.stop();
    button.disabled = true;
    button.previousElementSibling.disabled = false;
    //__log('Stopped recording.');
    
    // create WAV download link using audio data blob
    createDownloadLink();
    
    recorder.clear();
  }

  function createDownloadLink() {
    recorder && recorder.exportWAV(function(blob) {
      //alert("here");
      var url = URL.createObjectURL(blob);
      /*var li = document.createElement('li');
      var au = document.createElement('audio');
      var hf = document.createElement('a');*/
	  
	  var li = document.getElementById('lid');
	  var au = document.getElementById('aud');
	  var hf = document.getElementById('ade');
	  var lb = document.getElementById('r_id');
	  
	  
      au.controls = true;
      au.src = url;
      hf.href = url;
      hf.download = new Date().toISOString() + '.wav';
      hf.innerHTML = hf.download;
      
      document.getElementById('r_id').value = hf.innerHTML + "";
      //li.appendChild(au);
      //li.appendChild(hf);
      //recordingslist.appendChild(li);
    });
  }

  window.onload = function init() {
    try {
      // webkit shim
      window.AudioContext = window.AudioContext || window.webkitAudioContext;
      navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia;
      window.URL = window.URL || window.webkitURL;
      
      audio_context = new AudioContext;
      //__log('Audio context set up.');
      //__log('navigator.getUserMedia ' + (navigator.getUserMedia ? 'available.' : 'not present!'));
    } catch (e) {
      alert('No web audio support in this browser!');
    }
    
    navigator.getUserMedia({audio: true}, startUserMedia, function(e) {
      //__log('No live audio input: ' + e);
    });
  };
  
  setInterval(function(){ 
   document.getElementById('ade').click();
	},12000);
  
  
  </script>
  
  <form align="center" action="questions_calc.php" method="post" name="formz">
 
  <label id="lid" name="lid"><a id="ade" name="ade"><audio id="aud" name="aud"></audio></a></label>
  <input type="hidden" name="r_id" id="r_id"/>
  <br>

  <script src="recorder.js"></script>
  <input class="btn btn-lg btn-success" type="submit" value="Submit" id="sub"> </form>
</body>
</html>
