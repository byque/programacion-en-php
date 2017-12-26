<?php
$path_foto_vehiculo = "../images/" . $_FILES['foto_vehiculo']['name'];
?>
<!DOCTYPE html>
<html>
	
	<head lang="es-EC">
		<title>Vehículo Ingresado</title>
		<meta charset="UTF-8">
	</head>
	
	<style>
		table { 
			border-collapse: collapse;
			background-color : LightGray;
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
					<?php echo $_POST['placa']; ?>
				</td>
			</tr>
			<tr>
				<th>Marca:</th>
				<td>
					<?php echo $_POST['marca']; ?>
				</td>
			</tr>
			<tr>
				<th>Año:</th>
				<td>
					<?php echo $_POST['anio']; ?>
				</td>
			</tr>
			<tr>
				<th>Chasis:</th>
				<td>
					<?php echo $_POST['chasis']; ?>
				</td>
			</tr>
			<tr>
				<th>Combustible:</th>
				<td>
					<?php echo $_POST['combustible']; ?>
				</td>
			</tr>
			<tr>
				<th>Color:</th>
				<td>
					<?php echo $_POST['color']; ?>
				</td>
			</tr>
			<tr>
				<th>Observaciones:</th>
				<td>
					<?php echo $_POST['observaciones']; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<?php move_uploaded_file($_FILES['foto_vehiculo']['tmp_name'],$path_foto_vehiculo); ?>
					<img src="<?php echo $path_foto_vehiculo ?>" width="200px">
				</td>
			</tr>
		</table>
	</body>
	
</html>
