<?php
	/* Example 7-6. Reading a file with fread */
	$fh = fopen("testfile.txt", 'r') or 
		die("File does not exist or you lack permission to open it");
	
	$text = fread($fh, 3);
	fclose($fh);
	echo $text;
?>