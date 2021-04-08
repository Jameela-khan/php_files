<?php
$conn=mysqli_connect("localhost","root","","jameela");
if(isset($_POST['submit']))
{
	$image=$_FILES['image']['name'];
	$img_fld="img_upload/".$image;
	$img_fld2="img_upload/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$img_fld2);
	
	$sql="INSERT INTO `image`(`img`) VALUES('$img_fld')";
	$query=mysqli_query($conn,$sql);
	

if($query)
{
	header("location:display1.php");
}
}

?>

<form method="post" enctype="multipart/form-data">
<input type="file" name="image">

<input type="submit" name="submit">

</form>