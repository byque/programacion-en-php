<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>Arreglo de datos</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

$datos = array("David",35,"Ingeniero Sistemas", 410.43);
/*
echo "El nombre es: " . $datos[0];
echo "<br>La edad es: " . $datos[1];
echo "<br>La profesión es: " . $datos[2];
echo "<br>El sueldo es: " . number_format($datos[3],2);
*/
/*
$c[] = "Quito";
$c[] = "Guayaquil";
$c[] = "Cuenca";


$n = count($c);

for($i = 0; $i < $n ; $i++){
	echo "<br> La ciudad es: " . $c[$i];
}
*/
//MATRIZ
/*
$cantones = array(array("Quito","Cayambe","Los Bancos","Rumiñahui","Pedro Vicente Maldonado","Puerto Quito","Mejía"),
				  array("Guayaquil","Daule","Durán","Villamil","Milagro","Samborondón"),
				  array("Portoviejo","Manta","Bahía","Montecristi","Chone","Pedernales","El Carmen","Jipijapa","Puerto López","Puerto Cayo"));

$cantones[0][0];
$n = count($cantones);
for($i=0;$i<$n;$i++){
	switch($i){
		case 0: $p = "Pichincha";break;
		case 1: $p = "Guayas";break;
		case 2: $p = "Manabí";break;
	}
	echo "<br>$p";
	$m = count($cantones[$i]);
	for($j=0;$j<$m;$j++){
		echo "<br>El cantón es: " . $cantones[$i][$j] . " pertenece a la provincia de: " . $p;
	}
}
*/
/*
$m = array(array(array(array(array("valor1","valor2"),array("valor3","valor4")),array("valor5","valor6"))));
echo $m[0][0][0][1][1];
echo "<pre>";
print_r($m);
echo "</pre>";
* */

//ASOCIATIVOS

$datos = array("Nombre" => "David Badillo",
			   "Edad" => 36,
			   "Profesion" => "Ing. Sistemas",
			   "Sueldo" => 410.43);
//PRIMERA FORMA DEL FOREACH - FORMA SIMPLE
/*
foreach($datos as $valor){
	echo "<br> El dato es $valor"; 
}
* */
//FORMA COMPUESTA DEL FOREACH - RECUPERAR EL ÍNDICE
/*
$html = '<table border=1 align="center">
		<tr>
			<th colspan="2">DATOS PERSONA</th>
		</tr>';
foreach($datos as $i => $valor){
	$html .= '<tr>
				<td>' . $i . '</td>
				<td>' . $valor . '</td>
			  </tr>';
}
$html .= '</table>';
echo $html;
* */
$info = array("Pichincha" => array("Capital" => "Quito", "Población" => 3000000,"Área" => 400),
			  "Guayas" => array("Capital" => "Guayaquil", "Población" => 3350000,"Área" => 500),
			  "Manabí" => array("Capital" => "Portoviejo", "Población" => 1500000,"Área" => 550),
			  "Azuay" => array("Capital" => "Cuenca", "Población" => 2500000,"Área" => 350));

$html = '<table border="1" align="center">
		 <tr>
			<th colspan="2">DATOS PROVINCIAS</th>
		 </tr>';
foreach($info as $provincia => $datos){
$html .= '
		 <tr>
			<th colspan="2">'. $provincia .'</th>
		 </tr>';
	foreach($datos	as $c => $valor){
		 $html .= '
		 <tr>
			<td>'. $c .'</td>
			<td>' . $valor . '</td>
		 </tr>';
	} 	 
}
$html .= '</table>';
echo $html;
?>	
</body>
</html>
