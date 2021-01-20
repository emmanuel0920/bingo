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
	$datos_modal= "";

	foreach ($jugadores_capturista as $jugador_capturista) 
	{
		
	    if(!$jugador_capturista['existente'])
	    {
	        $fondo= " style='background-color:#de4848 !important;'";
	    }else{
	        $fondo ="";
	    }
	    
	    $datos_modal= "'".$jugador_capturista['a_paterno']."'" .','. "'".$jugador_capturista['a_materno']."'" .','. "'".$jugador_capturista['nombre']."'" .','. "'".$jugador_capturista['calle']."'" .','. $jugador_capturista['numero'] .','. "'".$jugador_capturista['colonia']."'" .','. $jugador_capturista['c_p'] .','. "'".$jugador_capturista['seccion']."'" .','."'".$jugador_capturista['fecha_captura']."', '".$jugador_capturista['identificador']."'";

	 	$tr_jugadores_capturista.='<tr'.$fondo.' >
										<td>'.$jugador_capturista['a_paterno'].'</td>
										<td>'.$jugador_capturista['a_materno'].'</td>
										<td>'.$jugador_capturista['nombre'].'</td>
										<td>'.$jugador_capturista['calle'].'</td>
										<td>'.$jugador_capturista['numero'].'</td>
										<td>'.$jugador_capturista['colonia'].' C.P: '.$jugador_capturista['c_p'].' Secc: '.$jugador_capturista['seccion'].'</td>
										<!--<td>'.$jugador_capturista['fecha_captura'].'</td>-->
										<td>
											<a class="btn btn-xs btn-info" title="Ver datos del Jugador" onclick="modal_show_jugador_info('.$datos_modal.');"><i class="fa fa-list-ul bigger-130"></i>
											</a>

											<a class="btn btn-xs btn-primary" title="Editar datos del Jugador" onclick="modal_update_jugador_foto('.$datos_modal.');"><i class="fa fa-pencil-square-o bigger-130"></i>
											</a>
										</td>
									</tr>';
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
