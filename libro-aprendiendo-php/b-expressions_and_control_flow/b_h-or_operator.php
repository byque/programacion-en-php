<?php
	// Example 4-17. A statement using the OR operator
	
	if ($finished == 1 OR getnext() == 1) exit;
	
	// The function getnext will never be called if $finished has
	// a value of 1.
	
?>
