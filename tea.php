<?php

$drinks = new drinks;
$drinks->tea();
$drinks->tester();




class drinks 
{

	public function tea()
	{
	  //$types = array( 'black','chai','peppermint','earl grey' );

		//if ($types[0] == 'black' ) 
		  //{
			//echo "i dont mind";
		  //}

		#

	}

	private function _statments()
	{

		$people = array('tish'=>'01','Ty'=>'02','bob'=>'03','ali'=>null);

		$types = array( 'black','chai','peppermint','earl grey' );

		//if ( $people [2] == 'tish'); 
		//{
		//	echo "this is alright";
		//}
		//if($people[1] != 'tish') 
		//{
		 // echo "something is wrong";
		//}

		foreach ($people as $key => $value) 
		{
			switch ($key) {
				case 'tish':
					echo $key;
					break;
				case 'Ty':
					echo $key;
					break;
				case 'bob':
					echo $key;
					break;
				case 'ali':
					echo $value;
					break;
				default:
					echo '$key'.$key.'is empty';
					break;
			}
		}

		#die(var_dump($types));
	}

	public function tester()
	{
		$this->_statments();
	}

}



?>