<?php include "funciones.php";?>
<!DOCTYPE html>
<html>
	
	<head lang="es-EC">
		<title>Uso de funciones</title>
		<meta charset="UTF-8">
	</head>
	
	<body>
		<h1>Factorial de un número</h1>
		<?php echo factorial($_POST['numero']); ?>
		<h1>Fecha</h1>
		<?php echo $_POST['dia'] . "/" . $_POST['mes'] . "/" . $_POST['anio']; ?>
		<h1>Países</h1>
		<?php foreach($_POST['paises'] as $pais) echo "$pais<br>"; ?>
		<br>
	</body>
	
</html>
