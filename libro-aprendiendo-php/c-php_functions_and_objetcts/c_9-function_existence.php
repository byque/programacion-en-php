<?php
	/* Example 5-9. Checking for a function's existence */
	if (function_exists("array_combine"))
	{
		echo "Function exists<br>";
	}
	else
	{
		echo "Function does not exist - better write your own<br>";
	}
	echo "PHP version: " . phpversion() . "<br>";
?>