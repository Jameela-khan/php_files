<?php
$connect=mysqli_connect("localhost","root","","jameela");

if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$father=$_POST['fathersname'];
	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['mail'];
	$selectgender=$_POST['gender'];
	$selectcourseapplied=$_POST['selectcourseapplied'];
	$password=$_POST['password'];
	
$sql="INSERT INTO `form2`(`name`,`fathername`,`phoneno`,`emailid`,`selectgender`,`selectcourseapplied`,`password`)
VALUES('$name','$father','$phoneno','$emailid','$selectgender','$selectcourseapplied','$password')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

if($query)
{
	header("location:display.php");
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
selectgender : <input type="radio" name="gender">male
<input type="radio"  name="gender">female
<input type="radio" name="gender">others
</div>

<br><div>
selectcourse: <select name="selectcourseapplied">
<option
value="DTP" >DTP</option>
<option
value="basics" >basics</option>
<option
value="telly" >telly</option>

</select>
</div>
<br>
<div>
password :<input type="Password" name="password">
</div>
<br>
<div>
<button type="submit" name="submit">submit form</button>
</div>


 </form>

