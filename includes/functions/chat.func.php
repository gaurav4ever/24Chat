<?php 

	function get_msg(){

		$query="SELECT `Sender`,`Message` FROM `chat`.`chat` ORDER BY `Msg_ID` DESC";
		$retval=mysql_query($query);
		$messages=array();
		while ($message=mysql_fetch_assoc($retval)) {
			$messages[]=array('sender'=>$message['Sender'],
								'message'=>$message['Message']);
		}

		return $messages;

	}
	function send_msg($sender,$message){

		//check if they contain data
		if(!empty($sender) && !empty($message)){

			$sender=mysql_real_escape_string($sender);
			$message=mysql_real_escape_string($message);

			$query="INSERT INTO `chat`.`chat` VALUES (null,'$sender','$message')";

			if($retval=mysql_query($query)){
				return true;
			}
			else{
				echo mysql_error();
				return false;
			}
		}
		else{
			return false;
		}
	}

 ?>

