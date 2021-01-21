<?php
include('../../controller/jugadores/funciones_jugadores.php');
include('../../controller/funciones.php');

$voto = $make_mov = 0;

$nombre = $_POST['nombre'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$seccion = $_POST['seccion'];
$casilla = "0";
$id_seccional = $_POST['id_seccional'];
$id_zonal = $_POST['id_zonal'];
$posibilidad = "90";
$a_quien = "2";
$edad_jugador = $_POST['edad_jugador'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$movilizador = $_POST['movilizador'];
$observaciones = $_POST['observaciones'];
$id = $_POST['id'];

if (isset($_POST['make_mov'])) {
	$make_mov = 1;
}

if (isset($_POST['voto'])) {
	$voto = 1;
}

	if(update_jugador($id, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $id_seccional, $id_zonal, $voto, $posibilidad, $a_quien, $edad_jugador, $fecha_nacimiento, $movilizador, $observaciones))
	{
	    $mensaje = "correcto";
	}else
	{
	    $mensaje = "error2";
	}
	if($voto)
	{
	 if(create_ganador($id, 1))
	 {
	       $mensaje = "correcto";
	 }else{
	       $mensaje = "error2";
	 }
	}
echo $mensaje;
