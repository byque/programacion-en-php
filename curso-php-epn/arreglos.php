<?php
	/*
	$pichincha	= array("Quito", "Cayambe");
	$guayas		= array("Guayaquil", "Daule", "Durán");
	$manabi		= array("Pedernales", "El Carmen", "Jipijapa", "Manta");
	$cantones	= array($pichincha, $guayas, $manabi);
	
	echo "<pre>";
	print_r($cantones);
	echo "</pre>";
	
	$cantones2	= array("Pichincha" => $pichincha, "Guayas" => $guayas, "Manabi" => $manabi);
	
	echo "<pre>";
	print_r($cantones2);
	echo "</pre>";
	*/
	
	$p = array(	"Capital" 	=> "Quito",
				"Población"	=> 3000000,
				"Área"		=> 400);
				
	$g = array(	"Capital" 	=> "Guayaquil",
				"Población"	=> 3350000,
				"Área"		=> 500);
				
	$m = array(	"Capital" 	=> "Portoviejo",
				"Población"	=> 600000,
				"Área"		=> 450);
	
	$a = array(	"Capital" 	=> "Cuenca",
				"Población"	=> 1500000,
				"Área"		=> 350);
				
	$info = array("Pichincha" => $p, "Guayas" => $g, "Manabi" => $m, "Azuay" => $a);
	
	
	foreach($info as $provincia => $nombres_provincias)
	{
		echo "$provincia<br>\n";
		echo "<pre>";
		foreach($nombres_provincias as $caracteristicas =>$dato)
		{
			echo "	$caracteristicas: $dato<br>\n";
		}
		echo "</pre>";
		echo "<br>\n";
	}
	
	
	/*
	echo "<pre>";
	print_r($info);
	echo "</pre>";
	*/
	
?>
