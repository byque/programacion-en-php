<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
<?php
include("/includes/funciones.php");

echo "El numero 20: " . par(20);
echo "<br>Número del 1 al 500 primos: ";
primo(50);
echo "<br>El factorial de 3 es: " . factorial(3);

fecha();

$color = array("blanco","negro","azul","verde","amarillo","rojo","rosado","violeta");

echo "</br>";
echo combo($color,"color");
$ciudades = array("uio" => "Quito", "gye" => "Guayaquil", "cue" => "Cuenca");
echo "</br>";
echo combo($ciudades,"ciudad");
?>	
</body>

</html>
