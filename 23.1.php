<!DOCTYPE html>
<html>
<body>

<form action="23.1.php" method="post" enctype="multipart/form-data">
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
      case "jpg":case "jpeg":
        mkdir("jpeg");
        $target_dir = "jpeg/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      break;
  
      case "css":
        mkdir("css");
        $target_dir = "css/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      break;

      case "js":
        mkdir("js");
        $target_dir = "js/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
      break;
  
      case "": // Handle file extension for files ending in '.'
      case NULL: // Handle no file extension
      
      break;
  }
  
}
?>