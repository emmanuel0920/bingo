<?php
    include('../../controller/jugadores/funciones_jugadores.php');
    $id = $_POST['id'];
    
    $jugador = get_jugador($id);
    
?>
    <form class="form-horizontal" method="post"  id="form_edit_jugadores">
        <div class="row">
            <div class="col-md-4">
            	<div class="form-group">
            	   <label class="col-md-5 control-label">Apellido Paterno<FONT COLOR="red">*</FONT></label>  
            	    <div class="col-md-7 inputGroupContainer">
            			<div class="input-group">
            				<input  name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" type="text"  value="<?php echo $jugador['a_paterno'];?>" />
            				<input  name="id" id="id"  class="form-control" type="hidden"  value="<?php echo $id;?>" />
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
            				<input  name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" type="text" value="<?php echo $jugador['a_materno'];?>" />
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
            				<input  name="nombre_jugador" id="nombre_jugador" placeholder="Nombre" class="form-control" type="text"  value="<?php echo $jugador['nombre'];?>" />
            				<span class="input-group-addon"><i class="fa fa-user"></i></span>
            			</div>
            		</div>
            	</div>
            </div>
        
        </div>
        
        <div id="carga_selects">
        <div class="row">
        	<div class="col-md-4">
        		<div class="form-group">
        		   <label class="col-md-5 control-label">Calle<FONT COLOR="red">*</FONT></label>  
        		    <div class="col-md-7 inputGroupContainer">
        				<div class="input-group">
        					<input name="calle" id="calle" placeholder="Calle" class="form-control" type="text" >
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
        					<input name="numero" id="numero" placeholder="Número" class="form-control" type="number" >
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
        					<input name="colonia" id="colonia" placeholder="Colonia" class="form-control" type="text" >
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
        					<input name="cp" id="cp" placeholder="Código Postal" class="form-control" type="text"  >
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
        					<input  name="telefono" id="telefono" placeholder="Teléfono" class="form-control" type="number"  />
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
        					<input  name="seccion" id="seccion" placeholder="Sección" class="form-control" type="text" value="<?php echo $jugador['seccion'];?>" />
        					<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
        				</div>
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
    										<input name="edad_jugador" id="edad_jugador" placeholder="Edad" class="form-control" type="number" onchange="date_calculator()">
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
    											<input  name="movilizador" id="movilizador" placeholder="Movilizador" class="form-control" type="text"  >
    												
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
    							    <div class="col-md-4 inputGroupContainer">
    									<div class="input-group">
    											<select name="seccional" id="seccional" placeholder="Seccional" class="chosen-select form-control" type="text" required>
    												<option value="1">Selecciona una Opción</option>
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
    										<select  name="zonal" id="zonal" placeholder="Zonal" class="form-control" type="text" required>
    											<option value="1">Selecciona una Opción</option>
    												<?php echo $select_zonal;?>
    										</select>
    										<span class="input-group-addon"><i class="fa fa-user"></i></span>
    									</div>
    								</div>
    							</div>
    						</div>
    						
    						<div class="col-md-4">
    							<div class="form-group">
    							   <label class="col-md-5 control-label">¿Votó?<FONT COLOR="red">*</FONT></label>  
    							    <div class="col-md-7 inputGroupContainer">
    									<div class="input-group">
    										<div class="radio">
        										<label>
        											<input type="radio" name="genero" id="voto" value="1" /> Si
        										</label>
        										<label>
        											<input type="radio" name="genero" id="voto" value="0" /> No
        										</label>
        									</div>
    									</div>
    								</div>
    							</div>
    						</div>
    
    						<input id="año_actual" type="hidden">
    						<input id="mes_actual" type="hidden">
    						<input id="dia_actual" type="hidden">
    
    					</div>
    					
    					<div class="row">
    						<div class="col-md-8">
    							<div class="form-group">
    							   <label class="col-md-6 control-label">Observaciones<FONT COLOR="red">*</FONT></label>  
    							    <div class="col-md-6 inputGroupContainer">
    									<div class="input-group">
    										<textarea name="observaciones" id="observaciones" placeholder="Observaciones" class="form-control" ><?php echo $jugador['observaciones'];?></textarea>
    										<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
        
        <div class="row">
        
        <input id="año_actual" type="hidden">
        <input id="mes_actual" type="hidden">
        <input id="dia_actual" type="hidden">
        
        </div>
        
        <!-- Button -->
        <div class="form-group">
        <div class="col-xs-12 center">
        	<button type="submit" class="btn btn-success"><i class="ace-icon fa fa-floppy-o"></i>Actualizar</button>
        </div>
        </div>
    </form>