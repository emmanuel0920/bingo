<?php
include('../../controller/reportes/funciones_reportes.php');
function fill_total_jugadores()
{
	$total_jugadores= get_total_jugadores();

	return $total_jugadores;
}

function  fill_total_ganadores()
{
	$total_ganadores = get_total_ganadores();

	return $total_ganadores;
}

function fill_total_singanar()
{
	$total_singanar = get_total_singanar();

	return $total_singanar;
}
function fill_votos()
{
	$total_votos = get_votos_seccion();

	return $total_votos;
}
function fill_total_votos($votos_seccion)
{
	$total = 0;
	foreach ($votos_seccion as $votos) 
	{
		$total+=$votos['votos'];
	}
	return $total;
}
function fill_ganadores()
{
	$ganadores = get_ganadores();

	return $ganadores;
}

function fill_tr_ganadores($ganadores)
{
	$tr_ganadores='';
	foreach ($ganadores as $ganador) 
	{
		$tr_ganadores.= '
							<tr>
							
								<td class="center hid_all">
									<label class="pos-rel">
										<input type="checkbox" class="ace" />
										<span class="lbl"></span>
									</label>
								</td>

								<td>'.$ganador['nombre'].' '.$ganador['a_paterno'].' '.$ganador['a_materno'].'</td>
							
								<td class="col_hidd">'.$ganador['identificador'].'</td>
							
								<td>'.$ganador['direccion'].'<br> Tel: '.$ganador['telefono'].'</td>
							
								<!--<td class="col_hid">'.$ganador['posibilidad'].'% A: '.$ganador['quien'].'</td>-->
							
								<td></td>
								
								<td class="col_hiddd">
									'.$ganador['seccion'].'
								</td>
								
								<td class="hid_all">
								
							</td>
						</tr>
						';
	}

	return $tr_ganadores;
}

function fill_jugadores_movilizador()
{
	$total_jugadores_usuario = get_total_jugadores_movilizador();

	return $total_jugadores_usuario;
}

function fill_ganadores_movilizador($total_jugadores_movilizador)
{
	foreach ($total_jugadores_movilizador as $key => $total_jugador_movilizador) 
	{
		$total_movilizador[$key]['id'] = $total_jugador_movilizador['id'];
		$total_movilizador[$key]['nombre'] = $total_jugador_movilizador['nombre'];
		$total_movilizador[$key]['total'] = $total_jugador_movilizador['total'];
		$total_movilizador[$key]['total_ganadores'] = get_total_ganador_movilizador($total_jugador_movilizador['id']);		
	}
	return $total_movilizador;
}
function fill_totales_pastel($total_jugadors_usuario)
{
	$result['total'] = $result['asistentes'] = $result['no_asistentes'] =0;
	foreach ($total_jugadors_usuario as $total_jugador_usuario) 
	{		
		$total = $total_jugador_usuario['total'];		
		$result['total']+=$total;
		$asistentes=$total_jugador_usuario['total_ganadores'];
		$result['asistentes']+=$asistentes;
		$no_asistentes = $total-$asistentes;
		$result['no_asistentes']+=$no_asistentes;
	}
	return $result;
}
function modales($id_usuario)
{
	$jugadores_usuario = jugadores_usuario($id_usuario);
	$ganadores_ususario = ganadores_ususario($id_usuario);
	$sin_ganar_usuario = sin_ganar_usuario($id_usuario);

	$modales = '<div id="modal-total-'.$id_usuario.'" class="modal fade in" tabindex="-1">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header no-padding">
														<div class="table-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<span class="white">×</span>
															</button>
															Total de Jugadores de usuario
														</div>
													</div>

													<div class="modal-body no-padding">
														<div class="clearfix">
															<div class="pull-right tableTools-container"></div>
														</div>
														<table id="dynamic-table" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	<th class="center hid_all">
																		<label class="pos-rel">
																			<input type="checkbox" class="ace" />
																			<span class="lbl"></span>
																		</label>
																	</th>

																	<th>
																		<i class="ace-icon fa fa-user bigger-110 hidden-480"></i>
																		Nombre
																	</th>

																	<th>
																		<i class="ace-icon fa fa-map-marker bigger-110 hidden-480"></i>
																		Dirección - Teléfono
																	</th>

																	<!--<th class="col_hid">
																		<i class="ace-icon fa fa-at bigger-110 hidden-480"></i>
																		Posibilidad
																	</th>-->
																	
																	<th class="col_hid">
																	
																	</th>

																	<th class="col_hiddd">
																		<i class="ace-icon fa fa-phone bigger-110 hidden-480"></i>
																		Sección
																	</th>

																	<th class="hid_all">
																		
																	</th>
																</tr>
															</thead>
';
	foreach ($jugadores_usuario as $jugador) 
	{
		$modales.='

										
															<tbody>
																<td>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</td>
																<td>'.$jugador['direccion'].'<br>'.$jugador['telefono'].'</td>
																<!--<td>'.$jugador['posibilidad'].'<br>'.$jugador['partido'].'</td>-->
																<td></td>
																<td>'.$jugador['seccion'].'</td>
															</tbody>
															';														
	}

	$modales.='
														</table>


													</div>
												</div>

												<div class="modal-footer no-margin-top">
													<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
														<i class="ace-icon fa fa-times"></i>
														Cerrar
													</button>
												</div>
											</div><!-- /.modal-content -->
										</div>


										<div id="modal-asistentes-'.$id_usuario.'" class="modal fade in" tabindex="-1">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header no-padding">
														<div class="table-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<span class="white">×</span>
															</button>
															Jugadores asistentes de usuario
														</div>
													</div>

													<div class="modal-body no-padding">
														<div class="clearfix">
															<div class="pull-right tableTools2-container"></div>
														</div>

														<table id="dynamic-table2" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	<th class="center hid_all">
																		<label class="pos-rel">
																			<input type="checkbox" class="ace" />
																			<span class="lbl"></span>
																		</label>
																	</th>

																	<th>
																		<i class="ace-icon fa fa-user bigger-110 hidden-480"></i>
																		Nombre
																	</th>
																	<th>
																		<i class="ace-icon fa fa-map-marker bigger-110 hidden-480"></i>
																		Dirección - Teléfono
																	</th>

																	<!--<th class="col_hidd">
																		<i class="ace-icon fa fa-at bigger-110 hidden-480"></i>
																		Posibilidad
																	</th>-->
																	
																	<th class="col_hid">
																	</th>

																	<th class="col_hiddd">
																		<i class="ace-icon fa fa-phone bigger-110 hidden-480"></i>
																		Sección
																	</th>

																	<th class="hid_all">
																		
																	</th>
																</tr>
															</thead>';

	foreach ($ganadores_ususario as $jugador) 
	{
		$modales.='

										
															<tbody>
																<td>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</td>
																<td>'.$jugador['direccion'].'<br>'.$jugador['telefono'].'</td>
																<!--<td>'.$jugador['posibilidad'].'<br>'.$jugador['partido'].'</td>-->
																<td></td>
																<td>'.$jugador['seccion'].'</td>
															</tbody>
															';														
	}
	$modales.='
										</table>


													</div>
												</div>

												<div class="modal-footer no-margin-top">
													<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
														<i class="ace-icon fa fa-times"></i>
														Cerrar
													</button>
												</div>
											</div><!-- /.modal-content -->
										</div>

					<div id="modal-no-'.$id_usuario.'" class="modal fade in" tabindex="-1">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header no-padding">
														<div class="table-header">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
																<span class="white">×</span>
															</button>
															Jugadores de usuario
														</div>
													</div>

													<div class="modal-body no-padding">
														<table id="dynamic-table3" class="table table-striped table-bordered table-hover">
															<thead>
																<tr>
																	<th class="center hid_all">
																		<label class="pos-rel">
																			<input type="checkbox" class="ace" />
																			<span class="lbl"></span>
																		</label>
																	</th>

																	<th>
																		<i class="ace-icon fa fa-user bigger-110 hidden-480"></i>
																		Nombre
																	</th>
																	<th>
																		<i class="ace-icon fa fa-map-marker bigger-110 hidden-480"></i>
																		Dirección - Teléfono
																	</th>

																	<!--<th class="col_hidd">
																		<i class="ace-icon fa fa-at bigger-110 hidden-480"></i>
																		Posibilidad
																	</th>-->
																	<th class="col_hid">
																	</th>

																	<th class="col_hiddd">
																		<i class="ace-icon fa fa-phone bigger-110 hidden-480"></i>
																		Sección
																	</th>

																	<th class="hid_all">
																		
																	</th>
																</tr>
															</thead>
	';
foreach ($sin_ganar_usuario as $jugador) 
	{
		$modales.='

										
															<tbody>
																<td>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</td>
																<td>'.$jugador['direccion'].'<br>'.$jugador['telefono'].'</td>
																<!--<td>'.$jugador['posibilidad'].'<br>'.$jugador['partido'].'</td>-->
																<td></td>
																<td>'.$jugador['seccion'].'</td>
															</tbody>
															';														
	}

	$modales.='
										</table>


													</div>
												</div>

												<div class="modal-footer no-margin-top">
													<button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
														<i class="ace-icon fa fa-times"></i>
														Cerrar
													</button>
												</div>
											</div><!-- /.modal-content -->
										</div>
				';

	return $modales;
}

function jugadores_usuario($id_usuario)
{
  $jugadores_usuario = get_jugadores_usuario($id_usuario);

  return $jugadores_usuario;
}

function ganadores_ususario($id_usuario)
{
	$ganadores_ususario = get_ganadores_usuario($id_usuario);

	return $ganadores_ususario;
}

function sin_ganar_usuario($id_usuario)
{
	$sin_ganar_usuario = get_sin_ganar_usuario($id_usuario);

	return $sin_ganar_usuario;

}

function sin_ganar()
{
    $sin_ganar = get_sin_ganar();
    $tr_sin_ganar='';
    foreach ($sin_ganar as $jugador) 
	{
		$tr_sin_ganar.='

										
															<tbody>
																<td>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</td>
																<td>'.$jugador['direccion'].'<br>'.$jugador['telefono'].'</td>
																<!--<td>'.$jugador['posibilidad'].'<br>'.$jugador['partido'].'</td>-->
																<td></td>
																<td>'.$jugador['seccion'].'</td>
															</tbody>
															';														
	}
	
	return $tr_sin_ganar;
}

function total_seecion()
{
	$total_seccion = get_total_seccion();

	return $total_seccion;
}

function grafica_seccion($total_seccion)
{
	$grafica_seccion ='';

	foreach ($total_seccion as $seccion) 
	{
		$porcentaje = ($seccion['total_ganadores']*100)/$seccion['total'];
        $porcentaje = round($porcentaje,2);
		$grafica_seccion.='<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="text-right">
												<b>Seccion ('.$seccion['seccion'].'):</b>
											</div>	
										</div>

										<div class="col-xs-12 col-sm-4">
											<div class="progress pos-rel" data-percent="'.$seccion['total_ganadores'].' de: '.$seccion['total'].' ('.$porcentaje.'%)">
												<div class="progress-bar progress-bar-success" style="width:'.$porcentaje.'%;"></div>
											</div>
										</div>
									</div>';
	}

	return $grafica_seccion;
}

function fill_tr_seccionales()
{
    $seccionales = get_total_seccionales();
    $tr_seccional ='';
    foreach($seccionales as $seccional)
    {
        $porcentaje = round(($seccional['total_ganadores']*100)/$seccional['total_jugadores'],2);
        $faltantes = $seccional['total_jugadores'] - $seccional['total_ganadores'];
        $tr_seccional.='<tr>
                            <td>'.$seccional['nombre'].'</td>
                            <td>'.$seccional['total_jugadores'].'</td>
                            <td>'.$seccional['total_ganadores'].'</td>
                            <td>'.$porcentaje.'%</td>
                            <td>'.$faltantes.'</td>
                        </tr>
        
        ';
        
    }
    
    return $tr_seccional;
}

function fill_tr_zonales()
{
    $zonales = get_total_zonales();
    $tr_zonal ='';
    foreach($zonales as $zonal)
    {
        $porcentaje = round(($zonal['total_ganadores']*100)/$zonal['total_jugadores'],2);
        $faltantes = $zonal['total_jugadores'] - $zonal['total_ganadores'];
        $tr_zonal.='<tr>
                            <td>'.$zonal['nombre_usuario'].'</td>
                            <td>'.$zonal['total_jugadores'].'</td>
                            <td>'.$zonal['total_ganadores'].'</td>
                            <td>'.$porcentaje.'%</td>
                            <td>'.$faltantes.'</td>
                        </tr>
        
        ';
        
    }
    
    return $tr_zonal;
}

function fill_div_reporte($votos_reporte_seccion)
{
	$div_reporte ='';
	$i = 1;
	foreach ($votos_reporte_seccion as $votos) 
	{
		$porcentaje_seccion = ($votos['votos_pan']*100)/$votos['votos'];
		if($i == 1)
		{
			$div_reporte.='<div class="row">';
		}
		if($i <= 3)
		{
			$div_reporte.='
					<div class="col-xs-4 pricing-box">
										<div class="widget-box widget-color-dark">
											<div class="widget-header">
												<h5 class="widget-title bigger">Sección '.$votos['seccion'].'</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="row center">
														<div class="col-xs-6">
															<h3 class="red">VOTOS</h3>
															<div class="easy-pie-chart percentage" data-percent="100" data-color="#e82200" data-size="100">
																<span style="font-size: 25px; color: #e82200;" class="percent">'.$votos['votos'].'</span>
															</div>
														</div>

														<h3 class="blue">VOTOS PAN</h3>
														<div class="easy-pie-chart percentage" data-percent="'.$porcentaje_seccion.'" data-color="#4c99ff" data-size="100">
															<span style="font-size: 25px; color: #4c99ff;" class="percent">'.$votos['votos_pan'].'</span>
														</div>

													</div>
												</div>
											</div>

										</div>
									</div>
					';
				$i++;
		}
		if($i > 3)
		{
			$div_reporte.='</div>';
			$i = 1;
		}
	}
	return $div_reporte;
}

function fill_votos_reporte($votos_seccion)
{
	foreach ($votos_seccion as $key =>$voto) 
	{
		$votos_pan_seccion = get_total_votos_seccion($voto['seccion']);
		$votos_seccion_totales[$key]['seccion'] = $voto['seccion'];
		$votos_seccion_totales[$key]['votos'] = $voto['votos'];
		$votos_seccion_totales[$key]['votos_pan'] = $votos_pan_seccion;
		
	}

	return $votos_seccion_totales;
}