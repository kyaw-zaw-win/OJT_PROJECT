
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body >
	<?php
		include("Nav.php");
	?>&nbsp;
		
	<div class="container border border-primary" id="color" style="margin-top:2%;">
  		<h2 class="text-primary">Tsukiakari/User Login</h2>
		<form class="was-validated" >
			<div class="form-group">
      			<label for="uname" class="text-primary">Enter PhoneNumber:</label>
      			<input type="text" class="form-control" id="phno" placeholder="Enter phonenumber" name="phno" required>
      			<div class="valid-feedback">SuccessFul!</div>
      			<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    		<div class="form-group">
      			<label for="pwd" class="text-primary">Password:</label>
      			<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      			<div class="valid-feedback">SuccessFul!</div>
      			<div class="invalid-feedback">Please fill out this field.</div>
    		</div>

    <button type="submit" class="btn btn-primary col-sm">Login</button>
  </form>&nbsp;
  <button type="submit" class="btn btn-danger col-sm" onclick="window.location.href='CheckList.php'" >Cancel</button>
    &nbsp;
    <button type="submit" class="btn btn-success col-sm" onclick="window.location.href='UserRegister.php'">Create Account</button>
    &nbsp;
  </div>
    &nbsp;
<?php
  include("Footer.php");
?>

</body>
</html>