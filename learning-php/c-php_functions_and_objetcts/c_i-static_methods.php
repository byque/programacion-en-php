<?php
	/* Example 5-18. Creating and accesing a static method */
	User::pwd_string();
	
 	class User
	{
		static function pwd_string()
		{
			echo "Please enter your password";
		}
	}
?>