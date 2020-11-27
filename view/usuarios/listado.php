<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="inicio.php">Inicio</a>
		</li>
		<li>
			<a href="#">Usuarios</a>
		</li>
		<li class="active">Listado de Usuarios</li>
	</ul><!-- /.breadcrumb -->	
</div>

<link rel="stylesheet" href="assets/css/bingo_estilos/tablas.css" />

<div class="page-content">
	<div class="page-header">
		<h1>
			Usuarios
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Listado de Usuarios
			</small>
		</h1>
		</br><hr>
		<a href="javascript:cambiarcont('view/usuarios/nuevo.php');" class="btn grey">
			<i class="ace-icon fa fa-user"></i>
			Registrar Nuevo Usuario
		</a>
	</div>
			
	<div class="row">
		<div class="col-xs-12">
			<table id="simple-table" class="table  table-bordered table-hover">
				<thead>
					<tr>													
						<th>Nombre Completo</th>
						<th class="hid_xs">Nombre de Usuario</th>
						<th class="hid_xs">Tipo de Usuario</th>
						<th>Acciones</th>
					</tr>

				</thead>

				<tbody>
				<!-- INICIA LLENADO DE TABLA-->
				<!--<?php echo $tr_usuarios;?>-->
					<tr>													
						<td>Fernando Emmanuel Martínez</td>
						<td class="hid_xs">fermar</td>
						<td class="hid_xs">Un simple mortal</td>
						<td class="center">
							<div class="btn-group">
								<a href="#modal-editar" role="button" class="btn btn-xs btn-info" data-toggle="modal" title="Editar Usuario">
									<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a>
								<input type="hidden" name="id_usuario" id="id_usuario" value="">
								
								<button title="Borrar Usuario" class="btn btn-xs btn-danger" onclick="delete_usuario()">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div id="modal-editar" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="blue">Editar Usuario</h1>
						</div>

						<form class="form-horizontal" method="get" id="form_update_usuario">
							<div class="modal-body">
								
								<div class="form-group">
			                        <label class="control-label col-xs-12 col-sm-4 no-padding-right">Nombre Completo<FONT COLOR="red">*</FONT></label>
			                        
			                        <div class="col-xs-12 col-sm-8">
			                            <div class="input-group">
			                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
			                                <input name="nombre" id="nombre" placeholder="#####" class="col-xs-12 col-sm-10" type="text" value="" required minlength="5" />
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="control-label col-xs-12 col-sm-4 no-padding-right">Nombre de Usuario<FONT COLOR="red">*</FONT></label>
			                        
			                        <div class="col-xs-12 col-sm-8">
			                            <div class="input-group">
			                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
			                                <input name="user_name" id="user_name" placeholder="#####" class="col-xs-12 col-sm-10" type="text" value="" required minlength="5" />
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="control-label col-xs-12 col-sm-4 no-padding-right">Tipo de Usuario<FONT COLOR="red">*</FONT></label>
			                        
			                        <div class="col-xs-12 col-sm-8">
			                            <div class="input-group">
			                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
			                                <input name="tipo_usuario" id="tipo_usuario" placeholder="#####" class="col-xs-12 col-sm-10" type="text" value="" required minlength="5" />
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="control-label col-xs-12 col-sm-4 no-padding-right">Contraseña<FONT COLOR="red">*</FONT></label>
			                        
			                        <div class="col-xs-12 col-sm-8">
			                            <div class="input-group">
			                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
			                                <input name="password" id="password" placeholder="#####" class="col-xs-12 col-sm-10" type="text" value="" required minlength="5" />
			                            </div>
			                        </div>
			                    </div>

			                    <div class="form-group">
			                        <label class="control-label col-xs-12 col-sm-4 no-padding-right">Repetir la Contraseña<FONT COLOR="red">*</FONT></label>
			                        
			                        <div class="col-xs-12 col-sm-8">
			                            <div class="input-group">
			                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
			                                <input name="repassword" id="repassword" placeholder="#####" class="col-xs-12 col-sm-10" type="text" value="" required minlength="5" />
			                            </div>
			                        </div>
			                    </div>

							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times">&nbsp;</i>Cancelar</button>

								<button type="submit" class="btn btn-primary"><i class="fa fa-save">&nbsp;</i>Actualizar</button>
							</div>
						</form>	
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<script>

	$("#form_update_usuario").validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: "",
		rules: {
			nombre: {
				required: true,
				minlength: 5
			},

			user_name: {
				required: true,
				minlength: 5
			},

			tipo_usuario: {
				required: true
			},

			password: {
				required: true,
				minlength: 5
			},
			repassword: {
				required: true,
				equalTo: "#password"
			}
		},

		messages: {
			nombre: {
				required: "Favor de introducrir el nombre.",
				minlength: "Nombre muy corto."
			},

			user_name: {
				required: "Favor de introducir el nombre de usuario.",
				minlength: "Nombre muy corto."
			},

			tipo_usuario: {
				required: "Favor de seleccionar el tipo de usuario."
			},

			password: {
				required: "Favor de introducir la contraseña.",
				minlength: "Contraseña muy corta."
			},

			repassword: {
				required: "Favor de reescribir la contraseña.",
				equalTo: "Las contraseñas no coinciden."
			}
		},

		highlight: function (e) {
			$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
		},

		success: function (e) {
			$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
			$(e).remove();
		},

		errorPlacement: function (error, element) {
			if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
				var controls = element.closest('div[class*="col-"]');
				if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
				else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
			}
			else if(element.is('.select2')) {
				error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
			}
			else if(element.is('.chosen-select')) {
				error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
			}
			else error.insertAfter(element.parent());
		},	

		submitHandler: function (form) {
			var parametros = {		               
				"nombre" : $('#nombre').val(),
				"user_name" : $('#user_name').val(), 
				"tipo_usuario" : $('#tipo_usuario').val(),
				"password" : $('#password').val(),
			};
			
			$.ajax({
					data:  parametros,
					url:   './model/usuarios/update_usuario.php',
					type:  'post',
					
					success:  function (data) {
															
							if (data==='correcto'){
								swal({
								  title: "¡Datos guardados correctamente!",
								  timer: 3000,
								  type: "success",
								  confirmButtonText: "Aceptar"
								});

								cambiarcont('view/usuarios/listado.php');
							}
							
							if (data==='error2'){
								swal({
								  title: "¡Error Grave!",
								  text: "¡Ocurrio algo al guardar!",
								  timer: 3000,
								  type: "error",
								  confirmButtonText: "Aceptar"
								});
							}

							if (data==='error1'){
								swal({
								  title: "¡Error!",
								  text: "¡Este usuario ya registró con anterioridad!",
								  timer: 3000,
								  type: "warning",
								  confirmButtonText: "Aceptar"
								});
							}
					}
			});
		}

	});

	function delete_usuario(id_usuario){

		var date = new Date();
		var formattedDate = moment(date).format('YYYY-MM-DD');

		swal({
			title: "¿Desea eliminar este usuario?",
			text: "Si continúa no se podrá recuperar.",
			icon: "warning",
			buttons: true,
			buttons: ["¡Cancelar!", "¡Borrar!"],
			dangerMode: true,
		})

		.then((willDelete) => {
			if (willDelete) {

				var parametros = {	               
				"id_usuario" : id_usuario,
				"status" : formattedDate
				};
					
					
				$.ajax({
					data:  parametros,
					url:   './model/usuarios/delete_usuario.php',
					type:  'post',

					success:  function (data) {
						if (data==='correcto'){
							swal({
							  title: "¡Usuario eliminado correctamente!",
							  type: "success",
							  button: "Aceptar"
							});
							cambiarcont('view/usuarios/listado.php');
						}

													
						if (data==='error'){
							swal({
								title: "¡Error!",
								text: "¡Ocurrio algo al eliminar!",
								type: "error",
								button: "Aceptar"
							});
						}
					}
				})	
			}

			else {
				swal("¡Cancelado!", "Se ha conservado el usuario.", "error");
			}
		})
	}

</script>