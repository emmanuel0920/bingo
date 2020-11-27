<?php


	include('../../controller/funciones.php');
    include('../../model/jugadores/fill.php');
    
	$id = array_keys($_POST);
	
	$datos_jugador =fill_jugador_id($id[0]);
	$seccional = $datos_jugador['seccion'];
	$select_movilizador = fill_movilizador();
    $select_seccional = fill_select_seccional();
    
?>


<div id="modal_add_jugador" class="modal" tabindex="-1" style="overflow-y:auto;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="blue">Nombre del jugador</h1>
			</div>

			<div class="modal-body">
				<div class="row">
					<form class="form-horizontal" method="post"  id="form_jugadores">
					<!-- Text input-->
						<div class="row">
							
							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Apellido Paterno<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" value ="<?php echo $datos_jugador['a_paterno'];?>" class="form-control" type="text" required disabled="" />
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Apellido Materno</label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  name="a_materno" id="a_materno" placeholder="Apellido Materno"value ="<?php echo $datos_jugador['a_materno'];?>" class="form-control" type="text" disabled="" />
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
								</div>	
							</div>

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Nombre<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  title="<?php echo $datos_jugador['nombre'];?>" name="nombre_jugador" id="nombre_jugador" placeholder="Nombre" value ="<?php echo $datos_jugador['nombre'];?>"class="form-control" type="text" required  disabled="" />
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
								</div>
							</div>

						</div>	

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Calle<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input title="<?php echo $datos_jugador['calle'];?>" name="calle" id="calle" placeholder="Calle" value ="<?php echo $datos_jugador['calle'];?>" class="form-control" type="text" required >
											<span class="input-group-addon"><i class="fa fa-road"></i></span>
										</div>
									</div>
								</div>							
							</div>

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Número<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input name="numero" id="numero" placeholder="Número" value ="<?php echo $datos_jugador['numero_ext'];?>" class="form-control" type="number" required >
											<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
										</div>
									</div>
								</div>							
							</div>

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Colonia<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input title="<?php echo $datos_jugador['colonia'];?>" name="colonia" id="colonia" placeholder="Colonia" value ="<?php echo $datos_jugador['colonia'];?>" class="form-control" type="text" required >
											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										</div>
									</div>
								</div>							
							</div>

						</div>	

						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Código Postal<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input name="cp" id="cp" placeholder="Código Postal" value ="<?php echo $datos_jugador['c_p'];?>" class="form-control" type="text" required onchange="compare_jugador()" >
											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										</div>
									</div>
								</div>							
							</div>						

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Teléfono<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  name="telefono" id="telefono" placeholder="Teléfono" class="form-control" type="number" required onfocus="compare_jugador()" />
											<span class="input-group-addon"><i class="fa fa-phone"></i></span>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Sección<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  name="seccion" id="seccion" placeholder="Sección" value ="<?php echo $datos_jugador['seccion'];?>" class="form-control" type="text" required  />
											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
										</div>
									</div>
								</div>	
							</div>

						</div>

						<div class="row">

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Edad</label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input name="edad_jugador" id="edad_jugador" placeholder="Edad" value ="<?php echo $datos_jugador['edad'];?>" class="form-control" type="number" onchange="date_calculator()">
											<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
										</div>
									</div>
								</div>
								
							</div>

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Fecha de Nacimiento</label>  
								    <div class="col-md-7 inputGroupContainer">

										<div class="input-group date" data-provide="datepicker">
										    <input type="text" class="form-control mask_fecha" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="aaaa/mm/dd" onchange="age_calculator()">
										    <span class="input-group-addon"><i class="ace-icon fa fa-calendar"></i></span>
										</div>

									</div>
								</div>
								
							</div>

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Movilizador<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  name="movilizador" id="movilizador" placeholder="Movilizador" class="form-control" type="text" required >
												
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
								</div>
								
							</div>


							
						</div>

						<div class="row">

							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Seccional<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-5 inputGroupContainer">
										<div class="input-group">
											<select name="seccional" id="seccional" placeholder="Seccional" class="chosen-select form-control" type="text" required>
												<option value="">Selecciona una Opción</option>
													<?php echo $select_seccional;?>
											</select>
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="col-md-4">
								<div class="form-group">
								   <label class="col-md-5 control-label">Zonal<FONT COLOR="red">*</FONT></label>  
								    <div class="col-md-7 inputGroupContainer">
										<div class="input-group">
											<input  title="<?php echo $datos_jugador['id_zonal']."-".$datos_jugador['zonal'] ;?>" name="zonal" id="zonal" placeholder="Zonal" class="form-control" type="text" required value="<?php echo $datos_jugador['id_zonal']."-".$datos_jugador['zonal'] ;?>" disabled="">
													
											<span class="input-group-addon"><i class="fa fa-user"></i></span>
										</div>
									</div>
								</div>
								
							</div>
							<input id="identificador" name="identificador" type="hidden" value="<?php echo $datos_jugador['identificador'];?>">
							<input id="id_padron" type="hidden" name="id_padron" value="<?php echo $id[0]; ?>">
							<input id="año_actual" type="hidden">
							<input id="mes_actual" type="hidden">
							<input id="dia_actual" type="hidden">

						</div>
					</form>
				</div>
			</div>	

			<div class="modal-footer">
				<button type="submit" form="form_jugadores" class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Guardar</button>

				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancelar</button>
			</div>

		</div>	
	</div>
</div>

