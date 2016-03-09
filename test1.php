<?php

class DB
{
	    public static function database()
	    { 
			$username="root";
			$password="jellyfish";


try
{

$handler = new PDO('mysql:host=localhost;dbname=firstdatabase',$username, $password);
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected";
}

//this catches the errors 
catch(PDOException $e)
{
	echo "Not connected:" . $e->getMessage();
}
	 
       return $handle;
      }
}


?>