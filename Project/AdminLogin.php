<?php
  include("DBconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login Form</title>
  <link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body >
	<?php
		include("Nav.php");
	?>&nbsp;
  <div class="container border border-primary " style="margin-top: 2%;" id="color">
		<h2 class="text-primary">Admin Login</h2>
		<form class="was-validated" method="post">
			<div class="form-group">
      			<label for="uname" class="text-primary"><h5>Enter PhoneNumber:</h5></label>
      			<input type="text" class="form-control" id="txtphone" placeholder="Enter PhoneNumber" name="txtphone" required >
      			<div class="valid-feedback">SuccessFul!</div>
      			<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    		<div class="form-group">
      			<label for="pwd" class="text-primary"><h5>Enter Password:</h5></label>
      			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required >
      			<div class="valid-feedback">SuccessFul!</div>
      			<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    <button type="submit" class="btn btn-primary col-sm" id="btnlogin" name="btnlogin">Login</button>
    
  </form>&nbsp;
  <button type="submit" class="btn btn-danger col-sm" onclick="window.location.href='AdminRegister.php'">Cancel</button>
  &nbsp;
</div>&nbsp;
<?php
  if (isset($_POST["btnlogin"])) 
  {
    $Phone=$_POST["txtphone"];
    $Password=$_POST["pwd"];

    /*if ()
    {
        echo "<script language='javascript'>";
        echo "alert('Something wrong with PhoneNumber');";
        echo "</script>";
    }*/
     if (strpos($Password,'=')or strpos($Password,'*') or strpos($Password,'/'))
     {
        echo "<script language='javascript'>";
        echo "alert('Something wrong with Password');";
        echo "</script>";
    }
    
    /*else if (strpos($Password,'*'))
     {
        echo "<script language='javascript'>";
        echo "alert('Something wrong with Password');";
        echo "</script>";
    }
    else if (strpos($Password,'/')) {
        echo "<script language='javascript'>";
        echo "alert('Something wrong with Password');";
        echo "</script>";
    }*/
    else
    {
    //echo $Phone."/".$Password;
     $db_conn = open_connection();
      if($db_conn)
      {
        $sql1 = "Select * from Admin Where phone= '" . $Phone . "' And password='".$Password."'";
        //Select Customer information from the Customer Table
        $duplicate = mysqli_query($db_conn , $sql1);
        $rows = mysqli_num_rows($duplicate);
        if($rows > 0)
        {
          while ($r = mysqli_fetch_array($duplicate)) 
          {
            $AdminPhone=$r["phone"];
            $AdminPassword=$r["password"];

           if ($AdminPhone==$Phone&&$AdminPassword==$Password)
            {
              echo "<script language='javascript'>";
              echo "window.location.href='AdminRegister.php';";
              echo "</script>";
            }
          }
        }
        /*else if ($AdminPhone!=$Phone)
        {
              echo "<script language='javascript'>";
              echo "alert('Wong Phone Number');";
              echo "</script>";
        }
        else if ($AdminPassword!=$Password)
        {
              echo "<script language='javascript'>";
              echo "alert('Wong Password');";
              echo "</script>";
        }*/
        else
        {
          echo "<script language='javascript'>";
          echo "alert('This Admin Does not Exit');";
          echo "</script>";
        }
      }
    }
  }
?>
<?php
  include("Footer.php");
?>

</body>
</html>