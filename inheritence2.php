<?php

class humanbeings
{
	
   public $breathe;

    public $food;

}

class animal extends humanbeings
{
	function lion($breathe,$food,$hunt,$home)
	{
		echo "i can breathe ".$breathe." i ate ".$food." i can hunt ".$hunt." i lives in ".$home;
	}	
	
}

class person extends animal{
	function jameela($breathe,$food,$profession,$live)
	{
		echo "i can breathe ".$breathe." i ate ".$food." my profession is ".$profession." i lives in ".$live;
	}
	
	
	
}

$human=new animal();
$human-> lion("yes","meat","deer","jungle");
$jameela=new person();
$jameela-> jameela("yes","pizza","deer","jungle");

?>