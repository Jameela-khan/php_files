<?php
$connect=mysqli_connect("localhost","root","","jameela");

if(isset($_POST['login']))

{

	$user=$_POST['user'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	
	$sql_u="SELECT * from `registration` WHERE user='$user'";
	$query_u=mysqli_query($connect,$sql_u);
	if(mysqli_num_rows($query_u) >0)
	{
		echo"user is already registered";
	
	
	$sql_e="SELECT * from `registration` WHERE email='$email'";
	$query_e=mysqli_query($connect,$sql_e);
	if(mysqli_num_rows($query_e) >0)
	{
		echo"email is already registered";
	}
	}
	else{
	
	$sql="INSERT INTO `registration`(`user`,`email`,`password`)
VALUES('$user','$email','$password')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));
	}
}

?>


<form method="post">
<div>
user:<input type="text" name="user"></div>
<br>
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
