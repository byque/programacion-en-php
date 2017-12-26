<?php
	// Example 4-4. An expression and a statement
	
	$day_number = 354;					   // Statement
	$days_to_new_year = 366 - $day_number; // Expression
	
	if ($days_to_new_year < 30){
		echo "Not long won till new year"; // Statement
	}
	
?>
