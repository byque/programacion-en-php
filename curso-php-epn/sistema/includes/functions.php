<?php

function get_form(){
	$html = '
		<table border="0" align="center">
			<tr>
				<th colspan="2">DATOS CIUDAD</th>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre" size="15"></td>
			</tr>
			<tr>
				<td>País:</td>
				<td>' . combo('pais','pais') . '</td>
			</tr>
			<tr>
				<td>Población:</td>
				<td><input type="text" name="poblacion" size="5"></td>
			</tr>
			<tr>
				<td>Idioma:</td>
				<td>' . combo('idioma','idioma') . '</td>
			</tr>
			<tr>
				<td>Superficie:</td>
				<td><input type="text" name="superficie" size="5"></td>
			</tr>
			<tr>
				<td>Altura:</td>
				<td><input type="text" name="altura" size="4"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="file" name="imagen"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="guardar" value="GUARDAR"></td>
			</tr>
		</table>';
	return $html;
}

function combo($tabla,$campo){
	$c = connect();
	$sql = "SELECT * FROM $tabla;";
	$res = mysqli_query($c,$sql);
	$html = '
	<select name="' . $campo . '">' . "\n";
	while($r = mysqli_fetch_assoc($res)){
		$html .= '<option value="' . $r['id'] . '">' . $r['nombre'] . '</option>' . "\n"; 
	}
	$html .= '
	</select>';
	return $html;
}

?>

