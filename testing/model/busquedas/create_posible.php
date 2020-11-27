<?php
include('../../controller/search/functions_posibles.php');
$id = $_POST['id'];
$posibilidad = $_POST['posibilidad'];

if(create_posible($id, $posibilidad))
{
	$mensaje = "correcto";
}else{
	$mensaje = "error";
}

echo $mensaje;