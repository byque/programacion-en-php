<?php
	// Example 4-35. Writing a file using a for loop with error trapping
	
	$fp = fopen("text.txt", 'wb');
	
	for ($i = 0; $i < 100; $i++)
	{
		$written = $fwrite($fp, "data");
		if ($written == FALSE)
		{
			break;
		}
		/* // Simplified alternative
		 * if (!$written) break;
		 * 
		 * // Shortened alternative
		 * if (!fwrite($fp, "data")) break;
		 * 
		 * // Breaking from two for loops
		 * break 2;
		 * */
	}
	
	fclose($fp);
	
?>
