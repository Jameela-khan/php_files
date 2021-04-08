<?php 
session_start();
if(empty($_SESSION['emailid']))
{
	header("location:login.php");
}
else{
echo "welcome ".$_SESSION['emailid']; 

}
?>
<button><a href="logout.php">LOGOUT</a></button>