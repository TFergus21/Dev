<?php

$movies = new movies();
/**
* 
*/
class movies 
{
	
	private $arr = NULL;

	private $str = NULL;

	//----------------------------------------------
	/**
	*nothing is getting pased through the constuctor 
	* 
	*@param void 
    *@return void
	*/
	function __construct( )
	{
	 
	
	  

	  $this->_makearray();

	  $this->_encodearray();

	  $this->_decodestring();

	}

	/**
	* in this method we will create the array. 
	* after we have tested json encode this will be changed form to an ini file .
	*@param an array
    *@return a json obj
	*/
	private function _makearray()
	{
		//create an array 
		$this->arr = array('Catch me if you can' => 0, 'the god father'=>1,
		 'Dead pool'=>2,'GoodFellas'=>3,);

		$this->arr['saving private ryan'] = 4;

		$this->str = '{"Catch me if you can":0,"the god father":1,"Dead pool":2,
		"GoodFellas":3,"saving private ryan":4}';

		#die(var_dump($arr));

		//populate the array
	}

private function _encodearray()
	{

		#echo json_encode($this->arr);
	}

private function _decodestring()

	{
		die ( var_dump(json_decode($this->str , false )) );
	}	


}


?>