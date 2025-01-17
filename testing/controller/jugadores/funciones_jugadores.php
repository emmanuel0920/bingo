<?php


include('../../controller/exe.php');
function compare_jugador($identificador)
{
    $sql = "SELECT id 
            FROM jugadores
            WHERE identificador = '".$identificador."'";
    $result = total_rows($sql);
    
    return $result;
}

function create_jugador($id_movilizador, $id_seccional, $id_zonal, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $id_usuario, $fecha_nacimiento)

{
    $sql = "INSERT INTO  jugadores ( id_movilizador ,  id_seccional ,  id_zonal ,  nombre ,  a_paterno ,  a_materno, calle, numero, colonia, c_p ,  telefono ,  seccion ,  casilla ,  posibilidad ,  a_quien,  edad, fecha_nacimiento, id_capturista, fecha_captura, existente) 
    VALUES (".$id_movilizador.",".$id_seccional.",".$id_zonal.", '".$nombre."', '".$a_paterno."', '".$a_materno."', '".$calle."', '".$numero."', '".$colonia."', '".$cp."', '".$telefono."', '".$seccion."', '".$casilla."', ".$posibilidad.", ".$a_quien.", '".$edad_jugador."','".$fecha_nacimiento."', ".$id_usuario.", now(), 0)";
    
    $result = querys($sql);
    
    return $result;
}

function create_jugador_auto($id_movilizador, $id_seccional, $id_zonal, $nombre, $a_paterno, $a_materno, $calle, $numero, $colonia, $cp, $telefono, $seccion, $casilla, $posibilidad, $a_quien, $edad_jugador, $id_usuario, $fecha_nacimiento)

{
    $sql = "INSERT INTO  jugadores (id_movilizador, id_seccional ,  id_zonal ,  nombre ,  a_paterno ,  a_materno, calle, numero, colonia, c_p ,  telefono ,  seccion ,  casilla ,  posibilidad ,  a_quien,  edad, fecha_nacimiento, id_capturista, fecha_captura, existente) 
    VALUES (".$id_movilizador.",".$id_seccional.",".$id_zonal.", '".$nombre."', '".$a_paterno."', '".$a_materno."', '".$calle."', '".$numero."', '".$colonia."', '".$cp."', '".$telefono."', '".$seccion."', '".$casilla."', ".$posibilidad.", ".$a_quien.", '".$edad_jugador."','".$fecha_nacimiento."', ".$id_usuario.", now(),1)";
    
    $result = querys($sql);
    
    return $result;
}

function get_jugadores_capturista($id_capturista)
{
	$sql = "SELECT id_usuario ,  id_seccional ,  id_zonal ,  identificador ,  nombre ,  a_paterno ,  a_materno, calle, numero, colonia, c_p ,  telefono ,  seccion ,  casilla ,  posibilidad ,  a_quien,  edad, id_capturista, fecha_captura, existente
				FROM jugadores
				WHERE 1";

	$result = querys($sql);

	return $result;
}

function compare_jugadores($nombre, $a_paterno, $a_materno, $calle, $colonia, $c_p, $identificador)
{
    $sql="SELECT id
            FROM jugadores
          WHERE nombre ='".$nombre."' AND a_paterno ='".$a_paterno."' AND a_materno = '".$a_materno."' AND calle = '".$calle."' AND colonia = '".$colonia."' AND c_p = '".$c_p."' OR identificador = '".$identificador."'";

    $result = total_rows($sql);

    return $result;
}

function get_c_p()
{
    $sql = "SELECT DISTINCT c_p 
                FROM padron
            WHERE 1 ORDER BY c_p ASC";

    $result = querys($sql);

    return $result;
}
function get_listado($seccion)
{
   $sql = "SELECT id, identificador, nombre, a_paterno, a_materno, calle, numero_ext, numero_int, colonia, c_p, seccion, edad 
            FROM listado".$seccion."
            WHERE 1";
    
    $result = querys($sql);

    return $result;
}

function compare_movilizador($movilizador)
{
    $sql = "SELECT id 
                FROM movilizador 
                WHERE nombre = '".$movilizador."'";

    $result = fetch_array($sql);

    return $result; 
}

function create_movilizador($movilizador)
{
    $sql = "INSERT INTO movilizador(nombre)
            VALUES('".$movilizador."')";

    $result = last_id($sql);

    return $result;
}

function get_jugador($id)
{
    $sql = "SELECT nombre, a_paterno, a_materno, seccion, observaciones
                FROM jugadores
                WHERE id = $id";
                
    $result = fetch_array($sql);
    
    return $result;
}

function update_jugador($id, $nombre, $a_paterno, $a_materno, $seccion, $observaciones)
{
    $sql = "UPDATE jugadores SET nombre = '".$nombre."', a_paterno = '".$a_paterno."',a_materno = '".$a_materno."', seccion = '".$seccion."', observaciones ='".$observaciones.
            "' WHERE id = $id";
            
    $result = querys($sql);
    
    return $result;
}

function create_ganador($id, $id_movilizador)
{
	 $sql = "INSERT INTO ganadores(id_jugador, id_usuario)
				VALUES($id, $id_movilizador)";

	$result = querys($sql);

	return $result;
}