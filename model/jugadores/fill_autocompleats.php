<?php
include("../../controller/jugadores/funciones_jugadores.php");

function fill_nombre_direccion()
{
    $nombres_direcciones =  get_nombres_direcciones();

    return $nombres_direcciones;
}

function fill_a_paterno($nombres_direcciones)
{
    $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result = '"'.$nombre_direccion['a_paterno'].'",';
    }
    $result = $result."-";

    $result = str_replace(",-", "", $result);

    return $result;

}

function fill_a_materno($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result = '"'.$nombre_direccion['a_materno'].'",';
    }
    $result = $result."-";

    $result = str_replace(",-", "", $result);

    return $result;
}

function fill_nombre($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result = '"'.$nombre_direccion['a_nombre'].'",';
    }
    $result = $result."-";

    $result = str_replace(",-", "", $result);

    return $result;
}

function fill_calle($nombres_direcciones)
{
     $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result = '"'.$nombre_direccion['a_calle'].'",';
    }
    $result = $result."-";

    $result = str_replace(",-", "", $result);

    return $result;
}

function fill_colonia($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result = '"'.$nombre_direccion['a_colonia'].'",';
    }
    $result = $result."-";

    $result = str_replace(",-", "", $result);

    return $result;
}

function fill_c_p($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result = '"'.$nombre_direccion['c_p'].'",';
    }
    $result = $result."-";

    $result = str_replace(",-", "", $result);

    return $result;
}
?>
