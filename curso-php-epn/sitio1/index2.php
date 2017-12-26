<?php
/*
Programa que genera un combo box de color
Desarrollado hoy en la noche

*/
$html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>Ejemplo 2</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<br>
<br>
' . "\n\n\n\n" . '
	<select name="color>"' . "\n";
//Defino el arreglo de colores
	$c = array("negro","azul","blanco","café","morado","rojo");
//Recorro el arreglo con foreach
	foreach($c as $color){
		$html .= '<option value="' . $color . '">'. $color .'</option>' . "\n";
	}
//cierro el código del select	
$html .= '
</select>
</body>
</html>';

echo $html;
?>
