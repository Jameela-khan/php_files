<?php

$connect=mysqli_connect("localhost","root","","php");

if(isset($_POST['submit']))
{
	$id=$_GET['id'];
	$user=$_POST['user'];
	$password=$_POST['password'];
$sql="UPDATE `form1` SET `Name`='$user',`Password`='$password' WHERE id='$id'";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

if($query)
{
	header("location:update.php");
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

