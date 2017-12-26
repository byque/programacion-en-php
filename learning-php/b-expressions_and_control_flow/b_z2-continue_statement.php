<?php
	// Example 4-36. Trapping division-by-zero errors using continue
	
	$j = 10;
	
	while ($j > -0)
	{
		$j--;
		
		if ($j == 0)
		{
			continue;
		}
		
		echo (10 / $j) . "<br>";
	}
	
?>
