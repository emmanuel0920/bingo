<?php
include('../../controller/exe.php');

function get_total_jugadores()
{
	$sql = "SELECT id 
				FROM jugadores
			WHERE 1";

	$result = total_rows($sql);

	return $result;
}

function get_total_ganadores()
{
	$sql = "SELECT id
				FROM ganadores 
			WHERE 1";

	$result = total_rows($sql);

	return $result;
}

function get_total_singanar()
{
	$sql = "SELECT j.id
				FROM jugadores AS j
			WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador)";

	$result = total_rows($sql);

	return $result; 
}

function get_ganadores()
{
	$sql = "SELECT DISTINCT(j.id), j.identificador, j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle,' ', j.numero,' ', j.colonia,' ', j.c_p,' ',j.telefono) AS direccion, j.posibilidad, a.nombre AS quien, j.seccion, j.telefono
				FROM jugadores AS j
				LEFT JOIN a_quien AS a ON a.id = j.a_quien
			WHERE EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador)";

	$result = querys($sql);

	return $result;
}

function get_total_jugadores_movilizador()
{
	$sql = 'SELECT m.id , m.nombre, COUNT(j.id_movilizador) AS total
				FROM jugadores AS j, movilizador AS m
			WHERE m.id = j.id_movilizador
			GROUP BY m.id ORDER BY m.nombre ASC';

	$result = querys($sql);

	return $result;
}

function get_total_ganador_movilizador($id_movilizador)
{
	$sql="SELECT id_usuario 
				FROM ganadores
			WHERE id_usuario = $id_movilizador";

	$result = total_rows($sql);

	return $result;
}

function get_jugadores_usuario($id_usuario)
{
	$sql ="SELECT DISTINCT(j.id), j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle,' ', j.numero,' ', j.colonia,' ', j.c_p,' ', j.telefono) AS direccion, j.seccion, j.posibilidad, a.nombre AS partido  
			FROM jugadores AS j
    			LEFT JOIN a_quien AS a ON a.id = j.a_quien
    		WHERE j.id_movilizador =".$id_usuario;
    $result = querys($sql);

    return $result;
}

function get_ganadores_usuario($id_usuario)
{
	$sql="SELECT DISTINCT(j.id), j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle,' ', j.numero,' ', j.colonia,' ', j.c_p,' ', j.telefono) AS direccion, j.telefono, j.seccion, j.posibilidad, a.nombre AS partido 
			FROM jugadores AS j
		    	LEFT JOIN a_quien AS a ON a.id = j.a_quien
		    WHERE EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND j.id_movilizador =".$id_usuario;

	$result = querys($sql);

	return $result;
}

function get_sin_ganar_usuario($id_usuario)
{
	$sql = "SELECT DISTINCT(j.id), j.nombre, j.a_paterno, j.a_materno, CONCAT(j.calle,' ', j.numero,' ', j.colonia,' ', j.c_p,' ', j.telefono) AS direccion, j.telefono, j.seccion, j.posibilidad, a.nombre AS partido
				FROM jugadores AS j
			    	LEFT JOIN a_quien AS a ON a.id = j.a_quien
			    WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador) AND j.id_movilizador =".$id_usuario;
	$result = querys($sql);

	return $result;	
}

function get_sin_ganar()
{
    	$sql = '
			SELECT j.id, j.nombre, j.a_paterno, j.a_materno, j.direccion, j.telefono, j.seccion, j.posibilidad, a.nombre AS partido
				FROM jugadores AS j
			    	LEFT JOIN a_quien AS a ON a.id = j.a_quien
			    WHERE NOT EXISTS (SELECT id_jugador FROM ganadores AS g WHERE j.id = g.id_jugador)'
			 ;
	$result = querys($sql);

	return $result;	
}

function get_total_seccion()
{
	$sql ='SELECT  DISTINCT(j.seccion) AS seccion, COUNT(j.id) AS total, COUNT(g.id) as total_ganadores
				FROM jugadores AS j			  
			    LEFT JOIN ganadores AS g ON j.id = g.id_jugador 
			WHERE 1 GROUP BY j.seccion
			';

	$result = querys($sql);

	return $result;
}

function get_total_seccionales()
{
    $sql = 'SELECT  m.nombre, COUNT(j.id) AS total_jugadores, COUNT(g.id) AS total_ganadores
            FROM jugadores AS j
                LEFT JOIN ganadores AS g ON g.id_jugador = j.id
                LEFT JOIN movilizador AS m ON m.id = j.id_movilizador
            WHERE 1 GROUP BY m.nombre';
            
    $result = querys($sql);
    
    return $result;
}

function get_total_zonales()
{
    $sql = 'SELECT  u.nombre_usuario, COUNT(j.id) AS total_jugadores, COUNT(g.id) AS total_ganadores
            FROM jugadores AS j
                LEFT JOIN ganadores AS g ON g.id_jugador = j.id
                LEFT JOIN usuarios AS u ON u.id_usuario = j.id_zonal
            WHERE 1 GROUP BY u.nombre_usuario';
            
    $result = querys($sql);
    
    return $result;
}

function get_votos_seccion()
{
	$sql = "SELECT id, seccion, votos
					FROM votos 
				WHERE 1";
	$result = querys($sql);

	return $result;
}

function get_total_votos_seccion($seccion)
{
	$sql = "SELECT j.id
				FROM jugadores AS j, ganadores AS g
   			WHERE j.id = g.id_jugador AND j.seccion = $seccion ";

   	$result = total_rows($sql);

   	return $result;
}