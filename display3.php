<?php
$connect=mysqli_connect("localhost","root","","jameela");
?>
<table border="3">
<tr>
<th>Name</th>
<th>Phoneno</th>
<th>Email id</th>
<th>Select Course</th>
<th>Gender</th>
<th>Password</th>

</td>
</tr>
<?php
$sql="SELECT * FROM `form3`";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query))
{
	?>

<tr>

<td><?php echo $row['name'];?></td>
<td><?php echo $row['phoneno'];?></td>
<td><?php echo $row['emailid'];?></td>
<td><?php echo $row['selectcourse'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['password'];?></td>

<td><button><a href="update2.php?id=<?php echo $row['id'];?>">update</a></button></td>

</tr>
<?php } ?>


</table>