
<?php
	$con=mysqli_connect("localhost","root","","project")or die("Can't Connect");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL:".mysqli_connect_error();
	}
	else
	{
		echo "Success";
	}
?>