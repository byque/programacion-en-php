<?php
	/* Example 7-8. Alternate syntax for copying a file */
	if (!copy('testfile.txt', 'testfile2.txt')) echo "Could not copy file";
	else echo "File succesfully copied to 'testfile2.txt'";
?>