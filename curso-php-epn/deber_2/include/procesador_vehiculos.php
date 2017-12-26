<?php
	echo <<<_END
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
				<th>Placa:</th>
				<td>
_END;
					echo $_POST['placa'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Año:</th>
				<td>
_END;
					echo $_POST['anio'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Modelo:</th>
				<td>
_END;
					echo $_POST['modelo'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Chasis:</th>
				<td>
_END;
					echo $_POST['chasis'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Motor:</th>
				<td>
_END;
					echo $_POST['motor'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Clase:</th>
				<td>
_END;
					echo $_POST['clase'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Combustible:</th>
				<td>
_END;
					echo $_POST['combustible'];
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Accesorios:</th>
				<td>
_END;
					foreach($_POST['accesorios'] as $item) echo "$item<br>";
	echo <<<_END
				</td>
			</tr>
			<tr>
				<th>Observaciones:</th>
				<td>
_END;
					echo $_POST['comentarios'];
	echo <<<_END
				</td>
			</tr>
		</table>
	</body>
	
</html>
_END;

?>
