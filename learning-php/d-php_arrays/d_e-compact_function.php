<?php
	/* Example 6-14. Using the compact function */
	$fname			= "Doctor";
	$sname			= "Who";
	$planet			= "Gallifrey";
	$systemm		= "Gridlock";
	$constellation	= "Kasterborous";
	
	$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
	
	print_r($contact);
?>