<?php
	$num_max = 100;/*
	$num = $num_max;
	
	$num_primos = array(1, 2, 3, 5, 7, 11);
	$cont_num_primos = 6;
	
	$cont = $cont_num_primos - 1;
	
	while ($num != 1){
		echo "$num<br>";
		if($num % $num_primos[$cont] != 0){
			$cont--;
			//echo "$cont<br>";
		}elseif($num % $num_primos[$cont] == 0){
		$num = $num / $num_primos[$cont];
		}
	}
	echo "$cont y $num<br>";*/
	
	// ---------------
	$n;
	for($i = 1; $i <= $num_max; $i++){
		$d = 0;
		for($j = 1; $j <= $i; $j++){
			$d += ($i % $j == 0) ? 1 : 0;
		}
		if($d <= 2){
			echo "$i es primo<br>";
		}
	}
?>
