<?php
session_start();
$connect=mysqli_connect("localhost","root","","php");

if(isset($_POST['login']))

{

	$emailid=$_POST['emailid'];
	$password=$_POST['password'];

	$sql="SELECT * FROM `upload` WHERE emailid='$emailid' && password='$password'";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));
  if(mysqli_num_rows($query)>0)
	{
header("location:display.php");
	}
	else{
		echo"not exist";
		
	}
	
}

?>
<br>
<div>

<form method="post">
email:<input type="text" name="emailid"></div>

<br>
<div>
password :<input type="password" name="password">
</div>

<br>
<div>
<button type="login" name="login">login</button>


<div>
</div>


 </form>

