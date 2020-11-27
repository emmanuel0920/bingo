
<div id="modal_check" class="modal" tabindex="-1" style="overflow-y:auto;">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="blue">Información Adicional</h1>
			</div>

			<div class="modal-body">
            	<form class="form-horizontal" method="post"  id="form_marcar">	
            	    <div class="row">			
            			<div class="col-md-4">
            				<div class="form-group">
            				   <label class="col-md-5 control-label">Partido afín<FONT COLOR="red">*</FONT></label>  
            				    <div class="col-md-7 inputGroupContainer">
            						<div class="input-group">
            							<input  name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" type="text" />
            							<span class="input-group-addon"><i class="fa fa-user"></i></span>
            						</div>
            					</div>
            				</div>
            			</div>
            			
            			<div class="col-md-4">
            				<div class="form-group">
            				   <label class="col-md-5 control-label">Miembro activo PAN</label>  
            				    <div class="col-md-7 inputGroupContainer">
            						<div class="input-group">
            							<input  name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" type="text" />
            							<span class="input-group-addon"><i class="fa fa-user"></i></span>
            						</div>
            					</div>
            				</div>	
            			</div>
            
            			<div class="col-md-4">
            				<div class="form-group">
            				   <label class="col-md-5 control-label">Operador contrario<FONT COLOR="red">*</FONT></label>  
            				    <div class="col-md-7 inputGroupContainer">
            						<div class="input-group">
            							<input   name="nombre_jugador" id="nombre_jugador" placeholder="Nombre" class="form-control" type="text" required />
            							<span class="input-group-addon"><i class="fa fa-user"></i></span>
            						</div>
            					</div>
            				</div>
            			</div>
            
            		</div>
            		<div class="row">			
            			<div class="col-md-6">
            				<div class="form-group">
            				   <label class="col-md-5 control-label">Comentarios Positivos<FONT COLOR="red">*</FONT></label>  
            				    <div class="col-md-7 inputGroupContainer">
            						<div class="input-group">
            							<textarea name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" type="text"></textarea>
            							<span class="input-group-addon"><i class="fa fa-user"></i></span>
            						</div>
            					</div>
            				</div>
            			</div>
            			
            			<div class="col-md-6">
            				<div class="form-group">
            				   <label class="col-md-5 control-label">Comentarios Negativos</label>  
            				    <div class="col-md-7 inputGroupContainer">
            						<div class="input-group">
            							<textarea name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" type="text"></textarea>
            							<span class="input-group-addon"><i class="fa fa-user"></i></span>
            						</div>
            					</div>
            				</div>	
            			</div>
            
            		</div>
            	</form>
            </div>	

			<div class="modal-footer">
				<button type="submit" form="form_marcar" class="btn btn-success"><i class="fa fa-save">&nbsp;</i>Marcar Jugador</button>

				<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancelar</button>
			</div>

		</div>	
	</div>
</div>

