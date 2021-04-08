<?php
$connect=mysqli_connect("localhost","root","","jameela");

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['emailid'];
	$selectcourse=$_POST['selectcourse'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	
$sql="INSERT INTO `form3`(`name`,`phoneno`,`emailid`,`selectcourse`,`gender`,`password`)
VALUES('$name','$phoneno','$emailid','$selectcourse','$gender','$password')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

if($query)
{
	header("location:display3.php");
}

}

?>



<form method="post">
<div>
name:<input type="text" name="name"></div>
<br>

<div>
phoneno.:<input type="text" name="phoneno"></div>
</div>

<br>
<div>
emailid.:<input type="text" name="emailid"></div>
<br><div>
selectcourse: <select name="selectcourse">
<option
value="DTP" >DTP</option>
<option
value="basics" >basics</option>
<option
value="telly" >telly</option>

</select>
</div>

<br><div>
selectgender : <input type="radio" name="gender" value="male">male
<input type="radio"  name="gender" value="female" >female
<input type="radio" name="gender" value="others">others
</div>

<br>
<div>
password :<input type="Password" name="password">
</div>

<br>
<div>
<button type="submit" name="submit">Submit form</button>
</div>


 </form>

