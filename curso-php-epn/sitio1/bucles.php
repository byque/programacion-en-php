<?php
/*
for($i=2;$i<=100;$i+=2){
	
	echo $i . "<br>";
	
	
}

$i = 101;
while($i <= 100){
	echo $i . "<br>";	
	$i++;
}
*/
//USO DEL DO WHILE
/*
$i = 101;
do{
	echo $i . "<br>";	
	$i++;
}while($i <= 100)
*/

$m = 100;
for($i=1;$i <= $m;$i++){
	$d = 0;
	for($j=1;$j<=$i;$j++){
		$d += (($i%$j) == 0)?1:0;
	}
	if($d <=2){
		echo "$i es primo <br>";
	}
}
?>

