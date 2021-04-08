<?php

$a=7341;
$revsum=0;

while($a>1)
{
	$b=$a%10;
	$revsum=($revsum*10)+$b;
	$a=($a/10);
}
echo $revsum;
?>
<br/>



<?php
echo strrev("7341");
?>
<br/>

<?php
echo strrev("3418");
?>



