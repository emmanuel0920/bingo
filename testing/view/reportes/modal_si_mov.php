<?php
	 include('../../model/reportes/fill.php');
	$id = array_keys($_POST);	
	$ganadores_ususario = ganadores_ususario($id[0]);
	$tr_jugadores ='';
	foreach ($ganadores_ususario as $jugador) 
	{		
		$tr_jugadores.='<tr>
								<td class="hidden"></td>
								<td>'.$jugador['nombre'].' '.$jugador['a_paterno'].' '.$jugador['a_materno'].'</td>
								<td>'.$jugador['direccion'].'<br>'.$jugador['telefono'].'</td>
								<td>'.$jugador['seccion'].'</td>
								<td class="hidden"></td>
								<td class="hidden"></td>
								<td class="hidden"></td>
							</tr>';
	}
?>
	
	<div id="modal_asistentes" class="modal fade in" tabindex="-1" style="overflow-y: scroll;">
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

				<div class="modal-body">
					<div class="clearfix">
						<div class="pull-right tableTools2-container"></div>
					</div>

					<table id="dynamic-table" class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th class="hidden">
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

								<th class="col_hiddd">
									<i class="ace-icon fa fa-map-marker bigger-110 hidden-480"></i>
									Sección
								</th>								

								<th class="hidden"></th>
								<th class="hidden"></th>
								<th class="hidden"></th>

							</tr>
						</thead>
						<tbody>
							<?php echo $tr_jugadores;?>
						</tbody>
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