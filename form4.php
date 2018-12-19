<?php

if (isset($_POST['upload']))
{
$file_name = $_FILES['file']['name'];
$file_type = $_FILES['file']['type'];
$file_size = $_FILES['file']['size'];
$file_tem_loc = $_FILES['file']['tmp_name'];
$file_store = "upload6/".$file_name;


 if  (move_uploaded_file($file_tem_loc,$file_store)){
	 echo "files are uploaded";
}
}
?>


<!DOCTYPE html>
<html>
<body>

<form action="?" method="POST" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="file"><br><br>
    <input type="submit" value="Upload Image" name="upload">
</form>
</body>
</html>