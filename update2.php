<?php
$connect=mysqli_connect("localhost","root","","jameela");

if(isset($_POST['submit']))
{
	
	$name=$_POST['name'];
	$phoneno=$_POST['phoneno'];
	$emailid=$_POST['mail'];
	$selectcourse=$_POST['selectcourse'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	
$sql="INSERT INTO `form3`(`name`,`phoneno`,`emailid`,`selectcourse`,`gender`,`password`)
VALUES('$name','$phoneno','$emailid','$selectcourse','$gender','$password')";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));

if($query)
{
	header("location:display.php");
}

}

?>

<?php
$id=$_GET['id'];
$sql="SELECT * FROM `form3` WHERE id='$id'";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query))
{
?>
<form method="post">
<div>
name:<input type="text" name="name" value="<?php echo $row['name'];?>"></div>
<br>

<div>
phoneno.:<input type="text" name="phoneno" value="<?php echo $row['phoneno'];?>"></div>
</div>

<br>
<div>
emailid.:<input type="text" name="emailid" value="<?php echo $row['emailid'];?>"></div>
<br><div>
selectcourse: <select name="selectcourse" value="<?php echo $row['selectcourse'];?>">
<option
value="DTP" >DTP</option>
<option
value="basics" >basics</option>
<option
value="telly" >telly</option>

</select>
</div>

<br><div>
selectgender : <input type="radio" name="gender" value="male"">male
<input type="radio"  name="gender" >female
<input type="radio" name="gender">others
</div>

<br>
<div>
password :<input type="Password" name="password" value="<?php echo $row['selectcourse'];?>">
</div>

<br>
<div>
<button type="submit" name="submit">Submit form</button>
</div>


 </form>
<?php } ?>
