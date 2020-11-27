<?php
	include('../../controller/funciones.php');	
	user_login();
?>

<style type="text/css">
	@media only screen and (min-width: 768px){
		div.row > label.control-label{
			text-align: right !important;
		}
	}
</style>

<!-- MODAL PARA SELECCIONAR EL PANTEÓN -->
<div class="modal" tabindex="-1" id="selector_seccion" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h3>Seleccionar Sección</h3>
			</div>
			<div class="modal-body">
				<div class="well from-horizontal">
					<div class="form-group">
					  	<label class="col-md-4 control-label">Nombre del Sección<FONT COLOR="red">*</FONT></label>  
					  	<div class="col-md-6 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-building"></i></span>
								<select class="form-control" name="sel_seccion" id="sel_seccion" onchange="cosas()">
									<option value="" selected disabled hidden>-- Seleccionar Sección --</option>
									<option value="392">Sección 392</option>
									<option value="393">Sección 393</option>
									<option value="394">Sección 394</option>
									<option value="395">Sección 395</option>
									<option value="396">Sección 396</option>
									<option value="397">Sección 397</option>
									<option value="398">Sección 398</option>
									<option value="399">Sección 399</option>
									<option value="400">Sección 400</option>
									<option value="401">Sección 401</option>
									<option value="402">Sección 402</option>
									<option value="403">Sección 403</option>
									<option value="404">Sección 404</option>
									<option value="405">Sección 405</option>
									<option value="406">Sección 406</option>
									<option value="407">Sección 407</option>
									<option value="408">Sección 408</option>
									<option value="409">Sección 409</option>
									<option value="410">Sección 410</option>
									<option value="411">Sección 411</option>
									<option value="412">Sección 412</option>
									<option value="413">Sección 413</option>
									<option value="414">Sección 414</option>
								</select>
							</div>
					  	</div>
					</div>
					<br>
				</div>	
			</div>
			<div class="modal-footer">
				<a role="button" class="btn btn-danger" onclick="scroll_pbm()" href="javascript:cambiarcont('view/jugadores/nuevo.php');"><i class="ace-icon fa fa-times"></i>Cancelar</a>

				<button onclick="cargar_pack()" class="btn btn-success dis" disabled type="button"><i class="ace-icon fa fa-check"></i>Acceder</button>
			</div>
		</div>
	</div>
</div>


<div id="contenido"></div>

<script type="text/javascript">
	//ABRIR MODAL AL CARGAR PÁGINA
    $('#selector_seccion').modal('show');

    //QUITAR LO GRIS DESPUES DE SALIR DEL MODAL
	function scroll_pbm(){
		$('#selector_seccion').modal('hide');
	}

	$('#selector_seccion').on('hidden.bs.modal', function(){
		$('#to_bienvenida').trigger('click');
	});

	function cargar_pack(id_panteon, nombre_panteon){

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
				document.getElementById("contenido").innerHTML=xmlhttp.responseText;
				$('#selector_seccion').modal('hide');
				waitingDialog.hide(); // Set here the image before sending request
				data_tables();
				funciones();
			}
		}

			var id = $('#sel_seccion > option:selected').val();

			waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
			xmlhttp.open("POST","./view/jugadores/busqueda_post.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send('id='+id);


	}	

	function cosas(){
        $('button.dis').attr('disabled', false);
    }


	function data_tables(){
		
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
				style: 'multi'
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
	}	
</script>