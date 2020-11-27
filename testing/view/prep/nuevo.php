<?php
    include('../../controller/funciones.php');
    include('../../model/jugadores/fill.php');
    error_reporting(0);

    $select_movilizador = fill_movilizador();
    $select_seccional = fill_select_seccional();
    $select_zonal = fill_select_zonal();
    $select_a_quien = fill_select_a_quien();
    $nombres_direcciones = fill_nombre_direccion();
    $nombres = fill_nombre($nombres_direcciones);
    $a_paternos = fill_a_paterno($nombres_direcciones);
    $a_maternos = fill_a_materno($nombres_direcciones);
    $calles = fill_calle($nombres_direcciones);
    $colonias = fill_colonia($nombres_direcciones);
    $c_ps = fill_c_p($nombres_direcciones);
    user_login();
?>

<style type="text/css">
	div.datepicker.datepicker-dropdown.dropdown-menu{
		z-index: 1030;
	}
</style>

<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="inicio.php">Inicio</a>
		</li>
		<li>
			<a href="#">PREP</a>
		</li>
		<li class="active">Captura de votos</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	

	<div class="page-header">
		<h1>PREP JM
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Captura de votos
			</small>
		</h1>
		
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->			
				<form class="form-horizontal" method="post"  id="form_prep">
					<!-- Text input-->

					<div class="row">						
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Sección<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input  name="seccion" id="seccion" placeholder="Sección" class="form-control" type="text" required  />
										<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4"></div>
						
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Casilla</label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input  name="casilla" id="casilla" placeholder="Casilla" class="form-control" type="text" />
										<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
									</div>
								</div>
							</div>	
						</div>

					</div>	

					<hr/>


					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">PAN<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="pan" id="pan" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">PRI<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="pri" id="pri" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Morena<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="morena" id="morena" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

					</div>	

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">PRD<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="prd" id="prd" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Partido Verde<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="verde" id="verde" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">PT<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="pt" id="pt" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Movimiento Ciudadano<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="movimiento" id="movimiento" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Unidos Podemos Más<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="unidos" id="unidos" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Partido Libre de Aguascalientes<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="libre" id="libre" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Nueva Alianza<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="alianza" id="alianza" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Jorge Ríos<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="rios" id="rios" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Jose Luis Mares<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="mares" id="mares" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>

					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
							   <label class="col-md-5 control-label">Daniel Segura<FONT COLOR="red">*</FONT></label>  
							    <div class="col-md-7 inputGroupContainer">
									<div class="input-group">
										<input name="segura" id="segura" placeholder="Votos" class="form-control" type="number" required >
										<span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
									</div>
								</div>
							</div>							
						</div>
					</div>
						
					<!-- Button -->
					<div class="form-group">
						<div class="col-xs-12 center">
							<button type="submit" class="btn btn-success"><i class="ace-icon fa fa-floppy-o"></i>Guardar</button>
						</div>
					</div>
				</form>

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
				
<script>	

	$('#form_prep').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		ignore: "",
		rules: {
			seccion: {
				required: true
			},

			casilla: {
				required: true
			},

			pan: {
				required: true,
				number: true
			},

			pri: {
				required: true,
				number: true
			},

			morena: {
				required: true,
				number: true
			},

			prd: {
				required: true,
				number: true
			},

			verde: {
				required: true,
				number: true
			},

			pt: {
				required: true,
				number: true
			},

			movimiento: {
				required: true,
				number: true
			},

			unidos: {
				required: true,
				number: true
			},

			libre: {
				required: true,
				number: true
			},

			alianza: {
				required: true,
				number: true
			},

			rios: {
				required: true,
				number: true
			},

			mares: {
				required: true,
				number: true
			},

			segura: {
				required: true,
				number: true
			}

			
		},

		messages: {
			seccion: {
				required: "Campo Obligatorio"
			},

			casilla: {
				required: "Campo Obligatorio"
			},

			pan: {
				required: "Campo Obligatorio"
			},

			pri: {
				required: "Campo Obligatorio"
			},

			morena: {
				required: "Campo Obligatorio"
			},

			prd: {
				required: "Campo Obligatorio"
			},

			verde: {
				required: "Campo Obligatorio"
			},

			pt: {
				required: "Campo Obligatorio"
			},

			movimiento: {
				required: "Campo Obligatorio"
			},

			unidos: {
				required: "Campo Obligatorio"
			},

			libre: {
				required: "Campo Obligatorio"
			},

			alianza: {
				required: "Campo Obligatorio"
			},

			rios: {
				required: "Campo Obligatorio"
			},

			mares: {
				required: "Campo Obligatorio"
			},

			segura: {
				required: "Campo Obligatorio"
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
				"seccion" : $('#seccion').val(),
				"casilla" : $('#casilla').val(),
				"pan" : $('#pan').val(),
				"pri" : $('#pri').val(),
				"morena" : $('#morena').val(),
				"prd" : $('#prd').val(),
				"verde" : $('#verde').val(),
				"pt" : $('#pt').val(),
				"movimiento" : $('#movimiento').val(),
				"unidos" : $('#unidos').val(),
				"libre" : $('#libre').val(),
				"alianza" : $('#alianza').val(),
				"rios" : $('#rios').val(),
				"mares" : $('#mares').val(),
				"segura" : $('#segura').val(),
			};
			
			
			$.ajax({
					data:  parametros,
					url:   './model/prep/create_prep.php',
					type:  'post',
					
					success:  function (data) {
						if (data==='correcto'){
							swal({
							  title: "¡Datos guardados correctamente!",
							  timer: 3000,
							  icon: "success",
							  button: "Aceptar"
							});
							cambiarcont('view/prep/nuevo.php');
						}
						
						if (data==='error2'){
							swal({
							  title: "¡Error!",
							  text: "¡Ocurrio algo al guardar!",
							  timer: 3000,
							  type: "error",
							  confirmButtonText: "Aceptar"
							});
						}
					}
			});
		}
	
	});

</script>
				
