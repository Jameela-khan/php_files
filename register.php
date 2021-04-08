<?php
session_start();
$connect=mysqli_connect("localhost","root","","php");

if(isset($_POST['login']))

{

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * FROM `registration2` WHERE email='$email' && password='$password'";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));
	if(mysqli_num_rows($query)>0)
	{
		$_SESSION['email']=$email;
header("location:home.php");
	}
	else{
		echo"not exist";
		
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


