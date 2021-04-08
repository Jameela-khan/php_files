<?php
session_start();
$connect=mysqli_connect("localhost","root","","php");
if(isset($_POST['login']))
{
	
	$name=$_POST['name'];
	$image=$_POST['image'];
	$emailid=$_POST['emailid'];
	
	$sql="SELECT * FROM `table` WHERE emailid='$emailid'";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));
	if(mysqli_num_rows($query)>0)
	{
		$_SESSION['emailid']=$emailid;

	}
	
}


?>
<?php
$sql="SELECT * FROM `table`";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query))
{
	?>

<tr>

<td><?php echo $row['name'];?></td>


<table border="3">
<tr>
<th>Name</th>
<th>emailid</th>
</tr>
