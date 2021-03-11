
<?php
      session_start();
      include("DBconnection.php");
      $res="";
      $con = open_connection();
      $qry="";
      
      if (isset($_REQUEST["type"]))
      {
        
        $type=$_REQUEST["type"];
        if ($type=="all")
        {
          $qry="Select * from Items Where available='available'";
        }
        else if ($type=="Darling")
        {
          $qry="Select * from Items Where category='Darling' AND available='available'";
        }
        else if ($type=="TU")
        {
          $qry="Select * from Items Where category='TU' AND available='available'";
        }
        else if ($type=="Demon")
        {
          $qry="Select * from Items Where category='Demon' AND available='available'";
        }
        else if ($type=="MDZS")
        {
          $qry="Select * from Items Where category='MDZS' AND available='available'";
        }
        else
        {
          $qry="Select * from Items Where category='Naruto' AND available='available'";
        }
        $res = mysqli_query( $con, $qry);
      }
  ?>
  <?php
      /*if (isset($_POST["buy"])) 
      {
        $con1 = open_connection();
        $id="";
        $qrry="Select * from Items where id='$id'";
        $img="";
        $nm="";
        $pz="";
        $qty="1";
        $total="";
        $d=0;
        if (is_array($_COOKIE["item"]))
        {
          foreach ($_COOKIE["item"] as $Name => $value) 
          {
            $d=$d+1;
          }
          $d=$d+1;
        }
        else
        {
          $d=$d+1;
        }
         $rest = mysqli_query( $con1,$qrry);
         while ($row=mysqli_fetch_array($rest))
        {
            $img=$row["image"];
            $nm=$row["name"];
            $pz=$row["price"];
            $total=$pz*$qty;
         }
         setcookie("item['".$d."']",$img."/".$nm."".$pz."".$qty."".$total,time()+1800);
      }*/
      if (isset($_REQUEST["cid"]))
       {
        if(isset($_SESSION["buy"]))
        {

          $newbuy = array($_REQUEST["cid"]=>"1");
          $oldbuy = $_SESSION["buy"];
          array_push($oldbuy, $newbuy);
          $_SESSION["buy"] = $oldbuy;
          echo '<script language ="javascript">window.location.href="Product.php?type=all";</script>';
        }
        else{
          $buy = array($_REQUEST["cid"]=>"1");
          $_SESSION["buy"] = $buy;
          echo '<script language ="javascript">window.location.href="Product.php?type=all";</script>';
        }
        

      }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ツキアカリ</title>
<link href="jquery-sakura.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" href="images/icon.jpg">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
.checked {
  color: orange;
}
.filterDiv {
  float: left;
  display: none;
}

.show {
  display: block;
}

/* Style the buttons */

</style>
</head>

<body>
  <a href="CheckList.php">Cart</a>
 
 
 <?php
  include("scroll.php");
 ?>
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop For More Categories</h1>
        <div class="list-group">
          <button class="btn-primary col-sm" onclick="filterSelection('all')">ShowAll</button>
          <button class="btn-primary col-sm" onclick="filterSelection('wig')">Wig</button>
          <button class="btn-primary col-sm" onclick="filterSelection('costume')">Costume</button>
          <button class="btn-primary col-sm" onclick="filterSelection('shoe')"> Shoes</button>
          <button class="btn-primary col-sm" onclick="filterSelection('accessories')">Accessories</button>

        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9" style="margin-top: 50px;">
        <div class="row">
          <?php 
              while ($r = mysqli_fetch_array($res))
              {
                  $id=$r["id"];
                  $image=$r["image"];
                  $name=$r["name"];
                  $price=$r["price"];
                  $description=$r["description"];
                  $type=$r["type"];

           ?>
          <div class="col-lg-4 col-md-6 mb-4 filterDiv <?php echo $type;?>" >
            <div class="card h-100">
              <form method="post" name="item" action="Product.php?cid=<?php echo $id; ?>">
              <a href="images/<?php echo $image;?>"><img class="card-img-top " src="images/<?php echo $image;?>" alt=""></a><hr>
              <div class="card-body">
                <h3 class="card-title" style="color: black;">
                  <?php echo $name ?>
                </h3><hr>
                <h5 style="color: red;"><?php echo $price ."ks"?></h5>
                <p style="color: black;"><?php echo $description?></p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
              </div>
              
              <div class="card-footer">
                <a href="Product.php?cid=<?php echo $id; ?>"><button class="btn-primary col-sm" id="buy" name="buy" >Add to Cart</button></a>
              </div>
            </div>
          </form>

          </div>

          <?php 
           }
           ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <?php
  include("Footer.php");
?>
  <script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);    
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
/*var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}*/
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="jquery-sakura.min.js"></script>
<script>
$(window).load(function () {
    $('body').sakura();
});
</script>

</body>

</html>
