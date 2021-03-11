<!DOCTYPE html>
<html>
<head>
  <title>Test Modal</title>
  
  </head>
<body>
  
  <div class="container">
    <button type="button" class="btn btn-primary col-sm" id="Update">Items Update</button>
  </div>
  <div class="modal fade" id="UpdateForm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h2 class="text-primary">Tsukiakari/Items Upload</h2>
        </div>

        <div class="modal-body">
          hi im update
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