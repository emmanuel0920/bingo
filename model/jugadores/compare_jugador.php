<?php
	include("../../controller/jugadores/funciones_jugadores.php");

	$nombre = $_POST['nombre'];
	$a_paterno = $_POST['a_paterno'];
	$a_materno = $_POST['a_materno'];
	$calle = $_POST['calle'];
	$colonia = $_POST['colonia'];
	$c_p = $_POST['cp'];
	$identificador = $_POST['identificador'];




	if(compare_jugadores($nombre, $a_paterno, $a_materno, $calle, $colonia, $c_p, $identificador))
	{
		$mensaje = "error2";
	}else{
		$mensaje = "correcto";
	}

	echo $mensaje;
?>