<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
	<form name="persona" method="POST" action="include/procesa.php">
		<table border=0 align="center">
		<tr>
			<th colspan="2">Ingrese los datos</th>
		</tr>
		<tr>
			<td>Nombre: </td>
			<td><input type="text" name="nombre" size="10"></td>
		</tr>
		<tr>
			<td>Edad: </td>
			<td><input type="text" name="edad" size="2"></td>
		</tr>
		<tr>
			<td>Género: </td>
			<td>
				<label>M</label><input type="radio" name="genero" value="M">
				<label>F</label><input type="radio" name="genero" value="F">
			</td>
		</tr>						
		<tr>
			<td>Profesión: </td>
			<td>
				<select = "profesion">
					<option value="Ingeniero">Ingeniero</option>
					<option value="Doctor">Doctor</option>
					<option value="Abogado">Abogado</option>
				</select>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="envia" value="ENVIAR"></td>
		</tr>
		</table>
	</form>
</body>

</html>
