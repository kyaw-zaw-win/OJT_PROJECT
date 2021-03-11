<?php
  include("DBconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Sing in</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<?php
		include("Nav.php");
	?>&nbsp;
	
	<div class="container border border-primary" id="color" style="margin-top: 2%;" >
  <h2 class="text-primary">User Sign in</h2>
  <form method="post" class="needs-validation"  novalidate>
     <div class="form-group">
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="txtphno" placeholder="Enter phonenumber" name="txtphno" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="password" class="form-control" id="txtpwd" placeholder="Enter password" name="txtpwd" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="password" class="form-control" id="configpwd" placeholder="Enter confirmPassword" name="configpwd" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="txtemail" placeholder="Enter email address" name="txtemail" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div  class="form-group">
    	<select class="form-control" id="gender" name="gender">
    		<option>male</option>
    		<option>female</option>
    	</select>
    </div>

    <div  class="form-group">
    	<select class="form-control" id="city" name="city">
    		<option value="Myanmar">Myanmar</option>
    		<option value="Japan">Japan</option>
			<option value="China">China</option>
			<option value="Lao">Lao</option>
			<option value="Indian">Indian</option>
			<option value="Thailand">Thailand</option>
    	</select>
    </div>




    <button type="submit" class="btn btn-primary col-sm" id="btnadd" name="btnadd">Create Account</button>
  </form>
  &nbsp;
     <button type="submit" class="btn btn-danger col-sm" onclick="window.location.href='UserLogin.php'">Cancel</button>
     &nbsp;
</div>
&nbsp;
<?php
    if (isset($_POST["btnadd"])) 
    {
      $name = $_POST["uname"];
      $phone=$_POST["txtphno"];
      $password=$_POST["txtpwd"];
      $configpassword=$_POST["configpwd"];
      $email=$_POST["txtemail"];
      $Gender=$_POST["gender"];
      $country=$_POST["city"];

     // echo $name."_".$phone."_".$password."_".$configpassword."_".$email."_".$Gender."_".$country;
      $db_conn = open_connection();

      if($db_conn)
      {
        $sql1 = "Select * from User Where phone= '" . $phone . "' And email='".$email."'";
        //Select Customer information from the Customer Table
        $dupli = mysqli_query($db_conn , $sql1);
        $rows = mysqli_num_rows($dupli);
        if($rows > 0)
        {
          echo "<script language='javascript'>";
          echo "alert('This User is already exists');";
          echo "window.location.href='UserRegister.php';";
          echo "</script>";
        }
        else
        {
          //php code for inserting into database;
          $sql2 = "Insert Into User(name,phone,password,email,gender,country) values('" .$name. "', '" .$phone. "','" .$password. "','" .$email. "','" .$Gender. "','" .$country. "')";
          $insertprocess = mysqli_query($db_conn , $sql2);
          if($insertprocess)
          {
            echo "<script language='javascript'>";
            echo "alert('Success');";
            echo "window.location.href='UserRegister.php';";
            echo "alert('New User added');";
            echo "</script>";
          }
          else
          {
            echo "<script language='javascript'>";
            echo "alert(' Error Adding User');";
             echo $name."_".$phone."_".$password."_".$configpassword."_".$email."_".$Gender."_".$country;
            echo "window.location.href='UserRegister.php';";
            echo "</script>";
          }
        }
      }
    }
?>
<?php
  include("Footer.php");
?>

<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form)
    {
      form.addEventListener('submit', function(event)
       {
          if (form.checkValidity() === false)
          {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
          }, false);
    });
  }, false);
})();
</script>

</body>
</html>