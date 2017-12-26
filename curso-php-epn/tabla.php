<!DOCTYPE html>
<html>
	
	<head lang="es-EC">
		<title>Tabla</title>
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
	</style>
	
	<body>
		<?php
			$nombre = "Julio";
			$edad = 28;
			$profesion = "diseñador";
		?>
		<table>
			<tr>
				<th colspan="2">Datos Personales</th>
			</tr>
			<tr>
				<th>Nombre:</th>
				<td><?php
					echo $nombre;
				?></td>
			</tr>
			<tr>
				<th>Edad:</th>
				<td><?php
					echo $edad;
				?></td>
			</tr>
			<tr>
				<th>Fecha:</th>
				<td><?php
					echo date('d/m/Y');
				?></td>
			</tr>
			<tr>
				<th>Hora:</th>
				<td><?php
					echo date('H:i:s');
				?></td
			</tr>
		</table>
	</body>
	
</html>
