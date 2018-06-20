<?php
	$conn = new mysqli('localhost','root','root','conduent');
	if($conn->connect_error){
		echo "Connection Failed.".$conn->connect_error;
	}
?>
