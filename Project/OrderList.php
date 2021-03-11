<!DOCTYPE html>
<html>
<head>
	<title>Checklist</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
 include("AdminNav.php");
 ?>&nbsp;<br>&nbsp;&nbsp;
 <div class="container">
 	
 	<input type="text" class="form-control" id="myInput" placeholder="Search........">
 	&nbsp;
	<table class="table table-hover  border">
		<thead class="text-grey bg-light">
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Sent/order</th>
			<th></th>
		</thead>
		<tbody class="text-grey" id="myTable">
			<tr>
				<td>Wig</td>
				<td>1</td>
				<td>Order</td>
				<td>
				 	<button type="submit" class="btn btn-success">Delivered</button>
				 	&nbsp;
				 	<button type="submit" class="btn btn-danger">Delete</button>
				 </td>
			</tr>
			<tr>
				<td>Shoes</td>
				<td>3</td>
				<td>Order</td>
				<td>
				 	<button type="submit" class="btn btn-success">Delivered</button>
				 	&nbsp;
				 	<button type="submit" class="btn btn-danger">Delete</button>
				</td>
			</tr>
			<tr>
				<td>Costume</td>
				<td>3</td>
				<td>Sent</td>
				<td> 
				 	<button type="submit" class="btn btn-success">Delivered</button>
				 	&nbsp;
				 	<button type="submit" class="btn btn-danger">Delete</button>
				</td>
			</tr>
		</tbody>
	</table>
	<button type="submit" class="btn btn-primary col-sm" onclick="window.location.href='UserLogin.php'">OK</button>
</div>
&nbsp;
<?php
  include("Footer.php");
?>
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