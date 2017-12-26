<?php 
	/* Example 10-2. Connecting to a MySQL server with mysqli */
	require_once 'h_1-login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	
	/* Formating a message that will be displayed when the program
	*  exits normally.
	
	function mysql_fatal_error($msg)
	{
		$msg2 = mysql_error();
		echo <<< _END
	We are sorry, but it was not possibe to complete
	the requested task. The error message we got was:
		
		<p>$msg: $msg2</p>
	
	Please click the back button on your browser
	and try again. If you are still having problems,
	please <a href="mailto:admin@server.com">email
	our administrator</a>. Thank you.
	_END;
	}
	
	*/
?>