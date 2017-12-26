<?php include "include/funciones.php";?>
<!DOCTYPE html>
<html>
	
	<head lang="es-EC">
		<title>Uso de funciones</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<form name="funciones" method="POST" action="include/procesador_funciones.php">
			<h1>Factorial de un número</h1>
			<input type="number" name="numero" value=4>
			<h1>Fecha</h1>
			<?php fecha();?>
			<h1>Países</h1>
			<!-- Encontré que no se puede mandar arreglos con _GET -->
			<input type="text" name="paises[]" value="Ecuador"><br>
			<input type="text" name="paises[]" value="México"><br>
			<input type="text" name="paises[]" value="Uruguay"><br>
			<input type="text" name="paises[]"><br>
			<input type="text" name="paises[]"><br>
			<br>
			<input type="submit" value="Enviar">
		</form>
	</body>
	
</html>
