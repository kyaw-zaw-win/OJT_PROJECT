<?php
  include("DBconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>New Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include("AdminNav.php");
  ?>
	&nbsp;
  <div class="container" style="padding-bottom: 10px;">
	<div class="row">
    <div class="col-sm-4 " style="margin-top: 30px;">
      <a href="images/acd.jpg">
      <img src="images/acd.jpg" class="border border-dark" width="100%" height="100%">
    </a>
      <hr class="d-sm-none">
    </div>
	<div class="col-sm-8 border border-primary" id="color" style="margin-top: 2%;" >
  <h2 class="text-primary ">New Admin Register</h2>
  <form class="needs-validation" method="post" novalidate>
     <div class="form-group">
      <input type="text" class="form-control" id="uname" placeholder="Enter adminname" name="uname" required>
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

    <button type="submit" class="btn btn-success col-sm" id="btnadd" name="btnadd">Add New Admin</button>
  </form>
  &nbsp;
     <button type="submit" class="btn btn-danger col-sm" onclick="window.location.href='AdminRegister.php'">Cancel</button>
     &nbsp;
</div>
</div>
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

      echo $name."_".$phone."_".$password."_".$configpassword."_".$email."_".$Gender."_".$country;
      $db_conn = open_connection();

      if($db_conn)
      {
        $sql1 = "Select * from Admin Where phone= '" . $phone . "' And email='".$email."'";
        //Select Customer information from the Customer Table
        $duplicate = mysqli_query($db_conn , $sql1);
        $rows = mysqli_num_rows($duplicate);
        if($rows > 0)
        {
          echo "<script language='javascript'>";
          echo "alert('This Admin is already exists');";
          echo "window.location.href='AdminRegister.php';";
          echo "</script>";
        }
        else
        {
          //php code for inserting into database;
          $sql2 = "Insert Into Admin(name,phone,password,email,gender,country) values('" .$name. "', '" .$phone. "','" .$password. "','" .$email. "','" .$Gender. "','" .$country. "')";
          $insertprocess = mysqli_query($db_conn , $sql2);
          if($insertprocess)
          {
            echo "<script language='javascript'>";
            echo "alert('Success');";
            echo "window.location.href='AdminRegister.php';";
            echo "alert('New Admin added');";
            echo "</script>";
            mysqli_close($db_conn);
          }
          else
          {
            echo "<script language='javascript'>";
            echo "alert('Adding Admin Error');";
            echo "window.location.href='AdminRegister.php';";
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