<?php

$connect=mysqli_connect("localhost","root","","php");

$id=$_GET['id'];
$sql="DELETE FROM `upload`WHERE id='$id'";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

if($query)
{
	header("location:display.php");
}
?>
