<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="inicio.php">Inicio</a>
		</li>
		<li>
			<a href="#">Búsqueda</a>
		</li>
		<li class="active"></li>
	</ul><!-- /.breadcrumb -->	
</div>

<div class="page-content">
	<div class="page-header">
		
		<h1>
			Búsqueda
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Nueva Búsqueda
			</small>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<form class="well form-horizontal" method="get" id="form_busqueda">
				
				<div class="form-group">
					<label class="col-md-4 control-label">Buscar</label>
					<div class="col-xs-4">
						<div class="inpurGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="ace-icon fa fa-search"></i></span>
								<input class="form-control" placeholder="Escribir aquí el nombre" type="text" name="input_buscar" id="input_buscar">	
							</div>
						</div>
							
					</div>
				</div>

				<div class="form-group">
				  	<label class="col-md-4 control-label"></label>
				  	<div class="col-md-4">
						<button type="submit" class="btn btn-success"> <i class="ace-icon fa fa-search"></i> &nbsp Buscar </button>
					</div>
				</div>

			</form>


			<div class="tabbable">
							
				<ul id="inbox-tabs" class="nav nav-tabs padding-16 tab-size-bigger tab-space-1">

					<li class="active">
						<a data-toggle="tab" href="#sent">
							<i class="black ace-icon fa fa-users bigger-130"></i>
							<span id="ban_rec" class="">Total Ciudadanos</span>
						</a>
					</li>

					<li>
						<a data-toggle="tab" href="#received">
							<i class="blue ace-icon fa fa-question bigger-130"></i>
							<span id="ban_env" class="">Tomados en Cuenta</span>
						</a>
					</li>

					<li>
						<a data-toggle="tab" href="#bandeja">
							<i class="green ace-icon fa fa-check bigger-130"></i>
							<span id="ban_env" class="">Ciudadanos Presentados</span>
						</a>
					</li>

				</ul>

				<div class="tab-content no-border no-padding">
					
<!-- ------------------------------------------------------------------TAB RECIBIDOS--------------------------------------------------------- -->
				
					
					<div id="sent" class="tab-pane fade in active">

						<div class="message-container">
							<div id="id-message-list-navbar" class="message-navbar clearfix">
								<div class="message-bar">
									<div class="message-infobar" id="id-message-infobar">
										<span style="display: block;" class="blue bigger-150">PADRÓN</span>
										<span class="grey bigger-110">LISTA DEL TOTAL DE CIUDADANOS</span>
									</div>

									<div class="message-toolbar hide">
										<button type="button" class="btn btn-xs btn-white btn-primary">
											<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
											<span class="bigger-110">Borrar</span>
										</button>
									</div>
								</div>
							</div>

							<div class="message-list-container">
								<div class="message-list" id="message-list">
									AQUÍ IRA EL ECHO DEL PADRÓN
								</div>
							</div>

							<div class="message-footer clearfix" >
								<div class="holder" style="visibility: hidden;"></div>
								<div class="row">

									<div id="izquierda" class="pull-left"> <div id="numero_oficios"></div></div>	

									<div id="derecha" class="pull-right">
										<div class="inline middle" id="numero_pagina"></div>
										&nbsp; &nbsp;
										<ul class="pagination middle">
											<li class="primero">
												<a href="#">
													<i class="ace-icon fa fa-step-backward middle"></i>
												</a>
											</li>

											<li class="anterior">
												<a href="#">
													<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
												</a>
											</li>

											<li>
												<span>
													<input id="input_numero_pagina" value="1" maxlength="3" type="text" />
												</span>
											</li>

											<li class="proximo">
												<a href="#">
													<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
												</a>
											</li>

											<li class="ultimo">
												<a href="#">
													<i class="ace-icon fa fa-step-forward middle"></i>
												</a>
											</li>
										</ul>	
									</div>	
								</div>
							</div>
						</div>
					</div>
<!-- ------------------------------------------------------------------TAB ENVIADOS--------------------------------------------------------- -->
					<div id="received" class="tab-pane fade">
						<div class="message-container">
							<div id="id-message-list-navbar" class="message-navbar clearfix">
								<div class="message-bar">
									<div class="message-infobar" id="id-message-infobar">
										<span style="display: block;" class="blue bigger-150">ASEGURADOS</span>
										
										<span class="grey bigger-110">LISTA DEL TOTAL DE ASEGURADOS</span>

									</div>

									<div class="message-toolbar hide">
										<button type="button" class="btn btn-xs btn-white btn-primary">
											<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
											<span class="bigger-110">Borrar</span>
										</button>
									</div>
								</div>
							</div>

							ECHO DE LOS JUGADORES ASEGURADOS

							<div class="message-footer clearfix">
								<div id="izq" class="pull-left"> ### Jugadores asegurados</div>

								<div id="der" class="pull-right">
									<div class="inline middle"> Página 1 de TOTAL DE PAGINAS? </div>

									&nbsp; &nbsp;
									<ul class="pagination middle">
										<li class="disabled">
											<span>
												<i class="ace-icon fa fa-step-backward middle"></i>
											</span>
										</li>

										<li class="disabled">
											<span>
												<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
											</span>
										</li>

										<li>
											<span>
												<input value="1" maxlength="3" type="text" />
											</span>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-step-forward middle"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

<!-- ------------------------------------------------------------------TAB BANDEJA DE SALIDA-------------------------------------------- -->
					<div id="bandeja" class="tab-pane fade">
						<div class="message-container">
							<div id="id-message-list-navbar" class="message-navbar clearfix">
								<div class="message-bar">
									<div class="message-infobar" id="id-message-infobar">
										<span style="display: block;" class="blue bigger-150">Total de Asistencias</span>

										<span class="grey bigger-110">COMPITAS QUE YA SE RIFARON</span>
										
									</div>

									<div class="message-toolbar hide">
										<button type="button" class="btn btn-xs btn-white btn-primary">
											<i class="ace-icon fa fa-trash-o bigger-125 red"></i>
											<span class="bigger-110">Borrar</span>
										</button>
									</div>
								</div>
							</div>

							IMPRIMIR LOS QUE YA LLEGARON

							<div class="message-footer clearfix">
								<div id="izq" class="pull-left"> ### JUGADORES en total </div>

								<div id="der" class="pull-right">
									<div class="inline middle"> Página 1 de varias paginas??? </div>

									&nbsp; &nbsp;
									<ul class="pagination middle">
										<li class="disabled">
											<span>
												<i class="ace-icon fa fa-step-backward middle"></i>
											</span>
										</li>

										<li class="disabled">
											<span>
												<i class="ace-icon fa fa-caret-left bigger-140 middle"></i>
											</span>
										</li>

										<li>
											<span>
												<input value="1" maxlength="3" type="text" />
											</span>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-caret-right bigger-140 middle"></i>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="ace-icon fa fa-step-forward middle"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /.tab-content -->
			</div><!-- /.tabbable -->


		</div>
	</div>		
</div>

<script type="text/javascript">
	$('#form_busqueda').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: "",
		rules: {
			input_buscar: {
				required: true
			}
		},

		messages: {
			input_buscar: {
				required: "Favor de introducir algo para la búsqueda."
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
				"input_buscar" : $('#input_buscar').val(),
			};
			
			$.ajax({
					data:  parametros,
					url:   './model/usuarios/create_usuario.php',
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
</script>
