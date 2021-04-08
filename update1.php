<?php
$connect=mysqli_connect("localhost","root","","php");

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$father=$_POST['fathersname'];
	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['mail'];
	$selectgender=$_POST['selectgender'];
    $selectcourse=$_POST['selectcourse'];
	$image=$_POST['image'];
	
$sql="INSERT INTO `upload`(`name`,`fathersname`,`phoneno`,`emailid`,`selectgender`,`selectcourse`,`image`)
VALUES('$name','$fathersname','$phoneno','$emailid','$selectgender','$selectcourse','$image')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));


if($query)
{
	header("location:update1.php");
}



}

?>



<form method="post">
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
selectgender : <input type="radio" name="gender" value="male">male
<input type="radio"  name="gender" value="female">female
<input type="radio" name="gender" value="others">others
</div>

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

<br>
<div>
<input type="file" name="image">
</div>
<br>
<div>
<button type="submit" name="submit">Submit form</button>
</div>


 </form>

