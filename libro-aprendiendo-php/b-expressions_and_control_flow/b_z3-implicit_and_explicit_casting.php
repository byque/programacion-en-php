<?php
	// Example 4-37. This expression returns a floating-point number
	
	$a = 56;
	$b = 12;
	$c = $a / $b;
	
	echo $c . "<br>"; // Implicit casting (float)
	
	$c = (int) ($a / $b);
	
	echo $c  . "<br>"; // Explicit casting (integer)
	
?>
