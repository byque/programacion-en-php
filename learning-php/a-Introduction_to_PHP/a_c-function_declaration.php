<?php
	function longdate($timestamp){
		return date("l F jS Y", $timestamp);
	}
	echo "Today is " . longdate(time());
	echo "<br>17 days ago was " . longdate(time()-17*24*60*60);
?>
