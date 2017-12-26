<?php
	/* Example 5-17. Using the variable $this in a method */
	$object				= new User;
	$object->password	= "secret";
	
	echo $object->get_password();
	
 	class User
	{
		public $name, $password;
		
		function get_password()
		{
			return $this->password;
		}
	}
?>