<?php
	/* Example 6-6. Walking through a numeric array using foreach...as */
	$paper = array("Copier", "Inkjet", "Laser", "Photo");
	$j = 0;
	
	foreach($paper as $item)
	{
		echo "$j: $item<br>";
		$j++;
	}
?>