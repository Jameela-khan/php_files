<?php

$connect=mysqli_connect("localhost","root","","jameela");

if(isset($_POST['Submit']))
{
	$user=$_POST['user'];
	$password=$_POST['password'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	
$sql="INSERT INTO `file`(`name`,`password`,`address`,`phone`)VALUES('$user','$password','$address','$phone')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

}
?>

<form method="Post">
<div>
Name:<input type="text" name="user"></div>

<div>
Password:<input type="password" name="password">
</div>

<div>
address:<input type="text" name="address">
</div>

<div>
Phone:<input type="text" name="phone">
</div>


<div>
<button type="submit" name="Submit">Submit form</button>
</div>


</form>