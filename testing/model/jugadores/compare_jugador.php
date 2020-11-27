<?php
	include("../../controller/jugadores/funciones_jugadores.php");

	$nombre = $_POST['nombre'];
	$a_paterno = $_POST['a_paterno'];
	$a_materno = $_POST['a_materno'];
	$calle = $_POST['calle'];
	$colonia = $_POST['colonia'];
	$c_p = $_POST['cp'];




	if(compare_jugadores($nombre, $a_paterno, $a_materno, $calle, $colonia, $c_p))
	{
		$mensaje = "error2";
	}else{
		$mensaje = "correcto";
	}

	echo $mensaje;
?>