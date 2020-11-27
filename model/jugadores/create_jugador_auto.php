<?php
include('../../controller/jugadores/funciones_jugadores.php');
include('../../controller/funciones.php');

$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$seccion = $_POST['seccion'];
$casilla = "10";
$id_seccional = $_POST['id_seccional'];
$zonal = split('-', $_POST['zonal']);
$posibilidad = "90";
$a_quien = "2";
$edad_jugador = $_POST['edad_jugador'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$movilizador = $_POST['movilizador'];

$id_movilizador = compare_movilizador($movilizador);
if(!$id_movilizador['id'])
{
	$id_movilizador = create_movilizador($movilizador);
}
if(compare_jugadores($nombre, $a_paterno, $a_materno, $calle, $colonia, $cp))
	{
		$mensaje = "error";
	}else{
		if(create_jugador_auto($id_movilizador['id'], $id_seccional, $zonal[0], $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $_SESSION['id_usuario'], $fecha_nacimiento))
			{
			    $mensaje = "correcto";
			}else
			{
			    $mensaje = "error2";
			}
	}


echo $mensaje;
