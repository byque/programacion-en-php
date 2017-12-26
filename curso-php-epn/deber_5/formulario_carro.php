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
		<form enctype="multipart/form-data" name="vehiculo" method="POST" action="include/procesador_vehiculos.php">
			<table>
				<tr>
					<th colspan="2">Vehículo</th>
				</tr>
				<tr>
					<th>id:</th>
					<td>
						xxx
					</td>
				</tr>
				<tr>
					<th>Placa:</th>
					<td>
						<input type="text" name="placa">
					</td>
				</tr>
				<tr>
					<th>Marca:</th>
					<td>
						<select name="marca">
							<option value="Hyundai">Hyundai</option>
							<option value="Nissan">Nissan</option>
							<option value="Toyota">Toyota</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Año:</th>
					<td>
						<select name="anio">
<?php
							for ($i = date('Y') - 10; $i <= date('Y'); $i++)
							{
								echo "<option value=\"$i\">$i</option>";
								echo $i != date('Y') ? "\n\t\t\t\t\t\t\t": "\n";
							}
?>
						</select>
					</td>
				</tr>
				<tr>
					<th>Chasis:</th>
					<td>
						<input type="text" name="chasis">
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
					<th>Color:</th>
					<td>
						<input type="radio" name="color" value="azul" checked>Azul<br>
						<input type="radio" name="color" value="blanco">Blanco<br>
						<input type="radio" name="color" value="rojo">Rojo<br>
					</td>
				</tr>
				<tr>
					<th>Observaciones:</th>
					<td>
						<textarea name="observaciones" rows="5" cols="30">Escriba aquí las observaciones.</textarea>
					</td>
				</tr>
				<tr>
					<th>Foto:</th>
					<td>
						<input name="foto_vehiculo" type="file">
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
