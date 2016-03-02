<?php

$bar = new candy;
$bar->chocolate();
$bar->haribos();
class candy 
{


	 public function chocolate($r = "hello\r\n")
	{
		

		echo(print_r( $r , 1 ));
	}

	 public function haribos($d = "i really\r\n really\r\n like haribos\r\n")
	{
		echo(print_r( $d , 1 ));
	}
}
?>