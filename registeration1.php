<?php
$connect=mysqli_connect("localhost","root","","jameela");

if(isset($_POST['login']))

{

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * FROM `registration` WHERE email='$email' && password='$password'";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));
	if(mysqli_num_rows($query)>0)
	{
		echo"successfully logged in";
	}
	else{
		echo"galat he";
	}
	}


?>

<form method="post">

<div>
email:<input type="text" name="email"></div>

<br>
<div>
password :<input type="Password" name="password">
</div>

<br>
<div>
<button type="login" name="login">login</button>
</div>


 </form>


