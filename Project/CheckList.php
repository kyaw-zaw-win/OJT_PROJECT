<?php
	session_start();
	if(isset($_SESSION["buy"])){
		$buy = $_SESSION["buy"];
		//echo $buy[0]."".$buy[1];
		echo sizeof($buy);
    }
    else{
          echo '<script language ="javascript">alert("SMA");</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checklist</title>
</head>
<body>
	<a href="Checklist.php"><button type="submit" id="btn" name="btn"><?php
		session_destroy();
	?>Destroy</button></a>
</body>
</html>