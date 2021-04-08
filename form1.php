<?php

$connect=mysqli_connect("localhost","root","","php");

if(isset($_POST['submit']))
{
	$user=$_POST['user'];
	$password=$_POST['password'];
$sql="INSERT INTO `form1`(`name`,`password`)VALUES('$user','$password')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

if($query)
{
	header("location:display1.php");
}

}

?>


<form method="Post">
<div>
Name:<input type="text" name="user">
</div>
<br>

<div>
Password:<input type="password" name="password">
</div>

<br>
<div>
<button type="submit" name="submit">Submit form</button>
</div>

</form>

