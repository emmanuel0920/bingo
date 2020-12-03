<?php
include('../../controller/busquedas/funciones_busqueda.php');
include('../../controller/funciones.php');
function jugadores_faltantes()
{
	$complemento = get_complemento($_SESSION['id_usuario']);
	$jugadores = get_jugadores($complemento, $_SESSION['id_usuario'], $_SESSION['id_tipo_usuario']);

	return $jugadores;
}

function fill($jugadores)
{
	$tr_jugadores = $nombres = $seccion ='';

	foreach ($jugadores as $jugador)
	{
		if($jugador['voto']){

			$tr_jugadores = '';

		}else{

			$tr_jugadores.='

				<tr>

					<td>'.$jugador['identificador'].'</td>

					<!--<td><a href="#modal-info-'.$jugador['id'].'" data-toggle="modal">'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</a></td>-->

					<td>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</td>

					<td class="hid_1">'.$jugador['direccion'].'<br>Tel:'.$jugador['telefono'].'</td>

					<!--<td class="hid_1">'.$jugador['posibilidad'].'% A: '.$jugador['quien'].'</td>-->

					<td class="hidden">
						'.$jugador['zonal'].'
					</td>

					<td class="hidden">
						'.$jugador['seccional'].'
					</td>

					<td class="hidden">
						'.$jugador['casilla'].'
					</td>

					';

			if($_SESSION['id_tipo_usuario'] == '3'){

			    if($jugador['voto']){

			        $tr_jugadores.='
			        		<td>
								<div class="center">

									<!--<a class="btn btn-xs btn-secondary inf_btn" title="Ver información del Jugador" href="#modal-info-'.$jugador['id'].'" data-toggle="modal">
										<i class="ace-icon fa fa-info-circle bigger-130"></i>
									</a>-->
								</div>
							</td>
						</tr>';
			    }else{

			   		$tr_jugadores.='
			   			<td>
							<div class="center">
								<a class="btn btn-success" title="Palomear Jugador" onclick="palomear_jugador('.$jugador['id'].','.$jugador['id_movilizador'].','.$jugador['seccion'].')">
									<i class="ace-icon fa fa-check-circle bigger-130"></i>
								</a>
								<!--<a class="btn btn-xs btn-secondary inf_btn" title="Ver información del Jugador" href="#modal-info-'.$jugador['id'].'" data-toggle="modal">
									<i class="ace-icon fa fa-info-circle bigger-130"></i>
								</a>-->
							</div>
						</td>
					</tr>';
			    }

			}else{

		    	$tr_jugadores.='
		    		<td>
		    			<div>
							<!--<a class="btn btn-secondary inf_btn" title="Ver información del Jugador" href="#modal-info-'.$jugador['id'].'" data-toggle="modal">
								<i class="ace-icon fa fa-info-circle bigger-130"></i>
							</a>-->
						</div>
					</td>
				</tr>';
			}
		}

			$nombres.= $jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].',';
			$seccion = $jugador['seccion'];
	}

	$nombres.='|';
	$nombres = str_replace(',|', '', $nombres);
	$tr_jugadores.= '<input type="text" id="nombres" name="nombres" value="'.$nombres.'" style="visibility: hidden;">';
	$tr_jugadores.= '<input type="text" id="seccion" name="seccion" value="'.$seccion.'" style="visibility: hidden;">';
	return $tr_jugadores;

}

function fill_modal_info($jugadores)
{
	$modal_info_jugadores=' ';

	foreach ($jugadores as $jugador)
	{
		$modal_info_jugadores.= '

			<div id="modal-info-'.$jugador['id'].'" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="blue">Información del Jugador</h3>
						</div>

						<div class="modal-body">
							<div class="profile-user-info profile-user-info-striped">
								<div class="profile-info-row">
									<div class="profile-info-name"> Propietario: </div>

									<div class="profile-info-value">
										<span>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Identificador: </div>

									<div class="profile-info-value">
										<span>'.$jugador['identificador'].'</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Dirección-Teléfono: </div>

									<div class="profile-info-value">
										<span>'.$jugador['direccion'].'<br>Tel:'.$jugador['telefono'].'
										</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Posibilidad: </div>

									<div class="profile-info-value">
										<span>'.$jugador['posibilidad'].'% A: '.$jugador['quien'].'</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Sección: </div>

									<div class="profile-info-value">
										<span>'.$jugador['seccion'].'</span>
									</div>
								</div>

							</div>

						</div>

						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>
		';
	}
	return $modal_info_jugadores;
}

?>
