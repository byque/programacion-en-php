<?php
function par($n){
	echo (($n % 2 ) == 0)?"Es par":"Es impar";
}
function primo($n=100){
	for($i=1;$i <= $n;$i++){
		$d = 0;
		for($j=1;$j<=$i;$j++){
			$d += (($i%$j) == 0)?1:0;
		}
		if($d <=2){
		echo "<br>$i es primo";
		}
	}		
}

function fecha(){
	$aa = date('Y');
	$ai = $aa - 120;
	$html = '
	<table border="0" align="center">
		<tr>
			<td>Día: </td>
			<td>
			<select name="dia">
			';
			for($i=1;$i<=31;$i++){
			$html .= '<option value="' . $i . '">' . $i . '</option>' . "\n";
			}
			$html .= '
			</select>
			</td>
			<td>Mes: </td>
			<td>
			<select name="mes">
			';
			for($j=1;$j<=12;$j++){
			$html .= '<option value="' . $j . '">' . $j . '</option>' . "\n";
			}
			$html .= '
			</select>
			</td>
			<td>Año: </td>
			<td>
			<select name="anio">
			';
			for($i=$ai;$i<=$aa;$i++){
			$html .= '<option value="' . $i . '">' . $i . '</option>' . "\n";
			}
			$html .= '
			</select>
			</td>
		</tr>
	</table>';
	echo $html;
}

function combo($a,$campo){
	//sort($a);
	$html = '
	<select name="' . $campo .'">' . "\n";
	foreach($a as $valor => $etiqueta){
			$html .= '<option value="' . $valor . '">' . $etiqueta . '</option>' . "\n";
	}
	$html .= '
	</select>';
	
	return $html;
}

function factorial($n){
	if($n == 1){
		return 1;
	}else{
	    return $n * factorial($n-1);
	}
}
?>
