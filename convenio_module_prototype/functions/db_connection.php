<?php
	$conn = new mysqli('localhost', 'root', 'root', 'convenios');

	if($conn->connect_error){
		echo $error = $conn->connect_error;
	}

?>