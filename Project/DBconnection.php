<?php
	
	function open_connection()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "";
		$db = "Project";

		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die("Can not connect" . mysqli_error());

		return $conn;
	}

	function close_connection($conn1){
		$conn1->close();
	}
?>