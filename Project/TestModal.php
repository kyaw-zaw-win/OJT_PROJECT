<!DOCTYPE html>
<html>
<head>
	<title>Test Modal</title>
  <link rel="stylesheet" type="text/css" href="Style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container">
		<button type="button" class="btn btn-primary col-sm" id="Update">Items Management</button>
	</div>
	<div class="modal fade" id="UpdateForm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="text-primary">Tsukiakari/Items Upload</h2>
        </div>

        <div class="modal-body">
        	Hello World
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  <script>
$(document).ready(function()
{
  $("#Update").click(function(){
    $("#UpdateForm").modal({backdrop: true});
});
});
</script>

</body>
</html>