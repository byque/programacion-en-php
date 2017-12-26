<?php
	echo <<<_END
<!DOCTYPE html>
<html>
	
	<head lang="es-EC">
		<title>Arreglos</title>
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
		<form name="valor_max" method="GET" action="include/procesador_arreglos.php">
			<table>
				<tr>
					<th colspan="2">Arreglos</th>
				</tr>
				<tr>
					<th>Valor 1:</th>
					<td>
						<input type="number" name="valores[]">
					</td>
				</tr>
				<tr>
					<th>Valor 2:</th>
					<td>
						<input type="number" name="valores[]">
					</td>
				</tr>
				<tr>
					<th>Valor 3:</th>
					<td>
						<input type="number" name="valores[]">
					</td>
				</tr>
				<tr>
					<th>Valor 4:</th>
					<td>
						<input type="number" name="valores[]">
					</td>
				</tr>
				<tr>
					<th>Valor 5:</th>
					<td>
						<input type="number" name="valores[]">
					</td>
				</tr>
				<tr>
					<td colspan="2" id="input_submit">
						<input type="submit" value="Calcular">
					</td>
				</tr>
			</table>
		</form>
	</body>
	
</html>
_END;

?>
