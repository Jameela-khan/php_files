<?php

class humanbeings
{
	
   public $breathe;

    public $food;

}

class person extends humanbeings
{
	private $walk;
function jammy($breathe,$food,$walk,$home) 
{
	echo " i can breathe ". $breathe . " i ate ". $food . " can walk ". $walk . " lives " . $home;
	
}
}

$person=new person();
$person-> jammy("yes","sweets","jameela","jungle");


?>