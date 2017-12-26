<?php
	$temp = "The date is ";
	echo longdate(time());
	
	function longdate($timestamp){
		return $temp . date("l F jS Y", $timestamp);
	}
	/* Becasue $temp was neither created within the longdate function
	 * nor passed to it as a parameter, longdate cannot acces it. */	
?>
