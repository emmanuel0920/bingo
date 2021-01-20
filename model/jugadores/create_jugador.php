<?php
include('../../controller/jugadores/funciones_jugadores.php');
include('../../controller/funciones.php');

$make_mov = $voto = 0;

$nombre = $_POST['nombre_jugador'];
$a_paterno = $_POST['a_paterno'];
$a_materno = $_POST['a_materno'];
$calle = $_POST['calle'];
$numero = $_POST['numero'];
$colonia = $_POST['colonia'];
$cp = $_POST['cp'];
$telefono = $_POST['telefono'];
$seccion = $_POST['seccion'];
$casilla = "0";
$id_seccional = $_POST['seccional'];
$id_zonal = $_POST['zonal'];
$a_quien = $_POST['a_quien'];
$posibilidad = $_POST['porcen'];
$edad_jugador = $_POST['edad_jugador'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$movilizador = $_POST['movilizador'];
$observaciones = $_POST['observaciones'];
$identificador = $_POST['identificador'];

if (isset($_POST['voto'])) {
	$voto = 1;
}

if (isset($_POST['make_mov'])) {
	$make_mov = 1;
}

if($make_mov == 1){
	$completo = $nombre.' '.$a_paterno.' '.$a_materno;
	create_movilizador($completo);
}

$id_movilizador = compare_movilizador($movilizador);
if(!$id_movilizador['id'])
{
	$id_movilizador = create_movilizador($movilizador);	
	if(create_jugador($id_movilizador, $id_seccional, $id_zonal, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $_SESSION['id_usuario'], $fecha_nacimiento, $observaciones, $identificador, $voto))
	{
	    $mensaje = "correcto";
	    $dir_subida = '../assets/archivos/'.$identificador;
		$fichero_subido = $dir_subida . basename($_FILES['foto_id']['name']);
		if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) 
		{
		    $mensaje = "correcto";
		} else {
		    $mensaje = "error3";
		}


	}else
	{
	    $mensaje = "error2";
	}

}else{

	if(create_jugador($id_movilizador['id'], $id_seccional, $id_zonal, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $_SESSION['id_usuario'], $fecha_nacimiento, $observaciones, $identificador, $voto))
	{
	    $mensaje = "correcto";
	}else
	{
	    $mensaje = "error1";
	}
}
if($mensaje == "correcto")
{
	if($_FILES['foto_id']['name'] != '')
	{
		$directorio = "../../assets/evidencias/".$identificador."/";
		if(!is_dir($directorio))
		{
			mkdir($directorio,0777,TRUE);
		}

		$archivo = $directorio . basename($_FILES["foto_id"]["name"]);

		$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

	    if (move_uploaded_file($_FILES["foto_id"] ["tmp_name"], $archivo)) {
	        $mensaje = "correcto";

	    } else {
	        $mensaje = "error4";
	    }
	}
}
echo $mensaje;
