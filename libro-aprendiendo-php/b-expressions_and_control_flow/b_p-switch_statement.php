<?php
	// Example 4-24. A default statement to add to Example 4-23
	
	switch ($page)
	{
		case "Home":
			echo "You selected Home";
			break;
			
		case "About":
			echo "You selected About";
			break;
			
		case "News":
			echo "You selected News";
			break;
			
		case "Login":
			echo "You selected Login";
			break;
			
		case "Links":
			echo "You selected Links";
			break;
		default:
			echo "Unrecognized selection";
			break;
	}
	
?>
