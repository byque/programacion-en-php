<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
<?php
//OPERADORES CON PHP
//OPERADORES ARITMÉTICOS
/* SUMA +
 * RESTA -
 * MULTIPLICACION *
 * DIVISION /
 * MODULO %
*/
echo 5+3;
$a = 5;
$b = 7;
echo "<br>";
echo  $b % $a;
//OPERDOR DE SIGNACIÓN ES EL =
/* OPERADORES DE ASIGNACIÓN COMBINADOS PARA NÚMEROS
 * +=
 * -=
 * *=
 * /=
*/
echo "<br><br><br>";

$v = 5;

$v += 9;

echo $v;

// OPERDOR DE CONCATENCION
$m = "Hola Buendos días";
$nombre = " David Badillo";

echo "<br>" . $m . $nombre;

// OPERADORES DE ASIGNACIÓN COMBINADOS PARA TEXTO .

echo "<br><br>";

$html = '<select name"colores">';

$html .= '<option name="blanco">Blanco</option>
		 <option name="negro">Negro</option>';

$html .= '</select>';

echo $html;

//OPERADORES DE COMPARACIÓN
// == igualdad
// === identidad
//NUMEROS
/* >
 * <
 * >=
 * <=
 * <> o !=
 * *
 * */

echo ("hola" == "a") ? "es mayor": "no es mayor";

//OPERADORES DE INCREMENDO DECREMENTO

echo "<br><br><br>";
$a = 7;
echo $a++;
echo "<br> $a";

//OPERADOR TERNARIOS
$a = 7;
$b = 8;



$m = ($a > $b)?"a es mayor":(($a == $b)?"a y b son iguales":"b es mayor que a");

echo "<br>$a<br>$b<br>$m";

?>
</body>

</html>
