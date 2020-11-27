<?php
include('../../controller/jugadores/funciones_jugadores.php');


function fill_jugadores_usuario($id_capturista)
{
	$jugadores_capturista = get_jugadores_capturista($id_capturista);

	return $jugadores_capturista;
}

function fill_tr_jugadores_usuario ($jugadores_capturista)
{
	$tr_jugadores_capturista = "";

	foreach ($jugadores_capturista as $jugador_capturista) 
	{
	    if(!$jugador_capturista['existente'])
	    {
	        $fondo= " style='background-color:#de4848 !important;'";
	    }else{
	        $fondo ="";
	    }
	    
	 	$tr_jugadores_capturista.="<tr".$fondo." >
										<td>".$jugador_capturista['a_paterno']."</td>
										<td>".$jugador_capturista['a_materno']."</td>
										<td>".$jugador_capturista['nombre']."</td>
										<td>".$jugador_capturista['calle']."</td>
										<td>".$jugador_capturista['numero']."</td>
										<td>".$jugador_capturista['colonia']." C.P: ".$jugador_capturista['c_p']." Secc: ".$jugador_capturista['seccion']."</td>
										<td>".$jugador_capturista['fecha_captura']."</td>
									</tr>";
	 } 

	 return $tr_jugadores_capturista;
}

function fill_c_p()
{
	$secciones = get_c_p();

	return $secciones;
}

function fill_listado($seccion)
{
	$listados = get_listado($seccion);

	return $listados;
}

function fill_tr_listado($listados)
{
	$tr_listado = "";

	foreach ($listados as $listado) 
	{		
		$tr_listado.="<tr id ='fila-".$listado['id']."' name='fila-".$listado['id']."'>
							<td>".$listado['nombre']."</td>
							<td>".$listado['a_paterno']."</td>
							<td>".$listado['a_materno']."</td>
							<td>".$listado['edad']."</td>
							<td>".$listado['calle']." # ".$listado['numero_ext']." INT. ".$listado['numero_int']." ".$listado['colonia']." CP: ".$listado['c_p']."</td>
							<td>".$listado['seccion']."</td>
							<td class='center'>
								<div class='btn-group'>
									<a class='btn btn-xs btn-success' onclick='fill_modal_add(".$listado['id'].")' role='button' data-toggle='modal' title='Asignar jugador'>
										<i class='ace-icon fa fa-plus bigger-130'></i>
									</a>
								</div>
							</td>
						</tr>";
	}

	return $tr_listado;
}
