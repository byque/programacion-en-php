<?php
	$edad = 5;
	echo "Edad = $edad<br>";
	if ($edad >= 0 && $edad < 12){
		echo "Niño";
	}elseif ($edad >= 12 && $edad < 18){
		echo "Adolescente";
	}elseif ($edad >= 18 && $edad < 65){
		echo "Adulto";
	}elseif ($edad >= 65 && $edad < 120){
		echo "Tercera Edad";
	}else {
		echo "ERROR! No es una edad válida.";
	}
	
	switch(true){
		case ($edad >= 0 && $edad < 12):
			echo "<br>Niño";
			break;
		case ($edad >= 12 && $edad < 18):
			echo "<br>Adolescente";
			break;
		case ($edad >= 18 && $edad < 65):
			echo "<br>Adulto";
			break;
		case ($edad >= 65 && $edad < 120):
			echo "<br>Tercera Edad";
			break;
		default:
			echo "<br>ERROR! No es una edad válida.";
			break;
	}
	// Uso del do while
	$i = 101;
	do{
		echo "<br>$i";
	}while($i <= 100)	
?>
