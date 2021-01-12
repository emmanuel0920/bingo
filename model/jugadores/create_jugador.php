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
$casilla = "0";
$id_seccional = $_POST['id_seccional'];
$id_zonal = $_POST['id_zonal'];
$a_quien = $_POST['a_quien'];
$posibilidad = $_POST['porcen'];
$make_mov = $_POST['make_mov'];
$edad_jugador = $_POST['edad_jugador'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$movilizador = $_POST['movilizador'];
$observaciones = $_POST['observaciones'];

if($make_mov == 1){
	$completo = $nombre.' '.$a_paterno.' '.$a_materno;
	create_movilizador($completo);
}

$id_movilizador = compare_movilizador($movilizador);
if(!$id_movilizador['id'])
{
	$id_movilizador = create_movilizador($movilizador);

	if(create_jugador($id_movilizador, $id_seccional, $id_zonal, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $_SESSION['id_usuario'], $fecha_nacimiento, $observaciones))
	{
	    $mensaje = "correcto";
	}else
	{
	    $mensaje = "error2";
	}

}else{

	if(create_jugador($id_movilizador['id'], $id_seccional, $id_zonal, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $_SESSION['id_usuario'], $fecha_nacimiento, $observaciones))
	{
	    $mensaje = "correcto";
	}else
	{
	    $mensaje = "error1";
	}
}

echo $mensaje;
