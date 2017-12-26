<?php
	$temp = "The date is ";
	echo $temp . longdate(time());
	
	function longdate($timestamp){
		return date("l F jS Y", $timestamp);
	}
	/* Rewriting to refer to $temp within its local scope fixes the
	 * problem. */	
?>
