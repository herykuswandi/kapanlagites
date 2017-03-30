<?php 
/**
* Created On Hery-PC at 30/03/17 
*/
class M_fibonacci extends CI_Model
{
	
	function generate($page=1){
		$limit=10;
		$prev=0;
 		$current=1;
		
		$total=$page*$limit;

		$numbers=array(0,1);  
		 
		  for ($i=0; $i<$total-2; $i++)
		  {
		    $number=$prev+$current;
		    $prev = $current;
		    $current = $number;

		    $numbers[]=$number;
		  }

		 $numbers=array_slice($numbers, $total-$limit);
		return $numbers;

	}
 
 }