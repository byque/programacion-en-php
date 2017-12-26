<?php
	/* Allowed and disallowed static variable declarations */
	static $int = 0;		// Allowed
	echo $int;
	
	static $int = 1 + 2;	// Disallowed (will produce a Parse error)
	echo $int;
	
	static $int = sqrt(144);// Disallowed
	echo $int;
?>
