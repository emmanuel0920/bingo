<?php
include('../../controller/exe.php');
function get_movilizador()
{
    $sql = 'SELECT id, nombre
                FROM movilizador
            WHERE 1';
            
    $result = querys($sql);
    
    return $result;
}

function get_seccional($seccion)
{
   $sql = 'SELECT id, nombre
                FROM seccional
            WHERE seccion ='.$seccion;
            
    $result = querys($sql);
    
    return $result;   
}

function get_movilizadores()
{
    $sql = 'SELECT id_usuario, nombre_usuario
                FROM usuarios
            WHERE id_tipo_usuario = 2';
            
    $result = querys($sql);
    
    return $result;
}

function get_seccionales()
{
    $sql = 'SELECT id, nombre
                FROM seccional
            WHERE 1';
            
    $result = querys($sql);
    
    return $result;
}

function get_zonales()
{
    $sql = 'SELECT id, nombre, seccion
                FROM zonal
            WHERE 1';
            
    $result = querys($sql);
    
    return $result;
}

function get_aquien()
{
    $sql = 'SELECT id, nombre
                FROM a_quien
            WHERE 1';
            
    $result = querys($sql);
    
    return $result;
}

function get_nombres_direcciones()
{
    $sql ="SELECT DISTINCT nombre 
            FROM padron
            WHERE 1";
    $nombres = querys($sql);
    $result = array();
    $i=0;
    foreach ($nombres as $nombre) 
    {
      $result[$i]["nombre"] =$nombre['nombre'];
      $i++;
    }
    
    $sql ="SELECT DISTINCT a_paterno 
            FROM padron
            WHERE 1";
    $a_paternos = querys($sql);
    $i=0;
    foreach ($a_paternos as $a_paterno) 
    {
      $result[$i]["a_paterno"] =$a_paterno['a_paterno'];
        $i++;
    }

    $sql ="SELECT DISTINCT a_materno 
            FROM padron
            WHERE 1";
    $a_maternos = querys($sql);
    $i=0;
    foreach ($a_maternos as $a_materno) 
    {
      $result[$i]["a_materno"] = $a_materno['a_materno'];
        $i++;
    }

    $sql ="SELECT DISTINCT calle 
            FROM padron
            WHERE 1";
    $calles = querys($sql);
    $i=0;
    foreach ($calles as $calle) 
    {
      $result[$i]["calle"] =$calle['calle'];
        $i++;
    }

    $sql ="SELECT DISTINCT colonia 
            FROM padron
            WHERE 1";
    $colonias = querys($sql);
    $i=0;
    foreach ($colonias as $colonia) 
    {
      $result[$i]["colonia"] =$colonia['colonia'];
        $i++;
    }

    $sql ="SELECT DISTINCT c_p 
            FROM jugadores
            WHERE 1";
    $cps = querys($sql);
    $i=0;
    foreach ($cps as $cp) 
    {
      $result[$i]["c_p"] =$cp['c_p'];
        $i++;
    }
    return $result;
}

function get_datos_jugador($id)
{
    $sql = "SELECT p.identificador, p.nombre, p.a_paterno, p.a_materno, p.calle, p.numero_ext, p.numero_int, p.colonia, p.c_p, p.seccion, p.edad, z.nombre AS zonal, z.id AS id_zonal
                FROM padron AS p
                LEFT JOIN zonal AS z ON z.seccion = p.seccion
            WHERE p.id = $id";

    $result = fetch_array($sql);

    return $result;
}


function get_calle($a_pat,$a_mat,$nom)
{
    $sql = 'SELECT calle FROM padron WHERE a_paterno="'.$a_pat.'" AND a_materno="'.$a_mat.'" AND nombre="'.$nom.'"';
            
    $result = querys($sql);
    
    return $result;
}


function get_num($a_pat,$a_mat,$nom)
{
    $sql = 'SELECT numero_ext FROM padron WHERE a_paterno="'.$a_pat.'" AND a_materno="'.$a_mat.'" AND nombre="'.$nom.'"';
            
    $result = querys($sql);
    
    return $result;
}

function get_colonia($a_pat,$a_mat,$nom)
{
    $sql = 'SELECT colonia FROM padron WHERE a_paterno="'.$a_pat.'" AND a_materno="'.$a_mat.'" AND nombre="'.$nom.'"';
            
    $result = querys($sql);
    
    return $result;
}

function get_cp($a_pat,$a_mat,$nom)
{
    $sql = 'SELECT c_p FROM padron WHERE a_paterno="'.$a_pat.'" AND a_materno="'.$a_mat.'" AND nombre="'.$nom.'"';
            
    $result = querys($sql);
    
    return $result;
}

function get_secciones($a_pat,$a_mat,$nom)
{
    $sql = 'SELECT seccion FROM padron WHERE a_paterno="'.$a_pat.'" AND a_materno="'.$a_mat.'" AND nombre="'.$nom.'"';
            
    $result = querys($sql);
    
    return $result;
}

function get_iguales($a_paterno, $a_materno)
{
   $sql = "SELECT id, nombre, a_paterno, a_materno, calle, colonia, c_p, seccion
                FROM jugadores 
                WHERE a_paterno LIKE '%".$a_paterno."%' AND a_materno LIKE '%".$a_materno."%'";
                
    $result = querys($sql);
    
    return $result;
}
?>