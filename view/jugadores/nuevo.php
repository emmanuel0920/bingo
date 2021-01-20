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
    //$movilizadores = fill_colonia($nombres_direcciones);

    //$c_ps = fill_c_p($nombres_direcciones);
    user_login();
?>

<style type="text/css">
	div.datepicker.datepicker-dropdown.dropdown-menu{
		z-index: 1030;
	}

    input[type="file"]#foto_id{
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    label[for="foto_id"] {
        font-size: 14px;
        font-weight: 600;
        color: #fff;
        background-color: #106BA0;
        display: inline-block;
        transition: all .5s;
        cursor: pointer;
        padding: 15px 40px !important;
        text-transform: uppercase;
        width: fit-content;
        text-align: center;
    }

</style>

<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="inicio.php">Inicio</a>
		</li>
		<li>
			<a href="#">Jugadores</a>
		</li>
		<li class="active">Registro de Jugadores</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">


	<div class="page-header">
		<h1>Jugadores
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Registro de Jugadores
			</small>
		</h1>

	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			    <div id="carga_editar">
				<form class="form-horizontal" method="post" id="form_jugadores" name="form_jugadores">
					<!-- Text input-->

                        <div class="row">
                            <div>
                                <div class="form-group" style="display: flex; justify-content: center;">
                                    <label for="foto_id">
                                        <i class="fa fa-camera bigger-150">&nbsp;Tomar Fotografía</i>
                                    </label>
                                   <input id="foto_id" name="foto_id" class="center" type="file" accept="image/*" capture="camera">
                                </div>
                                <div style="display: flex; justify-content: center;">
                                   <img id="preview" src="#" width="150" height="100" style="display: none;">
                                </div>
                            </div>                                
                        </div>

                        <br>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="col-md-5 control-label">Identificador<FONT COLOR="red">*</FONT></label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="identificador" id="identificador" placeholder="Identificador" class="form-control" type="text"  />
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

    					<div class="row">

    						<div class="col-md-4">
    							<div class="form-group">
    							   <label class="col-md-5 control-label">Apellido Paterno<FONT COLOR="red">*</FONT></label>
    							    <div class="col-md-7 inputGroupContainer">
    									<div class="input-group">
    										<input name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" type="text"  />
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
    										<input name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" type="text" onchange="buscar_jugador_apellidos()" />
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
    										<input name="nombre_jugador" id="nombre_jugador" placeholder="Nombre" class="form-control" type="text"   onchange="buscar_jugador()" />
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
        										<input name="calle" id="calle" placeholder="Calle" class="form-control" type="text"  >
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
        										<input name="numero" id="numero" placeholder="Número" class="form-control" type="number"  >
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
        										<input name="colonia" id="colonia" placeholder="Colonia" class="form-control" type="text"  >
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
        										<input name="cp" id="cp" placeholder="Código Postal" class="form-control" type="text"  onchange="compare_jugador()" >
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
        										<input  name="telefono" id="telefono" placeholder="Teléfono" class="form-control" type="number"  onfocus="compare_jugador()" />
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
        										<input  name="seccion" id="seccion" placeholder="Sección" class="form-control" type="text"   />
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
    							   <label class="col-md-5 control-label">Fecha de Nacimiento</label>
    							    <div class="col-md-7 inputGroupContainer">

    									<div class="input-group">
    									    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" onchange="age_calculator()">
    									    <span class="input-group-addon"><i class="ace-icon fa fa-calendar"></i></span>
    									</div>

    								</div>
    							</div>

    						</div>

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
    								   <label class="col-md-5 control-label">Movilizador<FONT COLOR="red">*</FONT></label>
    								    <div class="col-md-5 inputGroupContainer">
    										<div class="input-group">
    											<select name="movilizador" id="movilizador" class="chosen-select form-control" type="text" required>
                                                <option value="">Selecciona una Opción</option>
                                                    <?php echo $select_movilizador;?>
                                            </select>
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
											<select name="seccional" id="seccional" class="chosen-select form-control" type="text" required>
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
        											<input type="radio" name="voto" id="voto" value="1" /> Si
        										</label>
        										<label>
        											<input type="radio" name="voto" id="voto" value="0" /> No
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

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="col-md-5 control-label">¿A quién?</label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="a_quien" id="a_quien" placeholder="A quién" class="form-control" type="text">
                                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="col-md-5 control-label">Porcentaje</label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="porcen" id="porcen" placeholder="Porcentaje" class="form-control" type="number" min="0" max="100" >
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                   <label class="col-md-5 control-label">¿Hacer Movilizador?</label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="make_mov" id="make_mov" value="1" /> Si
                                                </label>
                                                <label>
                                                    <input type="radio" name="make_mov" id="make_mov" value="0"> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    					<div class="row">
    						<div class="col-md-8">
    							<div class="form-group">
    							   <label class="col-md-6 control-label">Observaciones<FONT COLOR="red">*</FONT></label>
    							    <div class="col-md-6 inputGroupContainer">
    									<div class="input-group">
    										<textarea name="observaciones" id="observaciones" placeholder="Observaciones" class="form-control" ></textarea>
    										<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>
        				
                        <div class="form-group">
        					<div class="col-xs-12 center">
        						<button type="submit" class="btn btn-success"><i class="ace-icon fa fa-floppy-o"></i>Guardar</button>
        					</div>
        				</div>

    				</form>
				</div>

				<div id="carga_tabla"></div>

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->

<script>

	function mensaje_error(){
		swal({
		  text: "¡No existe en el padrón, se debe cargar manualmente",
		  icon: "warning",
		  button: "Aceptar"
		});
	}

	function compare_jugador(){

		var a_pat = $('#a_paterno').val();
		var nom = $('#nombre_jugador').val();
		var calle = $('#calle').val();
		var num = $('#numero').val();
		var col = $('#colonia').val();
		var cp = $('#cp').val();
        var identificador = $('#identificador').val();

		if ((a_pat=="")||(nom=="")||(calle=="")||(cp=="")||(col==""))
		{
			swal({
			  title: "¡Error!",
			  text: "¡Favor de llenar los datos obligatorios!",
			  icon: "warning",
			  button: "Aceptar"
			});

		}else{


			var parametros = {
				"a_paterno" : a_pat,
				"a_materno" : $('#a_materno').val(),
				"nombre" : nom,
				"calle" : calle,
				"numero" : num,
				"colonia" : col,
				"cp" : cp,
                "identificador" : identificador
			};




			$.ajax({
					data:  parametros,
					url:   './model/jugadores/compare_jugador.php',
					type:  'post',

					success:  function (data) {
						if (data==='correcto'){

						}

						if (data==='error2'){
							swal({
							  title: "¡Error!",
							  text: "¡Ya existe éste jugador!",
							  icon: "error",
							  button: "Aceptar"
							});

							$("#form_jugadores")[0].reset();

						}
					}
			});
		}
	}


	function buscar_jugador(){

		var a_pat = $('#a_paterno').val();
		var a_mat = $('#a_materno').val();
		var nom = $('#nombre_jugador').val();

		if ((a_pat=="")||(nom==""))
		{
			swal({
			  title: "¡Error!",
			  text: "¡Favor de llenar los datos obligatorios!",
			  icon: "warning",
			  button: "Aceptar"
			});

		}else{

			var xmlhttp;

	        if (window.XMLHttpRequest){
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp=new XMLHttpRequest();
	        }

	        else{// code for IE6, IE5
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }

	        xmlhttp.onreadystatechange=function(){

	            if (xmlhttp.readyState==4 && xmlhttp.status==200){

	                var cargado = xmlhttp.responseText;

	                if (cargado != "error"){
		                document.getElementById("carga_selects").innerHTML=xmlhttp.responseText;
		                waitingDialog.hide();
		            } else {
		            	mensaje_error();
		            	waitingDialog.hide();
		            }

	            }
	        }

	        var datos = "a_pat="+a_pat+"&a_mat="+a_mat+"&nom="+nom;

	        waitingDialog.show('Buscando en el padrón', {dialogSize: 'sm', progressType: 'warning'})
	        xmlhttp.open("POST","./model/jugadores/buscar_jugador.php",true);
	        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	        xmlhttp.send(datos);


		}
	}

	function buscar_jugador_apellidos(){

		var a_pat = $('#a_paterno').val();
		var a_mat = $('#a_materno').val();

		if ((a_pat=="")||(a_mat==""))
		{
			swal({
			  title: "¡Error!",
			  text: "¡Favor de llenar los datos obligatorios!",
			  icon: "warning",
			  button: "Aceptar"
			});

		}else{

			var xmlhttp;

	        if (window.XMLHttpRequest){
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp=new XMLHttpRequest();
	        }

	        else{// code for IE6, IE5
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }

	        xmlhttp.onreadystatechange=function(){

	            if (xmlhttp.readyState==4 && xmlhttp.status==200){

	                var cargado = xmlhttp.responseText;

	                if (cargado != "error"){
		                document.getElementById("carga_tabla").innerHTML=xmlhttp.responseText;
		                waitingDialog.hide();
		            } else {
		            	waitingDialog.hide();
		            }

	            }
	        }

	        var datos = "a_pat="+a_pat+"&a_mat="+a_mat;

	        waitingDialog.show('Buscando en el padrón', {dialogSize: 'sm', progressType: 'warning'})
	        xmlhttp.open("POST","./model/jugadores/buscar_tabla.php",true);
	        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	        xmlhttp.send(datos);


		}
	}

	function buscar_jugador_editar(id){

		var xmlhttp;

	        if (window.XMLHttpRequest){
	            // code for IE7+, Firefox, Chrome, Opera, Safari
	            xmlhttp=new XMLHttpRequest();
	        }

	        else{// code for IE6, IE5
	            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	        }

	        xmlhttp.onreadystatechange=function(){

	            if (xmlhttp.readyState==4 && xmlhttp.status==200){

	                var cargado = xmlhttp.responseText;

	                if (cargado != "error"){
		                document.getElementById("carga_editar").innerHTML=xmlhttp.responseText;
		                waitingDialog.hide();
		                validate_form();
		            } else {
		            	waitingDialog.hide();
		            }

	            }
	        }

	        var datos = "id="+id;

	        waitingDialog.show('Cargando', {dialogSize: 'sm', progressType: 'warning'})
	        xmlhttp.open("POST","./model/jugadores/buscar_editar.php",true);
	        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	        xmlhttp.send(datos);
	}

	function date_calculator(){

		var input_edad = document.getElementById('edad_jugador').value;

		var fecha_actual = new Date();

		var año_actual = document.getElementById('año_actual').value = fecha_actual.getFullYear();
		var mes_actual = document.getElementById('mes_actual').value = fecha_actual.getMonth()+1;
		var dia_actual = document.getElementById('año_actual').value = fecha_actual.getDate();

		var digito = mes_actual.toString().length;

		var año_nacimiento = año_actual - input_edad;

		if (digito == 1 ) {
			var fecha_nacimiento = document.getElementById('fecha_nacimiento').value =  año_nacimiento + "-" + 0 + mes_actual + "-" + dia_actual;

		}else{
			var fecha_nacimiento = document.getElementById('fecha_nacimiento').value =  año_nacimiento + "-" + mes_actual + "-" + dia_actual;
		}

	}

	function age_calculator(){

		var input_nacimiento = document.getElementById('fecha_nacimiento').value;

		var partes = input_nacimiento.split('-');

		var año = partes[0];
		var mes = partes[1];
		var dia = partes[2];

		var fecha_actual = new Date();

		var año_actual = document.getElementById('año_actual').value = fecha_actual.getFullYear();
		var mes_actual = document.getElementById('mes_actual').value = fecha_actual.getMonth()+1;
		var dia_actual = document.getElementById('año_actual').value = fecha_actual.getDate();

		var edad_año = año_actual - año;
		var edad_mes = mes_actual - mes;
		var edad_dia = dia_actual - dia;

		if(año_actual > año){

			if(mes_actual < mes){
				$('#edad_jugador').val(edad_año-1);
			}
			else if(mes_actual > mes){
				$('#edad_jugador').val(edad_año);
			}
			else if (mes_actual == mes){
				if (dia_actual < dia) {
					$('#edad_jugador').val(edad_año-1);
				}
				else{
					$('#edad_jugador').val(edad_año);
				}
			}

		}

	}

	$('.mask_fecha').mask('9999/99/99', {reverse: true});

	jQuery(function($) {
		//ESTO ES PARA ACOMODAR EL FORMATO EN QUE SE MUESTRA LA FECHA
			$.fn.datepicker.defaults.format = "yyyy/mm/dd";
			$('.datepicker').datepicker({
			    startDate: '-3d'
			});
		//TERMINA FORMATO DE LA FECHA

		if(!ace.vars['touch']) {
			$('.chosen-select').chosen({allow_single_deselect:true});
			//resize the chosen on window resize

			$(window)
			.off('resize.chosen')
			.on('resize.chosen', function() {
				$('.chosen-select').each(function() {
					 var $this = $(this);
					 $this.next().css({'width': $this.parent().width()});
				})
			}).trigger('resize.chosen');
			//resize chosen on sidebar collapse/expand
			$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
				if(event_name != 'sidebar_collapsed') return;
				$('.chosen-select').each(function() {
					 var $this = $(this);
					 $this.next().css({'width': $this.parent().width()});
				})
			});


			$('#chosen-multiple-style .btn').on('click', function(e){
				var target = $(this).find('input[type=radio]');
				var which = parseInt(target.val());
				if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
				 else $('#form-field-select-4').removeClass('tag-input-style');
			});
		}



		var tags_paterno = [<?php echo $a_paternos; ?>];

	    $( "#a_paterno" ).autocomplete({
	      source: tags_paterno
	    });



	    var tags_materno = [<?php echo $a_maternos; ?>];

	    $( "#a_materno" ).autocomplete({
	      source: tags_materno
	    });


	    var tags_nombre = [<?php echo $nombres; ?>];

	    $( "#nombre_jugador" ).autocomplete({
	      source: tags_nombre
	    });


	    var tags_calle = [<?php echo $calles; ?>];

	    $( "#calle" ).autocomplete({
	      source: tags_calle
	    });


	    var tags_colonia = [<?php echo $colonias; ?>];

	    $( "#colonia" ).autocomplete({
	      source: tags_colonia
	    });


       



	});


    $('#form_jugadores').validate({
        errorElement: 'div',
        errorClass: 'help-block',
        focusInvalid: false,
        ignore: "",
        rules: {
            a_paterno: {
                required: true
            },

            nombre_jugador: {
                required: true
            },

            porcen: {
                min: 0,
                max: 100
            }
        },

        messages: {
            a_paterno: {
                required: "Campo obligatorio."
            },

            nombre_jugador: {
                required: "Campo obligatorio."
            },

            porcen: {
                min: "El valor mínimo es 0",
                max: "El valor máximo es 100"
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
            
            var myform = document.getElementById('form_jugadores');
            var datos = new FormData(myform);

            // return;
            $.ajax({
                data:  datos,
                url:   './model/jugadores/create_jugador.php',
                type:  'post',
                processData: false,
                contentType: false,

                success:  function (data) {
                    if (data==='correcto'){
                        swal({
                          title: "¡Datos guardados correctamente!",
                          icon: "success",
                          button: "Aceptar"
                        });
                        cambiarcont('view/jugadores/nuevo.php');
                    }

                    if (data==='error2'){
                        swal({
                          title: "¡Error!",
                          text: "¡Ocurrio algo al guardar!",
                          icon: "error",
                          button: "Aceptar"
                        });
                    }

                    if (data==='error'){
                        swal({
                          title: "¡Error!",
                          text: "¡Este jugador ya registró con anterioridad!",
                          icon: "warning",
                          button: "Aceptar"
                        });
                    }
                }
            });
        }

    });


    	function validate_form(){
    	$('#form_edit_jugadores').validate({
    	    errorElement: 'div',
    		errorClass: 'help-block',
    		focusInvalid: false,
    		ignore: "",
    		rules: {
    			a_paterno: {
    				required: true
    			},

    			nombre_jugador: {
    				required: true
    			}


    		},

    		messages: {
    			a_paterno: {
    				required: "Campo obligatorio."
    			},

    			nombre_jugador: {
    				required: "Campo obligatorio."
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
    				"a_paterno" : $('#a_paterno').val(),
    				"a_materno" : $('#a_materno').val(),
    				"nombre" : $('#nombre_jugador').val(),
    				"calle" : $('#calle').val(),
    				"numero" : $('#numero').val(),
    				"colonia" : $('#colonia').val(),
    				"cp" : $('#cp').val(),
    				"telefono" : $('#telefono').val(),
    				"seccion" : $('#seccion').val(),
    				"edad_jugador" : $('#edad_jugador').val(),
    				"fecha_nacimiento" : $('#fecha_nacimiento').val(),
    				"movilizador" : $('#movilizador').val(),/*NO SÉ SI ESTO ESTÉ BIEN*/
    				"id_seccional" : $('#seccional').val(),
    				"id_zonal" : $('#zonal').val(),
    				"voto" : $('#voto:checked').val(),
    				"observaciones" : $('#observaciones').val(),
    				"id" : $('#id').val(),
    			};


    			$.ajax({
    					data:  parametros,
    					url:   './model/jugadores/edit_jugador.php',
    					type:  'post',

    					success:  function (data) {
    							if (data==='correcto'){
    								swal({
    								  title: "¡Datos guardados correctamente!",
    								  timer: 3000,
    								  icon: "success",
    								  button: "Aceptar"
    								});
    								cambiarcont('view/jugadores/nuevo.php');
    							}

    							if (data==='error2'){
    								swal({
    								  title: "¡Error!",
    								  text: "¡Ocurrio algo al guardar!",
    								  timer: 3000,
    								  type: "error",
    								  button: "Aceptar"
    								});
    							}

    							if (data==='error'){
    								swal({
    								  title: "¡Error!",
    								  text: "¡Este jugador ya registró con anterioridad!",
    								  timer: 3000,
    								  type: "warning",
    								  button: "Aceptar"
    								});
    							}
    					}
    			});
    		}

    	});
	}

    //PARA MOSTRAR LA VISTA PREVIA DE LA FOTO

    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#preview').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#foto_id").change(function() {
      readURL(this);
      if (document.getElementById("foto_id").files.length == 0) {
        $("#preview").css("display", "none");  
      }else{
        $("#preview").css("display", "initial");
      }
    });

</script>

