<?php 

	require '../../includes/database/connect.db.php';
	require '../../includes/functions/chat.func.php';

	if(isset($_GET['sender']) && !empty($_GET['sender'])){
		$sender=$_GET['sender'];

		if(isset($_GET['message']) && !empty($_GET['message'])){
			$message=$_GET['message'];

			if(send_msg($sender,$message)){
				echo "Message Sent...";
			}
			else{
				echo "The message was not sent";
			}
		}
		else{
			echo "No message was entered";
		}
	}
	else{
		echo "No Name was entered";
	}


 ?>