<?php
/* Función que permite calcular el factorial de un número.
 * Ejemplo:
 * echo factorial(5) . "<br>";
 */
function factorial($numero)
{
	if ($numero == 0) return 1;
	else return ($numero * factorial($numero - 1));
}

/* Función que despliegue 3 combo box que especifiquen una fecha: día,
 * mes y año (no retorna valores).
 * Ejemplo:
 * fecha();
 */
function fecha()
{
	// día
	echo "<select name=\"dia\">\n";
	for ($i = 1; $i <= 31; $i++)
		{
			echo "\t<option value=\"$i\">$i</option>\n";
		}
	echo "</select>\n";
	
	// mes
	echo "<select name=\"mes\">\n";
	for ($i = 1; $i <= 12; $i++)
		{
			echo "\t<option value=\"$i\">$i</option>\n";
		}
	echo "</select>\n";
	
	// año
	echo "<select name=\"anio\">\n";
	for ($i = date('Y') - 10; $i <= date('Y'); $i++)
		{
			echo "\t<option value=\"$i\">$i</option>\n";
		}
	echo "</select>\n";
}

/* Funcion que recibe un arreglo con los nombres de los países y genera
 * un combo box, esta funcion retorna código HTML (string).
 * Ejemplo:
 * $p = array("México", "Ecuador", "Uruguay");
 * echo paises($p);
 */
function paises($array_paises)
{
	$html = "<select>\n";
	foreach($array_paises as $pais)
	{
		$html .= "\t<option value=\"$pais\">$pais</option>\n";
	}
	$html .= "</select>\n";
	return $html;
}

?>
