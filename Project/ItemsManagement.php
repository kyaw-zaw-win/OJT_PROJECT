<?php
  include("DBconnection.php");
  $qry="Select * from Items  ";
  $con = open_connection();
  
  $res = mysqli_query( $con, $qry);
  $line=mysqli_num_rows($res);
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
      include("scroll.php");
  ?>
  <input type="text" class="form-control fixed-top" id="myInput" placeholder="Search........" style="color: red;">
    &nbsp;
<div class="container-fluid">
  <!-- Trigger the modal with a button -->
  <div class="container-fluid" style="margin-top: 2px;">
    &nbsp;
    <div class="container"><marquee from="top" direction="bottom"  scrollamount="10"><h2 class="text-primary">Tsukiakari Cosplay Shop:
      <?php
          $unrow="Select * from Items Where available='unavailable'";
  
          $result=mysqli_query( $con, $unrow);
  
          $unline=mysqli_num_rows($result);

      echo $line." Items In Total"."/ Unavailable Items ".$unline;
    ?></h2></marquee></div>
    <div class="container-fluid">
      <div>
      <button type="submit" class="btn btn-primary" id="myBtn">Upload</button>&nbsp;
      <button type="submit" class="btn btn-primary col-sm6" id="myBtn2">Update</button>&nbsp;
      <button type="submit" class="btn btn-danger" id="myBtn3">Delete</button>
      <span style="float: right;">
      <button type="submit" class="btn btn-danger " onclick="window.location.href='AdminRegister.php'">Back</button></span>
    </div>
    &nbsp;
  
  <table class="table table-hover">
    <thead class="text-grey bg-light" >
      <th>Product ID</th>
      <th>Product Name</th>
      <th>price</th>
      <th>Category</th>
      <th>Type</th>
      <th>Product</th>
      <th>Image</th>
    
    </thead>
    <tbody class="text-primary" id="myTable">            
      <?php 
          while ($r = mysqli_fetch_array($res)) 
          {
            $ProductID=$r["id"];
            $ProductName=$r["name"];
            $Price=$r["price"];
            $Category=$r["category"];
            $Type=$r["type"];
            $AboutProduct=$r["available"];
            $image=$r["image"];
      ?>
          <tr>
            <td><?php echo  $ProductID;?></td>
            <td><?php echo $ProductName;?></td>
            <td><?php echo  $Price."ks";?></td>
            <td><?php echo $Category;?></td>
            <td><?php echo $Type;?></td>
            <td><?php echo $AboutProduct;?></td>
            <td><a href="images/<?php echo $image;?>"><img src="images/<?php echo $image;?>" width="50px;" height="50px;"></a></td>
            
            
          </tr>
      <?php 
          }
       ?>
    </tbody>
  </table>
</div>
<!----------------------------------------------------------------------------------------------------->
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content border border-primary" style="background-color: black;">

        <div class="modal-header">
          <h4 class="modal-title"><h2 class="text-primary ">Items Upload</h2></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
            <form method="post">
     <div class="form-group">
      <input type="text" class="form-control" name="itmid" id="itmid" placeholder="Enter ID"  required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="itmname" id="itmname" placeholder="Enter Name"  required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="itmprice" id="itmprice" placeholder="Enter Price" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="file" name="photo" id="photo" style="color: red;">
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <textarea class="form-control" rows="5" name="itmdesc" id="itmdesc" placeholder="item's Description.........." required></textarea>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="itmcate" name="itmcate" placeholder="Enter Category"  required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="itmtype" name="itmtype" placeholder="Enter Type" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
   
    <button type="submit" class="btn btn-success" id="btnupload" name="btnupload">Upload</button>
  </form>
        </div>

        <div class="modal-footer">
          
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>

      
    </div>
  </div>
  <?php
    if (isset($_POST["btnupload"])) 
    {
      $id = $_POST["itmid"];
      $name= $_POST["itmname"];
      $Itmprice=$_POST["itmprice"];
      $Itmphoto=$_POST["photo"];
      $desc=$_POST["itmdesc"];
      $cateItm=$_POST["itmcate"];
      $typeItm=$_POST["itmtype"];
      //$availableItm=$_POST["itmavai"];


      /*echo $name."\n";
    echo $id."\n";
   echo $Itmprice."\n";
    echo $Itmphoto." ";
      echo $desc."\n";
    echo $typeItm."\n";
    echo $cateItm."\n";
    echo $availableItm;*/

   $db_conn = open_connection();

      if($db_conn)
      {
        $sql1 = "Select * from Items Where id = '" . $id . "'";
        //Select Customer information from the Customer Table
        $duplicate = mysqli_query($db_conn , $sql1);
        $rows = mysqli_num_rows($duplicate);
        if($rows > 0)
        {
          echo "<script language='javascript'>";
          echo "alert('This Product ID is already exists');";
          echo "window.location.href='ItemsManagement.php';";
          echo "</script>";
        }
        else
        {
          //php code for inserting into database;
          $sql2 = "Insert Into Items(id,name,price,description,category,type,available,image) values('" .$id. "', '" .$name. "','" .$Itmprice. "','" .$desc. "','" .$cateItm. "','" .$typeItm. "','available','" .$Itmphoto. "')";
          $insertprocess = mysqli_query($db_conn , $sql2);
          if($insertprocess)
          {
            echo "<script language='javascript'>";
            echo "alert('Upload Success');";
            echo "window.location.href='ItemsManagement.php';";
            echo "</script>";
            mysqli_close($db_conn);
          }
          else
          {
            echo "<script language='javascript'>";
            echo "alert('Upload Error');";
            echo "window.location.href='ItemsManagement.php';";
            echo "</script>";
          }
        }
    }
  }
    else
    {

       //print_r($errors);
    }
  ?>
 <!--<----------------------------------------------------------------------------------------------------------------->
  
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content border border-primary" style="background-color: black;">
        <div class="modal-header">
          <h4 class="modal-title"><h2 class="text-primary ">Items UpDate</h2></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
           <div class="modal-body">
            <form  method="post">
     <div class="form-group">
      <input type="text" class="form-control" id="Upid" placeholder="Enter Item ID" name="Upid" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="Upnewid" placeholder="Enter  new ID" name="Upnewid" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="Upname" placeholder="Enter new name" name="Upname" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="Upprice" placeholder="Enter new price" name="Upprice" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>


    <div class="form-group">
      <input type="file" name="Upphoto" id="Upphoto" style="color: red;">
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <textarea class="form-control" rows="5" id="Updesc" name="Updesc" placeholder="Item's new Description.........."></textarea>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="UpCate" placeholder="Enter items new Category" name="UpCate" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="Uptype" placeholder="Enter items new Type" name="Uptype" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="Upavai" placeholder="Items available or not" name="Upavai" required>
      <div class="valid-feedback">Success.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
  <button type="submit" class="btn btn-primary" id="UpDate" name="UpDate">Update</button>
  </form>
</div>

    <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
   </div>

      </div>
    </div>
  </div>

  <?php
    if (isset($_POST["UpDate"])) 
    {
      $idUpdate = $_POST["Upid"];
      $idnewUpdate=$_POST["Upnewid"];
      $nameUpdate= $_POST["Upname"];
      $ItmpriceUpdate=$_POST["Upprice"];
      $ItmphotoUpdate=$_POST["Upphoto"];
      $descUpdate=$_POST["Updesc"];
      $cateItmUpdate=$_POST["UpCate"];
      $typeItmUpdate=$_POST["Uptype"];
      $availableItmUpdate=$_POST["Upavai"];

      /*echo $name."\n";
    echo $id."\n";
   echo $Itmprice."\n";
    echo $Itmphoto." ";
      echo $desc."\n";
    echo $typeItm."\n";
    echo $cateItm."\n";
    echo $availableItm;*/

   $Up_conn = open_connection();

      if($Up_conn)
      {
        $sql11 = "Select * from Items Where id = '" . $idUpdate . "'";
        //Select Customer information from the Customer Table
        $duplicate1 = mysqli_query($Up_conn , $sql11);
        $rows1= mysqli_num_rows($duplicate1);
        if($rows1 > 0)
        {
           $sql22= "Update Items Set id='".$idnewUpdate."', name='".$nameUpdate."',price='".$ItmpriceUpdate."',description='".$descUpdate."',category='".$cateItmUpdate."',type='".$typeItmUpdate."',available='".$availableItmUpdate."',image='".$ItmphotoUpdate."'  Where id='".$idUpdate ."'";
          $insertprocess1 = mysqli_query($Up_conn , $sql22);
          if($insertprocess1)
          {
            echo "<script language='javascript'>";
            echo "alert('UpDate Product Success');";
            echo "window.location.href='ItemsManagement.php';";
            echo "</script>";
          }
          else
          {
            echo "<script language='javascript'>";
            echo "alert('Update Product Error!');";
            echo "window.location.href='ItemsManagement.php';";
            echo "</script>";
          }
         
        }
        else
        {
          //php code for inserting into database;
          echo "<script language='javascript'>";
          echo "alert('This Product ID does not Exit');";
          echo "window.location.href='ItemsManagement.php';";
          echo "</script>";
         
        }
    }
  }
    else
    {

       //print_r($errors);
    }
  ?>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content border border-primary" style="background-color: black;">

        <div class="modal-header">
          <h4 class="modal-title"><h2 class="text-primary ">Items Delete</h2></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body " >
            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="delid" placeholder="Enter Item ID" name="delid" required>
                    <div class="valid-feedback">Success.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <button type="submit" class="btn btn-success" id="deletedata" name="deletedata">Delete</button>
          </form>
       </div>

      
        <div class="modal-footer" style="color: red;">Are you Sure you want to delete this item?
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>

      </div>
  </div>
</div>
<?php
    if (isset($_POST["deletedata"])) 
    {
      $idDelete = $_POST["delid"];
      echo $idDelete;

      /*echo $name."\n";
    echo $id."\n";
   echo $Itmprice."\n";
    echo $Itmphoto." ";
      echo $desc."\n";
    echo $typeItm."\n";
    echo $cateItm."\n";
    echo $availableItm;*/

   $Up_connDel = open_connection();

      if($Up_connDel)
      {
        $Delqry1 = "Select * from Items Where id = '". $idDelete. "'";
        //Select Customer information from the Customer Table
        $idavailable= mysqli_query($Up_connDel , $Delqry1);
        $rows11= mysqli_num_rows($idavailable);
        if($rows11 > 0)
        {
           $Delqry2= "Update Items Set available='unavailable' Where id='".$idDelete ."'";
          $resultRes = mysqli_query($Up_connDel , $Delqry2);
          if($resultRes)
          {
            echo "<script language='javascript'>";
            echo "alert('Delete Product Success');";
            echo "window.location.href='ItemsManagement.php';";
            echo "</script>";
          }
          else
          {
            echo "<script language='javascript'>";
            echo "alert('Delete Product Error!');";
            echo "window.location.href='ItemsManagement.php';";
            echo "</script>";
          }
         
        }
        else
        {
          //php code for inserting into database;
          echo "<script language='javascript'>";
          echo "alert('This Product ID does not Exit');";
          echo "window.location.href='ItemsManagement.php';";
          echo "</script>";
         
        }
    }
  }
    else
    {

       //print_r($errors);
    }
  ?>

 
<script>
$(document).ready(function()
{
  $("#myBtn").click(function(){
    $("#myModal").modal({backdrop: true});
});
  $("#myBtn2").click(function(){
    $("#myModal2").modal({backdrop: true});
  });
  $("#myBtn3").click(function()
  {
    $("#myModal3").modal({backdrop:true});
  });
});
// Disable form submissions if there are invalid fields
</script>
<script>
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
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
