<?php

function get_form(){
	$html = '
	<form name="ciudad" method="POST" action="" enctype="multipart/form-data">
		<table border="0" align="center">
			<tr>
				<th colspan="2">DATOS CIUDAD</th>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre" size="15"></td>
			</tr>
			<tr>
				<td>País:</td>
				<td>' . combo('pais','pais') . '</td>
			</tr>
			<tr>
				<td>Población:</td>
				<td><input type="text" name="poblacion" size="5"></td>
			</tr>
			<tr>
				<td>Idioma:</td>
				<td>' . combo('idioma','idioma') . '</td>
			</tr>
			<tr>
				<td>Superficie:</td>
				<td><input type="text" name="superficie" size="5">Km cuadrados</td>
			</tr>
			<tr>
				<td>Altura:</td>
				<td><input type="text" name="altura" size="4">Msnm</td>
			</tr>
			<tr>
				<td colspan="2"><input type="file" name="imagen"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="guardar" value="GUARDAR"></td>
			</tr>
		</table>
	</form>';
	return $html;
}

function get_list(){
		$c = connect();
		$sql = "SELECT c.id,c.nombre,p.nombre as pais,i.nombre as idioma, c.imagen 
				FROM ciudad c,pais p,idioma i 
				WHERE c.pais=p.id AND c.idioma=i.id;";
		$html = '
		<table border="1" align="center">
			<tr>
				<th colspan="6">LISTA DE CIUDADES</th>
			</tr>
			<tr>
				<th colspan="6"><a href="index.php?op=new">Nuevo</a></th>
			</tr>
			<tr>
				<th>Nombre</th>
				<th>País</th>
				<th>Idioma</th>
				<th colspan="3">Acciones</th>
			</tr>';
		$res = mysqli_query($c,$sql);
		while($ciudad = mysqli_fetch_assoc($res)){
			$html .= '
			<tr>
				<td>' . $ciudad['nombre'] . '</td>
				<td>' . $ciudad['pais'] . '</td>
				<td>' . $ciudad['idioma'] . '</td>
				<td><a href="index.php?op=del&id=' . $ciudad['id'] . '&img=' . $ciudad['imagen'] . '">Borrar</a></td>
				<td>A</td>
				<td><a href="index.php?op=det&id=' . $ciudad['id'] . '">Detalle</a></td>
			</tr>';
		}	
		$html .= '	
		</table>';		
	
	return $html;
}

function delete($id,$img){
	$c = connect();
	$sql = "DELETE FROM ciudad WHERE id=$id;";
	if(mysqli_query($c,$sql)){
		
		$html = '
			<table align="center" border="0">
				<tr>
					<th>Se borró el registro correctamente</th>
				</tr>
				<tr>
					<th><a href="index.php">Regresar</a></th>
				</tr>
			</table>';
		
	}
	else {
			$html = '
			<table align="center" border="0">
				<tr>
					<th>No se borró el registro correctamente</th>
				</tr>
				<tr>
					<th><a href="index.php">Regresar</a></th>
				</tr>
			</table>';
	}
	unlink($img);
	
	return $html;
}

function view_city($id){
	$c = connect();
	$sql = "SELECT c.nombre,p.nombre as pais, c.poblacion, i.nombre as idioma, c.superficie, c.altura, c.imagen 
	FROM ciudad c, pais p, idioma i 
	WHERE c.pais=p.id AND c.idioma=i.id AND c.id=$id;";
	//echo $sql;
//	exit;
	$res = mysqli_query($c, $sql);
	$ciudad = mysqli_fetch_assoc($res);
	$html = '
	<table border="1" align="center">
		<tr>
			<th colspan="2">Ciudad de ' . $ciudad['nombre'] . ' </th>
		</tr>
		<tr>
			<td>País:</td>
			<td>' . $ciudad['pais'] . '</td>
		</tr>
		<tr>
			<td>Población:</td>
			<td>' . $ciudad['poblacion'] . ' habitantes</td>
		</tr>
		<tr>
			<td>Idioma:</td>
			<td>' . $ciudad['idioma'] . '</td>
		</tr>
		<tr>
			<td>Superficie:</td>
			<td>' . $ciudad['superficie'] . ' Km cuadrados</td>
		</tr>	
		<tr>
			<td>Altura:</td>
			<td>' . $ciudad['altura'] . ' msnm</td>
		</tr>	
		<tr>
			<td align="center" colspan="2"><img src="' . $ciudad['imagen'] . '" width="300px"></td>
		</tr>
		<tr>
					<th colspan="2"><a href="index.php">Regresar</a></th>
		</tr>										
	</table>';
	
	return $html;
	
	
}

function save(){
	$c = connect();
	$nombre = $_POST['nombre'];
	$pais = $_POST['pais'];
	$poblacion = $_POST['poblacion'];
	$idioma = $_POST['idioma'];
	$superficie = $_POST['superficie'];
	$altura = $_POST['altura'];
	$ruta = "images/" . name_file($_FILES['imagen']['name']);
	if(!move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta)){
		echo "No se subió el archivo, contacte con el administrador";
		exit;
	}
	$sql = "INSERT INTO ciudad VALUES(NULL,'$nombre',$pais,$poblacion,$idioma,$superficie,$altura,'$ruta');";
	if(mysqli_query($c,$sql)){
		
		$html = '
			<table align="center" border="0">
				<tr>
					<th>Se insertó el registro correctamente</th>
				</tr>
				<tr>
					<th><a href="index.php">Regresar</a></th>
				</tr>
			</table>';
	}
	else {
		$html = '
			<table align="center" border="0">
				<tr>
					<th>No se insertó el registro correctamente</th>
				</tr>
				<tr>
					<th><a href="index.php">Regresar</a></th>
				</tr>
			</table>';
	}
	return $html;
}


function combo($tabla,$campo){
	$c = connect();
	$sql = "SELECT * FROM $tabla;";
	$res = mysqli_query($c,$sql);
	$html = '
	<select name="' . $campo . '">' . "\n";
	while($r = mysqli_fetch_assoc($res)){
		$html .= '<option value="' . $r['id'] . '">' . $r['nombre'] . '</option>' . "\n"; 
	}
	$html .= '
	</select>';
	return $html;
}

function name_file($name){
	$t = explode(".",$name);
	$n = count($t);
	$ext = $t[$n-1];
	$d = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
	$m = 15;
	$name_file=NULL;
	for($i=1;$i<=$m;$i++){
		$r = rand(0,61);
		$namef .= $d[$r];
	}
	$namef .= "." . $ext;
	return $namef; 
}

?>

