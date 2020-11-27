<?php
include('../../controller/exe.php');
function get_jugadores($complemento, $id_usuario, $id_tipo_usuario)
{   
    if($id_tipo_usuario == 4)
    {
    	if($complemento != ',')
    	{
    		$sql = "SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono
    				FROM jugadores AS j
    				LEFT JOIN a_quien AS a ON a.id = j.a_quien
    			WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND ($complemento)";
    	}else{
    		$sql = "SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono, s.nombre_usuario AS seccional, z.nombre_usuario AS zonal, j.casilla
    				FROM jugadores AS j
    				LEFT JOIN a_quien AS a ON a.id = j.a_quien
                    LEFT JOIN usuarios AS s ON s.id_usuario = j.id_seccional 
                    LEFT JOIN usuarios AS z ON z.id_usuario = j.id_zonal 
    			WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND j.id_seccional = $id_usuario";
    	}
    }elseif($id_tipo_usuario == 5)
    {
    	if($complemento != ',')
    	{
    		$sql = "SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono
    				FROM jugadores AS j
    				LEFT JOIN a_quien AS a ON a.id = j.a_quien
    			WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND ($complemento)";
    	}else{
    	     $sql = "SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono, s.nombre_usuario AS seccional, z.nombre_usuario AS zonal, j.casilla
    				FROM jugadores AS j
    				LEFT JOIN a_quien AS a ON a.id = j.a_quien
                    LEFT JOIN usuarios AS s ON s.id_usuario = j.id_seccional 
                    LEFT JOIN usuarios AS z ON z.id_usuario = j.id_zonal  
    			WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND j.id_zonal = $id_usuario";
    	}
    }else{
        if($complemento != ',')
    	{
    		$sql = "SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono
    				FROM jugadores AS j
    				LEFT JOIN a_quien AS a ON a.id = j.a_quien
    			WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND ($complemento)";
    	}else{
    		$sql = "SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono, s.nombre AS seccional, z.nombre AS zonal, j.casilla, j.id_movilizador, 0 AS voto
    				FROM jugadores AS j
        			    LEFT JOIN a_quien AS a ON a.id = j.a_quien
                        LEFT JOIN seccional AS s ON s.id = j.id_seccional 
                        LEFT JOIN zonal AS z ON z.id = j.id_zonal                     
        			WHERE j.id NOT IN(SELECT g.id_jugador FROM ganadores AS g WHERE 1 ) AND j.id_usuario = $id_usuario 
                    UNION
                    SELECT j.id, j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle, j.numero, j.colonia, j.c_p) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono, s.nombre AS seccional, z.nombre AS zonal, j.casilla, j.id_movilizador, 1 AS voto
        				FROM jugadores AS j
        				LEFT JOIN a_quien AS a ON a.id = j.a_quien
                        LEFT JOIN seccional AS s ON s.id = j.id_seccional 
                        LEFT JOIN zonal AS z ON z.id = j.id_zonal 
                        INNER JOIN ganadores AS g ON g.id_jugador = j.id
        			WHERE j.id_usuario = $id_usuario  
                    ORDER BY `id` ASC";
    	}
    }
	
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

function get_complemento($id)
{
	$sql ="SELECT seccion 
				from seccion_usuario
			WHERE id_usuario = $id";

	$result = querys($sql);
	$complemento='';
	foreach ($result as $value) 
	{
		$complemento.= 'j.seccion ='.$value['seccion'].' OR ';
	}
	$complemento.=',';

	$complemento = str_replace('OR ,', '', $complemento);

	return $complemento;
}

function compare_seccion($seccion)
{
    $sql = "SELECT id FROM votos WHERE seccion = $seccion";

    $result = total_rows($sql);

    return $result;
}

function update_cuenta($seccion)
{
    $sql = "UPDATE votos SET votos = votos + 1 WHERE seccion = $seccion LIMIT 1";

    $result = querys($sql);

    return $result;
}

function create_cuenta($seccion)
{
    $sql = "INSERT INTO votos(seccion, votos)
                    VALUES($seccion, 1)";

    $result = querys($sql);

    return $result;
}
