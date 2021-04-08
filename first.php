<?php
$a=2;
if($a>10)
{
	if($a%5==0)
	{
		echo"divisible by 5";
	}
	elseif($a%7==0)
	{
		echo"Divisible by 7";
	}
	else{
		echo $a;
	}
}
elseif($a<10)
{
	if($a%2==0)

{
	echo"No. is Even";
}
elseif($a%3==0)

{
echo"No. is Odd";	
}
}
else{}
?>
