<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<title>SISTEMA</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>

<body>
<?php
include("includes/functions.php");
include("includes/connect.php");

if($_GET['op']=="del"){
	echo delete($_GET['id'],$_GET['img']);
}elseif($_GET['op']=="det"){
	echo view_city($_GET['id']);
}elseif($_GET['op']=="new"){
	echo get_form();
}else{
	echo get_list();
}

if(isset($_POST['guardar'])){
	echo save();
}
?>
	
</body>

</html>
