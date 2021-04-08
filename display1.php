<?php
$connect=mysqli_connect("localhost","root","","jameela");
?>

<tr>
<th>image</th>
</tr>

<?php
$sql="SELECT * FROM `image`";
$query=mysqli_query($connect,$sql)or die(mysqli_error($connect));
while($row=mysqli_fetch_array($query))
{
	?>
<table>
<tr>

<td>
<img src="<?php echo $row['img'];?>"></td>

</tr>
<?php } ?>


</table>

