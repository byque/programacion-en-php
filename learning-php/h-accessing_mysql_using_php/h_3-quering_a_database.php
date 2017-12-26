<?php
	/* Example 10-3. Querying a database with mysqli */
	$query  = "SELECT * FROM classics";
	$result = $conn->query($query);
	if (!$result) die($conn->error);
?>