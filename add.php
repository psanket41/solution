<?php

$con=mysqli_connect("localhost","root","","inquiry")or die("not connected");

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];

$sql="insert into inquiry (Name,Phone,Address,Email)values ('$name','$phone','$address','$email')";

mysqli_query($con,$sql);
echo "data added successfully!!!";


?>
