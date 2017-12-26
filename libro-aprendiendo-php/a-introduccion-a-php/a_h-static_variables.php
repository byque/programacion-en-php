<?php
	function test(){
		static $count = 0;
		echo $count;
		$count++;
	}
	test();
	echo "<br>";
	test();
?>
