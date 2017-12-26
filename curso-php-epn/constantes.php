<?php
	define("PI",3.141516);
	define("IVA", 12);
	echo "El valor de PI es: " . PI . " y el tipo de dato es:" . gettype(PI);
	echo "<br>El valor de IVA es: " . IVA . " y el tipo de dato es:" . gettype(IVA);
	$PI = (int) PI;
	$IVA = IVA;
	//settype($PI, "integer");
	settype($IVA, "string");
	echo "<br>";
	echo "<br>Despues de settype y asignarles a una nueva variable:";
	echo "<br></bh>El valor de PI es: " . $PI . " y el tipo de dato es:" . gettype($PI);
	echo "<br>El valor de IVA es: " . $IVA . " y el tipo de dato es:" . gettype($IVA);
?>
