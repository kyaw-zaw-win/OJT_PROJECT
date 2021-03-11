<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div id="navbar">
  <nav class="navbar navbar-expand-sm  navbar-dark fixed-top" style="background-color:#013220;">
  <a class="navbar-brand" href="index.php">Menu /</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="CheckList.php"><img src="images/cart3.png" style="width: 40px;height: 30px;"></a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link" href="Product.php?type=all"><h5 style="color: #ffffff;">/ Products /</h5></a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="AdminLogin.php"><h5 style="color: #ffffff;"> Admin /</h5></a>
      </li>  
       &nbsp;
      &nbsp;

      <?php 
        include("DarkModeTest.php");
          ?>
      </li> 
    </ul>
  </div>
</nav>
</div>
<p>&nbsp;</p>
<script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</body>
</html>