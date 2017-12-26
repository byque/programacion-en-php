<?php
	/* Example 5-22. Changing property and method scope */
	class Example
	{
		var $name	= "Michael";	// Same as public but deprecated
		public $age	= 23;			// Public property
		protected $usercount;		// Protected property
		private function admin()	// Private method
		{
			// Admin code goes here
		}
	}
?>