<?php
	/* Example 7-9. Moving a file */
	if (!rename('testfile2.txt', 'testfile2.new'))
		echo "Could not rename file";
	else echo "File succesfully renamed to 'testfile2.new'";
?>