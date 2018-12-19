<?php

$con=mysqli_connect("localhost","root","","inquiry")or die("not connected");
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
<body>
<div class="login">
<h1>Registration</h1>

<form action="add.php" method="post">

<div class ="textbox">


Name <input type="text" name="name" required pattern="^[A-Za-z]+"><br><br>
Phone <input type="number" name="phone" required><br><br>
Address <input type="textarea" name="address" required><br><br>
Email <input type="email" name="email" required><br><br>
<input type="submit">
</div>
</head>
</form>
</body>
</html>





