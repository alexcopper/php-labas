<!DOCTYPE html>
<html>
<body>

<form action="23.2.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php

$file = pathinfo(basename($_FILES["fileToUpload"]["name"]));
// Check if image file is a actual image or fake image
print($file['extension']);
error_reporting(0);
if(isset($_POST["submit"])) {
    print($file);
  switch($file['extension'])
  {
      case "": break;// Handle file extension for files ending in '.'
      case NULL: break;// Handle no file extension
      default: 
        mkdir((string)$file['extension']);
        $target_dir = (string)$file['extension']."/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      break;
  }
  
}
?>