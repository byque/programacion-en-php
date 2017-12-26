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
				<th colspan="2">Arreglos</th>
			</tr>
_END;
				foreach($_GET['valores'] as $i => $val)
				{
					echo "\n\t\t\t<tr>\n";
					echo "\t\t\t\t<th>Valor " . ($i + 1) . "</th>\n";
					echo "\t\t\t\t<td>" . $val . "</td>\n";
					echo "\t\t\t</tr>\n";
				}
	echo <<<_END
			<tr>
				<th>Valor Máximo:</th>
				<td>
_END;
					echo max($_GET['valores']);
	echo <<<_END
				</td>
				<tr>
				<th>Promedio:</th>
				<td>
_END;
					$contador = count($_GET['valores']);
					$suma = 0;
					foreach($_GET['valores'] as $val)
					{
						$suma += $val;
					}
					echo $suma/$contador;
	echo <<<_END
				</td>
			</tr>
		</table>
	</body>
	
</html>
_END;

?>
