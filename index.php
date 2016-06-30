
<!DOCTYPE html>
<html>
<head>
	<title>Chat application</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>
	<center><h1>Chat Application</h1></center>
<?php 
	require 'includes/core.inc.php'; 
 ?>
<center>
	<div id="feedback"></div><br>
</center>
<div class="container_left">
	<div class="row_upper">
		<center>
			<h1>Welcome to 24chat!</h1>
		</center>
	</div><br><br>
	<div class="row_lower">
		<form action='#' method="post" id="form_input">
	 	<div class="col1">
		 	<center style="margin-top:20px;">
		 		<label>
		 			Enter Name:
		 		</label>
		 	</center>
	 	</div>
		<div class="col2">
	 		<input type="text" name="sender" id="sender"/>
	 	</div>
	</div>
	<div class="row_lower">
	<div class="col1">
		<center style="margin-top:25px;">
	 		<label>
	 			Enter Message:
	 		</label>
	 	</center>
	</div>
	<div class="col2">
	 		<textarea type="text" name="message" id="message" /></textarea>
	</div>
	</div>
	<center><br>
	 	<button type="submit" id="send" name="send">Send Message</button>
	 </center>
 	</form>	

	
</div>
<div class="container_right">
	<div id="messages">

	 </div><!--Messages-->
</div>

	 <!--Javascript-->
	 <script type="text/javascript" src="script/js/jquery-3.0.0.js"></script>
	 <script type="text/javascript" src="script/js/auto_chat.js"></script>
	 <script type="text/javascript" src="script/js/send.js"></script>
</body>
</html>