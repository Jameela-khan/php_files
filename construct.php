<?php

class show {
	private $car="skoda";
	
	function __construct($par)
	{
		echo "hello Jameela";
	}
	
	function mypublicfunction()
	{
		return("I'm visible!");
	}
 private function myprivatefunction()
	{
		return("I'm not visible!");
	}
}
$abc=new show("hello");
?>