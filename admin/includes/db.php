<?php 
	
	$db = new mysqli("remotemysql.com", "fcnd9p4eZg", "ZSx6EF1zKU", "fcnd9p4eZg");
	
	if($db->connect_errno) {
		
		echo "PLEASE BEAR WITH US AS WE ARE CURRENTLY WORKING ON OUR SITE!!!! PLEASE COME BACK LATER";
		
	}
	
?>