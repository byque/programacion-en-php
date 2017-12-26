<?php

function connect(){
	//servidor
	$s = "localhost";
	//usuario
	$u = "php";
	//clave
	$p = "STV3ejHE98j8XDHG";
	//base de datos
	$db = "sistema";
	$con = mysqli_connect($s,$u,$p,$db);
	return $con;
}
?>

