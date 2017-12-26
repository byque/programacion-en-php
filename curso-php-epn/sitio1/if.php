<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>sin título</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.27" />
</head>

<body>
<?php



$e = 0;
/*
if(($e >=0) && ($e < 12)){
	echo "La edad es de un niño";
} elseif(($e >=12) && ($e < 18)){
	echo "La edad es de un adolescente";
}elseif(($e >=18) && ($e < 65)){
	echo "La edad es de un adulto";
}elseif(($e >=65) && ($e <= 120)){
	echo "La edad es de un apersona de tercera edad";
}else{
	echo "La edad no es de un humano";
}
*/

switch(true){
	case (($e >= 0) && ($e < 12)): $m = "Niño"; break;
	case (($e >= 12) && ($e < 18)): $m = "Adolescente"; break;
	case (($e >= 18) && ($e < 65)): $m = "Adulto"; break;
	case (($e >= 65) && ($e <= 120)): $m = "Adulto Mayor"; break;
	default: $m = "no humano"; 
}
echo "La edad es de un: $m";

//switch básico
$op = "1"
switch($op){
	case 1: echo "es 1"; break;
	case 2: echo "es 2"; break;
	case 3: echo "es 3"; break;
	default: echo "Opción errónea";
}


?>
</body>

</html>
