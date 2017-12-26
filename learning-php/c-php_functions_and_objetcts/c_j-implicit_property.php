<?php
	/* Example 5-19. Defining a property implicitly */
	$object1		= new User();
	$object1->name	= "Alice";
	
	echo $object1->name;
	
 	class User{}
?>