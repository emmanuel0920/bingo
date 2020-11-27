<?php
	include('../../controller/funciones.php');
    include('../../model/jugadores/fill.php');
    
	$a_pat = $_POST["a_pat"];
	$a_mat = $_POST["a_mat"];
	$nom = $_POST["nom"];
	
	$select_calle = fill_select_calle($a_pat,$a_mat,$nom);
	$select_num = fill_select_num($a_pat,$a_mat,$nom);
	$select_colonia = fill_select_colonia($a_pat,$a_mat,$nom);
	$select_cp = fill_select_cp($a_pat,$a_mat,$nom);
	$select_seccion = fill_select_seccion($a_pat,$a_mat,$nom);

	if (empty($select_seccion)){
		echo "error";
	} else{
  
    
?>
<div class="row">
	<div class="col-md-4">
		<div class="form-group">
		   <label class="col-md-5 control-label">Calle<FONT COLOR="red">*</FONT></label>  
		    <div class="col-md-7 inputGroupContainer">
				<div class="input-group">
					<select  name="calle" id="calle" placeholder="Sección" class="form-control" type="text" required  >
						<option value="">Selecciona una Opción</option>
						<?php echo $select_calle;?>
					</select>
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
					<select  name="numero" id="numero" placeholder="Sección" class="form-control" type="text" required  >
						<option value="">Selecciona una Opción</option>
						<?php echo $select_num;?>
					</select>
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
					<select  name="colonia" id="colonia" placeholder="Sección" class="form-control" type="text" required  >
						<option value="">Selecciona una Opción</option>
						<?php echo $select_colonia;?>
					</select>
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
					<select  name="cp" id="cp" placeholder="Sección" class="form-control" type="text" required  >
						<option value="">Selecciona una Opción</option>
						<?php echo $select_cp;?>
					</select>
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
					<select  name="seccion" id="seccion" placeholder="Sección" class="form-control" type="text" required  >
						<option value="">Selecciona una Opción</option>
						<?php echo $select_seccion;?>
					</select>
					<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
				</div>
			</div>
		</div>	
	</div>
</div>

<?php
	}
?>