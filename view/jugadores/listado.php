<?php
include('../../model/jugadores/fill_tabla.php');
include('../../controller/funciones.php');

$jugadores_capturista= fill_jugadores_usuario($_SESSION['id_usuario']);

$tr_jugadores = fill_tr_jugadores_usuario ($jugadores_capturista);

?>

<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="inicio.php">Inicio</a>
		</li>
		<li>
			<a href="#">Jugadores</a>
		</li>
		<li class="active">Listado de Jugadores</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	

	<div class="page-header">
		<h1>Jugadores
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Listado de Jugadores
			</small>
		</h1>
		
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div style="overflow-x: auto;"> 
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Nombre</th>
							<th>Calle</th>
							<th>Número</th>
							<th>Colonia</th>
							<!--<th>Fecha de Captura</th>-->
							<th>Acciones</th>
						</tr>
					</thead>

					<tbody>
						
						<?php echo $tr_jugadores; ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>			

<div id="load_modal_update_jugador"></div>
<div id="load_modal_show_jugador_info"></div>

<script type="text/javascript">

	function check_value(id_checkbox){
        
        var check = document.getElementById(id_checkbox);
        if (check.checked == true) {
            check.value = 1;
        }else{
            check.value = 0;
        }
    }

    function check_value_load(){
        
        var voto = document.getElementById("voto");
        if (voto.value == 1) {
            voto.checked = true;
        }else{
            voto.checked = false;
        }
    }

	function form_checker(){
		$("#form_update_jugador :input").change(function() {
		  $("#btn_submit_update_jugador").prop("disabled", false);
		});
	}

	function update_jugador(){
		$('#form_update_jugador').validate({
			errorElement: 'div',
			errorClass: 'help-block',
			focusInvalid: false,
			ignore: "",
			rules: {
				identificador: {
					required: true
				},

				a_paterno: {
					required: true
				},

				nombre_jugador: {
					required: true
				},

				calle: {
					required: true
				},

				numero: {
					required: true
				},

				colonia: {
					required: true
				},

				cp: {
					required: true
				},

				telefono: {
					required: true
				},

				seccion: {
					required: true
				},

				fecha_nacimiento: {
					required: true
				},

				movilizador: {
					required: true
				},

				seccional: {
					required: true
				},

				zonal: {
					required: true
				},

	            porcen: {
	                min: 0,
	                max: 100
	            }

			},

			messages: {
				identificador: {
					required: true
				},

				a_paterno: {
					required: "Campo obligatorio."
				},

				nombre_jugador: {
					required: "Campo obligatorio."
				},

				calle: {
					required: "Campo Obligatorio"
				},

				numero: {
					required: "Campo Obligatorio"
				},

				colonia: {
					required: "Campo Obligatorio"
				},

				cp: {
					required: "Campo Obligatorio"
				},

				telefono: {
					required: "Campo Obligatorio"
				},

				seccion: {
					required: "Campo Obligatorio"
				},

				fecha_nacimiento: {
					required: "Campo Obligatorio"
				},

				movilizador: {
					required: "Campo Obligatorio"
				},

				seccional: {
					required: "Campo Obligatorio"
				},

				zonal: {
					required: "Campo Obligatorio"
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
				var parametros = {
					"identificador" : $('#identificador').val(),
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
					"movilizador" : $('#movilizador').val(),
					"id_seccional" : $('#seccional').val(),
					"id_zonal" : $('#zonal').val(),
					"voto" : $('#voto:checked').val(),
	                "a_quien" : $('#a_quien').val(),
	                "porcen" : $('#porcen').val(),
	                "make_mov" : $('#make_mov:checked').val(),
					"observaciones" : $('#observaciones').val(),
					"id" : $('#id').val(),
				};

				$.ajax({
						data:  parametros,
						url:   './model/jugadores/edit_jugador.php',
						type:  'post',

						success:  function (data) {
							if (data==='correcto'){
								$('#modal_update_jugador').modal('hide');
								swal({
								  title: "¡Datos guardados correctamente!",
								  icon: "success",
								  button: "Aceptar"
								}).then((value) => {
									cambiarcont('view/jugadores/listado.php');
								});
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
	}	

	//JQUERY AJAX
	function modal_update_jugador_foto(paterno, materno, nombre, calle, numero, colonia, cp, telefono, seccion, fecha_nacimiento, edad, movilizador, seccional, zonal, voto, a_quien, posibilidad, observaciones, fecha_captura,identificador, id){
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

                document.getElementById("load_modal_update_jugador").innerHTML=xmlhttp.responseText;
                //show_hide_modals();
                waitingDialog.hide();
                $('#modal_update_jugador').modal('show');
                form_checker();
                update_jugador();
                check_value_load();
            }
        }

        var datos_modal = "paterno="+paterno + "&materno="+materno + "&nombre="+nombre + "&calle="+calle + "&numero="+numero + "&colonia="+colonia + "&cp="+cp + "&telefono="+telefono + "&seccion="+seccion + "&fecha_nacimiento="+fecha_nacimiento + "&edad="+edad + "&movilizador="+movilizador + "&seccional="+seccional + "&zonal="+zonal + "&voto="+voto + "&a_quien="+a_quien + "&posibilidad="+posibilidad + "&observaciones="+observaciones + "&fecha_captura="+fecha_captura+"&identificador="+identificador+"&id="+id;

        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/jugadores/modal_update_jugador.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
    }

    function modal_show_jugador_info(paterno, materno, nombre, calle, numero, colonia, cp, telefono, seccion, fecha_nacimiento, edad, movilizador, seccional, zonal, voto, a_quien, posibilidad, observaciones, fecha_captura,identificador){
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

                document.getElementById("load_modal_show_jugador_info").innerHTML=xmlhttp.responseText;
                //show_hide_modals();
                waitingDialog.hide();
                $('#modal_show_jugador_info').modal('show');
            }
        }

       var datos_modal = "paterno="+paterno + "&materno="+materno + "&nombre="+nombre + "&calle="+calle + "&numero="+numero + "&colonia="+colonia + "&cp="+cp + "&telefono="+telefono + "&seccion="+seccion + "&fecha_nacimiento="+fecha_nacimiento + "&edad="+edad + "&movilizador="+movilizador + "&seccional="+seccional + "&zonal="+zonal + "&voto="+voto + "&a_quien="+a_quien + "&posibilidad="+posibilidad + "&observaciones="+observaciones + "&fecha_captura="+fecha_captura+"&identificador="+identificador;

        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/jugadores/modal_show_jugador_info.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
    }


	//initiate dataTables plugin
		var myTable = 
		$('#dynamic-table')
		//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
		.DataTable( {
			bAutoWidth: false,
			"aoColumns": [
			  { "bSortable": false },
			  null, null,null, null, null,
			  { "bSortable": false }
			],
			"aaSorting": [],
				
			select: {
				// style: 'multi'
			}
	    } );
	
		
		
		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
		
		new $.fn.dataTable.Buttons( myTable, {
			buttons: [
			  {
				"extend": "colvis",
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span>Columnas</span>",
				"className": "btn btn-white btn-primary btn-bold",
				columns: ':not(:first):not(:last)'
			  },
			  {
				"extend": "copy",
				"text": "<i class='fa fa-copy bigger-110 pink'></i> <span>Copiar</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "csv",
				"text": "<i class='fa fa-table bigger-110 orange'></i> <span>Tablas</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "excel",
				"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "pdf",
				"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "print",
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span>Imprimir</span>",
				"className": "btn btn-white btn-primary btn-bold",
				autoPrint: false,
				message: 'This print was produced using the Print button for DataTables'
			  }		  
			]
		} );
		myTable.buttons().container().appendTo( $('.tableTools-container') );
		
		//style the message box
		var defaultCopyAction = myTable.button(1).action();
		myTable.button(1).action(function (e, dt, button, config) {
			defaultCopyAction(e, dt, button, config);
			$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
		});
		
		
		var defaultColvisAction = myTable.button(0).action();
		myTable.button(0).action(function (e, dt, button, config) {
			
			defaultColvisAction(e, dt, button, config);
			
			
			if($('.dt-button-collection > .dropdown-menu').length == 0) {
				$('.dt-button-collection')
				.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
				.find('a').attr('href', '#').wrap("<li />")
			}
			$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
		});
	
		////
	
		setTimeout(function() {
			$($('.tableTools-container')).find('a.dt-button').each(function() {
				var div = $(this).find(' > div').first();
				if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
				else $(this).tooltip({container: 'body', title: $(this).text()});
			});
		}, 500);
		
		myTable.on( 'select', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
			}
		} );
		myTable.on( 'deselect', function ( e, dt, type, index ) {
			if ( type === 'row' ) {
				$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
			}
		} );
	
	
		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});

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

</script>