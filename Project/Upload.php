<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
  if (isset($_REQUEST["btnupload"]))
  {
    $itmname=$_REQUEST["itmname"];
    $itmid=$_REQUEST["itmid"];
    $photo=$_REQUEST["photo"];
    echo $itmname;
    echo $itmid;
    echo $photo;
   /* $filename=$_FILES["photo"]["name"];
    $filepath=$_FILES["photo"]["tmp_name"];
    $filetype=$_FILES["photo"]["type"];
    $filesize=$_FILES["photo"]["size"];
    $filerror=$_FILES["photo"]["error"];

    echo "File Name =".$filename;
    echo "<br>File Path =".$filepath;
    echo "<br>File Type =".$filetype;
    echo "<br>File Size =".$filesize;
    echo "<br>File Error =".$filerror;
  
    
    $errors=array();
    $extensions = array("image/jpeg","image/jpg","image/png");

    if (in_array($filetype,$extensions)==false) 
    {
      $errors[]="extensions not allowed,please choose a JPEG or PNG file.";
    }
    if ($filesize>2097152) 
    {
      $errors[]='File size must be exactly 2MB';
    }
    if (empty($errors)==true) 
    {
      move_uploaded_file($filepath,"images/".$filename);
      echo "<br>Upload proces success";
    }
    else
    {
      print_r($errors);
    }
  }*/
  }
  else
    {
      print_r($errors);
    }

?>

</body>
</html>