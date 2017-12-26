<?php
	echo <<<_END
<!DOCTYPE html>
<html>
	
	<head lang="es-EC">
		<title>Formulario Vehículo</title>
		<meta charset="UTF-8">
	</head>
	
	<style>
		table { 
			border-collapse: collapse;
			margin: auto;
		}
		table, th, td {
			border: 1px solid black;
		}
		th, td {
			padding: 5px;
		}
		#input_submit {
			text-align: right;
		}
	</style>
	
	<body>
		<form name="vehiculo" method="POST" action="include/procesador_vehiculos.php">
			<table>
				<tr>
					<th colspan="2">Vehículo</th>
				</tr>
				<tr>
					<th>Placa:</th>
					<td>
						<input type="text" name="placa">
					</td>
				</tr>
				<tr>
					<th>Año:</th>
					<td>
						<select name="anio">
_END;
							for ($i = date('Y') - 10; $i <= date('Y'); $i++)
							{
								echo "<option value=\"$i\">$i</option>";
								echo $i != date('Y') ? "\n\t\t\t\t\t\t\t": "\n";
							}
	echo <<<_END
						</select>
					</td>
				</tr>
				<tr>
					<th>Modelo:</th>
					<td>
						<input type="text" name="modelo">
					</td>
				</tr>
				<tr>
					<th>Chasis:</th>
					<td>
						<input type="text" name="chasis">
					</td>
				</tr>
				<tr>
					<th>Motor:</th>
					<td>
						<input type="text" name="motor">
					</td>
				</tr>
				<tr>
					<th>Clase:</th>
					<td>
						<input type="radio" name="clase" value="automóvil" checked>Automóvil<br>
						<input type="radio" name="clase" value="bus">Bus<br>
						<input type="radio" name="clase" value="camion">Camión<br>
					</td>
				</tr>
				<tr>
					<th>Combustible:</th>
					<td>
						<input type="radio" name="combustible" value="gasolina" checked>Gasolina<br>
						<input type="radio" name="combustible" value="diesel">Diésel<br>
					</td>
				</tr>
				<tr>
					<th>Accesorios:</th>
					<td>
						<input type="checkbox" name="accesorios[]" value="radio" checked=checked">Radio<br>
						<input type="checkbox" name="accesorios[]" value="aros">Aros<br>
						<input type="checkbox" name="accesorios[]" value="neblineros">Neblineros<br>
					</td>
				</tr>
				<tr>
					<th>Observaciones:</th>
					<td>
						<textarea name="comentarios" rows="5" cols="30">Escriba aquí las observaciones.</textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" id="input_submit">
						<input type="submit" value="Enviar">
					</td>
				</tr>
			</table>
		</form>
	</body>
	
</html>
_END;

?>
