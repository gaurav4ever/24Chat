<?php 

	require '../../includes/database/connect.db.php';
	require '../../includes/functions/chat.func.php';

	$messages=get_msg();
			foreach ($messages as $message) {
				?>	
					<p style="background-color:#C6F1A9;">
					<label style="padding-left:5px;font-family: 'Comfortaa', cursive;color:#27BC4B;">
						<strong ><?php echo $message['sender'] ?> sent</strong>
					</label>
					
					<span style="padding-left:5px;padding-top:5px;font-size:15px;font-family: 'Comfortaa', cursive;"><br><?php echo $message['message'] ?><br><br>
					</span>
					</p>
		 		<?php
		 	}

 ?>