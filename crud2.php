<?php 
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'crud');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
}
//Data Insertion Function
	public function insert($fname,$lname,$emailid,$contact,$address)
	{
	$ret=mysqli_query($this->dbh,"insert into oopscrud(FirstName,LastName,EmailId,ContactNumber,Address) values('$fname','$lname','$emailid','$contact','$address')");
	return $ret;
	}

}

// Object creation
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
// Posted Values
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contact=$_POST['contact'];
$address=$_POST['address'];
//Function Calling
$sql=$insertdata->insert($fname,$lname,$emailid,$contact,$address);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='crud2.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
echo "<script>window.location.href='crud2.php'</script>";
}
}

?>


<form method="post">
<div>
First Name:<input type="text" name="fname">
</div>
<br>
<div>
last Name:<input type="text" name="lname">
</div>
<br>
<div>
EmailId:<input type="text" name="emailid">
</div>
<br>
<div>
Contact:<input type="text" name="contact">
</div>
<br>
<div>
Address:<input type="text" name="address">
</div>
<br>
<div>
<button type="submit" name="insert">Submit form</button>
</div>

</form>

