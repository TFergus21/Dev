<?php
/**
* 
*/

 /**
 * 
 */
 class dataB 
 {
        		//what will the fuction return 

        //the first fuction will return th
 		//i will need to actually write the pdo code to return the table 
 		// i will need to find a way to print it trough the class 
       
       public static function dab()
       {
       	 $username="root";
         $password="jellyfish";

			try
			{

			$handler = new PDO('mysql:host=localhost;dbname=firstdatabase',$username, $password);
			//$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connected";
			}

			//this catches the errors 
			catch(PDOException $e)
			{
				echo "Not connected:" . $e->getMessage();
			}
					 return $handler;
	    }

}