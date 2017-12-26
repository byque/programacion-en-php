<?php
	/* Example 5-21. Defining constants within a class */
	Translate::lookup();
	
	class Translate
	{
		const ENGLISH	= 0;
		const SPANISH	= 1;
		const FRENCH	= 2;
		const GERMAN	= 3;
		// ...
		
		static function lookup()
		{
			echo self::SPANISH;
		}
	}
?>