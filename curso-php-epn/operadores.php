<?php
	$valor1 = 7;
	$valor2 = 9;
	
	echo "Valor 1 = $valor1<br>Valor 2 = $valor2";
	
	echo "<br>suma = ";
	echo $valor1 + $valor2;
	
	echo "<br>resta = ";
	echo $valor1 - $valor2;
	
	echo "<br>producto = ";
	echo $valor1 * $valor2;
	
	echo "<br>Cociente = ";
	echo $valor1 / $valor2;
	
	echo "<br>Resto de la División = ";
	echo $valor1 % $valor2;
	
	echo "<br>Incremento de valor 1 = ";
	echo ++$valor1;
	
	echo "<br>Decremento del valor 2 = ";
	echo --$valor2;
	
	echo "<br>Valor 1 es mayor a valor 2: ";
	$valor1 > $valor2 ? print "Verdadero" : print "Falso";
	
	echo "<br>Valor 1 es igual a valor 2: ";
	$valor1 == $valor2 ? print "Verdadero" : print "Falso";
	
	// Para evaluar ambas condiciones en un solo enunciado:
	$resultado = $valor1 > $valor2 ? "Valor 1 es mayor" : ($valor1 == $valor2 ? "Son iguales" : "Valor 2 es mayor");
	echo "<br>$resultado"; 
?>
