<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<title>INGRESO DE DATOS</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<pre>
<?php
$accesorios = $_POST['radio'] . "," . $_POST['alerones'] . "," . $_POST['aros_aluminio'];
$path = "images/" . $_FILES['foto']['name'];
move_uploaded_file($_FILES['foto']['tmp_name'],$path);
?>
</pre>
	<table border=1 align="center">
		<tr>
			<th colspan="2">DATOS VEHICULO</th>
		</tr>
		<tr>
			<td>Placa:</td>
			<td><?php echo $_POST['placa'] ?></td>
		</tr>
		<tr>
			<td>Modelo:</td>
			<td><?php echo  $_POST['modelo'] ?></td>
		</tr>
		<tr>
			<td>Chasis:</td>
			<td><?php echo  $_POST['chasis'] ?></td>
		</tr>
		<tr>
			<td>Motor:</td>
			<td><?php echo  $_POST['motor'] ?></td>
		</tr>
		<tr>
			<td>Tipo:</td>
			<td><?php echo  $_POST['tipo'] ?></td>
		</tr>
		<tr>
			<td>Combustible:</td>
			<td><?php echo  $_POST['combustible'] ?></td>
		</tr>										
		<tr>
			<td>Accesorios:</td>
			<td><?php echo  $accesorios ?></td>
		</tr>
		<tr>
			<td>Observaciones:</td>
			<td><?php echo  $_POST['observaciones'] ?></td>
		</tr>
		<tr>
			<th colspan="2"><img src="<?php echo $path ?>" width="200px"></th>
		</tr>
	</table>				
</body>
</html>
