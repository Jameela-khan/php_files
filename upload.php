<?php
$connect=mysqli_connect("localhost","root","","php");

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$fathersname=$_POST['fathersname'];
	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['emailid'];
	$selectcourse=$_POST['selectcourse'];
	$selectgender=$_POST['selectgender'];
	$image=$_POST['image'];
    $password=$_POST['password'];
	
	$image=$_FILES['image']['name'];
	$img_fld="img_upload/".$image;
	$img_fld2="img_upload/".$image;
	move_uploaded_file($_FILES['image']['tmp_name'],$img_fld2);
	
	
$sql="INSERT INTO `upload`(`name`,`fathersname`,`phoneno`,`emailid`,`selectcourse`,`selectgender`,`image`,`password`)
VALUES('$name','$fathersname','$phoneno','$emailid','$selectcourse','$selectgender','$image','$password')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));


if($query)
{
	header("location:login.php");
}

}

?>



<form method="post" enctype="multipart/form-data">
<div>
name:<input type="text" name="name"></div>


<br><div>
fathersname:<input type="text" name="fathersname"></div>

<br>

<div>
phoneno.:<input type="text" name="phoneno"></div>
</div>

<br>
<div>
emailid.:<input type="text" name="mail"></div>
<br><div>
selectcourse: <select name="selectcourse">
<option
value="DTP" >DTP</option>
<option
value="basics" >basics</option>
<option
value="tally" >tally</option>

</select>
</div>

<br><div>
selectgender : <input type="radio" name="gender" value="male">male
<input type="radio"  name="gender" value="female">female
<input type="radio" name="gender" value="others">others
</div>

<br>
<div>
upload:<input type="file" name="image">
</div>

<br>
<div>
password:<input type="password" name="password">
</div>

<br>
<div>
<button type="submit" name="submit">Submit form</button>
</div>


 </form>
