<?php
$connect=mysqli_connect("localhost","root","","my_admin");
?>
<table border="3">
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>phone</th>
<th>creditcardnumber</th>
<th>Website</th>
<th>Birthdate</th>
<th>Usergroup</th>
<th>Salesperson</th>
<th>Selectusergroup</th>
<th>Image</th>
</td>
</tr>
<?php
$sql="SELECT * FROM `form`";
$query=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($query))
{
	?>

<tr>

<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['creditcardnumber'];?></td>
<td><?php echo $row['website'];?></td>
<td><?php echo $row['birthdate'];?></td>
<td><?php echo $row['usergroup'];?></td>
<td><?php echo $row['salesperson'];?></td>
<td><?php echo $row['selectusergroup'];?></td>
<td>
<img src="<?php echo $row['image'];?>">
</td>
<td><button><a href="update2.php?id=<?php echo $row['id'];?>">update</a></button></td>




</tr>
<?php } ?>


</table>