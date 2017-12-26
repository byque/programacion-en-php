<?php
	/* Example 7-7. Copying a file */
	copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
	echo "File succesfully copied to 'testfile2.txt'";
?>