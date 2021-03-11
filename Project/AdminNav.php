<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="Style.css">
  


</head>
<body>
  <nav class="navbar navbar-expand-sm  navbar-dark fixed-top" style="background-color: #013220;">
  <a class="navbar-brand" href="index.php"><h3>Logout</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav" >
      <li class="nav-item">
        <a class="nav-link" href="AdminRegister.php"><h5 style="color: #ffffff;">New Admin</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ItemsManagement.php"><h5 style="color: #ffffff;">Item Management</h5></a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="OrderList.php"><h5 style="color: #ffffff;">Ordered list</h5></a>
      </li>   
      &nbsp;
      &nbsp;
      <li class="nav-item">
      <?php 
        include("DarkModeTest.php");
          ?>
      </li> 
    </ul>
  </div>
</nav>
<p>&nbsp;</p>
</body>
</html>