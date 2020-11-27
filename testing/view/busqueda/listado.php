<?php
	include('../../model/busquedas/fill.php');	
	$jugadores = jugadores_faltantes();
	$tr_jugadores = fill($jugadores);

	$modal_info_jugadores = fill_modal_info($jugadores); 
	user_login();
?>
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home"></i>
            <a href="#">Inicio</a>
        </li>
        <li class="active">Búsqueda</li>

    </ul>
</div>

<link rel="stylesheet" href="assets/css/bingo_estilos/busqueda.css" />

<div class="page-content">
    <div class="page-header">
		<h1>
			Búsqueda
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Listado
			</small>
		</h1>
    </div>

    <div class="row">
		<div class="col-xs-12">

			<div class="clearfix hidden">
				<div class="pull-right tableTools-container"></div>
			</div>

			<div class="table-header">
				Jugadores faltantes
			</div>
			
			<div>
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
							<th>
								<i class="ace-icon glyphicon glyphicon-credit-card bigger-110 ico_hid"></i>
								Identificador
							</th>
							
							<th>
								<i class="ace-icon fa fa-user bigger-110 ico_hid"></i>
								Nombre
							</th>


							<th class="hid_1">
								<i class="ace-icon fa fa-map-marker bigger-110 ico_hid"></i>
								Dirección-Teléfono
							</th>
							
							<th class="hidden">
									<i class="ace-icon fa fa-map-marker bigger-110 ico_hid"></i>
								Zonal
							</th>

							<th class="hidden">
									<i class="ace-icon fa fa-map-marker bigger-110 ico_hid"></i>
								Seccional
							</th>
							
							<th class="hidden">
								<i class="ace-icon fa fa-at bigger-110 ico_hid"></i>
								Casilla
							</th>

							<th style="min-width: 82.6667px;">
								<i class="ace-icon fa fa-cogs bigger-110 ico_hid"></i>
								Acciones
							</th>
						</tr>
					</thead>

					<tbody>
						<?php echo $tr_jugadores;?>
					</tbody>
				</table>
				<div id="load_modal_check_juagador"></div>
			</div>
		</div>
	</div>

	<?php echo $modal_info_jugadores;?>

</div>

<script>//SWEET ALERT PARA PALOMEAR A LOS USUARIOS
	function palomear_jugador(id, id_movilizador, seccion){
		swal({
			title: "¿Marcar Jugador?",
			text: "¿En realidad desea marcar al jugador?",
			icon: "info",
			buttons: true,
			buttons: ["Cancelar", "Marcar"],
		})

		.then((willDelete) => {
			if (willDelete) {
				
				var parametros = {
					"id" : id,
					"id_movilizador" : id_movilizador,
					"seccion" : seccion
				};

				$.ajax({
					data: parametros,
					url: './model/busquedas/marcar_jugador.php',
					type: 'post',

					success:  function (data) {
						if (data==='correcto'){
							swal({
							  title: "¡Jugador marcado correctamente!",
							  timer: 3000,
							  type: "success",
							  button: "Aceptar"
							});
							//cambiarcont('view/busqueda/listado.php');
						}

													
						if (data==='error'){
							swal({
								title: "¡Error!",
								text: "¡Ocurrio algo al marcar!",
								type: "error",
								button: "Aceptar"
							});
						}
					}
				});
				
			}

			else{
				swal("Cancelado", "El jugador no ha sido marcado.", "error");
			}
		})
	}
	
	function check_jugador(id){
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
		                //document.getElementById("loading").innerHTML = ''; // Hide the image after the response from the
		                document.getElementById("load_modal_check_juagador").innerHTML=xmlhttp.responseText;
		                
		                waitingDialog.hide();
		                $('#modal_check').modal('show');
		            }
		        }

		        var datos_modal = id;

		        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
		        xmlhttp.open("POST","./view/busqueda/modal_check.php",true);
		        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		        xmlhttp.send(datos_modal);
	}
</script>


<script type="text/javascript">//SCRIPTS DE LAS TABLAS SIMPLES Y DINÁMICAS
	jQuery(function($) {
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
			
			
			//"bProcessing": true,
	        //"bServerSide": true,
	        //"sAjaxSource": "http://127.0.0.1/table.php"	,
	
			//,
			//"sScrollY": "200px",
			//"bPaginate": false,
	
			//"sScrollX": "100%",
			//"sScrollXInner": "120%",
			//"bScrollCollapse": true,
			//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
			//you may want to wrap the table inside a "div.dataTables_borderWrap" element
	
			//"iDisplayLength": 50
	
	
			select: {
				style: 'multi'
			}
	    } );
	
		
		
		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
		
		new $.fn.dataTable.Buttons( myTable, {
			buttons: [
			  {
				"extend": "colvis",
				"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
				"className": "btn btn-white btn-primary btn-bold",
				columns: ':not(:first):not(:last)'
			  },
			  {
				"extend": "copy",
				"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
				"className": "btn btn-white btn-primary btn-bold"
			  },
			  {
				"extend": "csv",
				"text": "<i class='fa fa-table bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
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
				"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
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
	
	
	
	
		/////////////////////////////////
		//table checkboxes
		$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
		
		//select/deselect all rows according to table header checkbox
		$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header
			
			$('#dynamic-table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});
		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});
	
	
	
		$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});
		
		
		
		//And for the first simple table, which doesn't have TableTools or dataTables
		//select/deselect all rows according to table header checkbox
		var active_class = 'active';
		$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header
			
			$(this).closest('table').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
				else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
			});
		});
		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
			var $row = $(this).closest('tr');
			if($row.is('.detail-row ')) return;
			if(this.checked) $row.addClass(active_class);
			else $row.removeClass(active_class);
		});
	
		
	
		/********************************/
		//add tooltip for small view action buttons in dropdown menu
		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		
		//tooltip placement on right or left
		function tooltip_placement(context, source) {
			var $source = $(source);
			var $parent = $source.closest('table')
			var off1 = $parent.offset();
			var w1 = $parent.width();
	
			var off2 = $source.offset();
			//var w2 = $source.width();
	
			if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
			return 'left';
		}
		
		
		
		
		/***************/
		$('.show-details-btn').on('click', function(e) {
			e.preventDefault();
			$(this).closest('tr').next().toggleClass('open');
			$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
		});
		/***************/
		
		
		
		
		
		/**
		//add horizontal scrollbars to a simple table
		$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
		  {
			horizontal: true,
			styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
			size: 2000,
			mouseWheelLock: true
		  }
		).css('padding-top', '12px');
		*/
			
			
	})
</script>

<script type="text/javascript">
	$( document ).ready(function() {
	var screen = $( window ).width();

	if (screen < 916) {
		
		$('#dynamic-table_info, #dynamic-table_paginate').parent().removeClass('col-xs-6').addClass('col-xs-12');
		
		if (screen < 768) {
			$('#dynamic-table_wrapper > .row > .col-xs-6').removeClass('col-xs-6').addClass('col-xs-12');
			$('.dataTables_wrapper label').css('display','flex');
			$('#dynamic-table_length').addClass('hidden');
		}

		else{
			$('#dynamic-table_wrapper > .row > .col-xs-12').removeClass('col-xs-6').addClass('col-xs-6');
			$('.dataTables_wrapper label').css('display','inline-block');
			$('#dynamic-table_length').removeClass('hidden');
		}	
	}
	
	else{
		$('#dynamic-table_info, #dynamic-table_paginate').parent().removeClass('col-xs-12').addClass('col-xs-6');
	}
	
});


$( window ).resize(function() {
	var screen = $( window ).width();

	if (screen < 916) {
		
		$('#dynamic-table_info, #dynamic-table_paginate').parent().removeClass('col-xs-6').addClass('col-xs-12');

		if (screen < 768) {
			$('#dynamic-table_wrapper > .row > .col-xs-6').removeClass('col-xs-6').addClass('col-xs-12');
			$('.dataTables_wrapper label').css('display','flex');
			$('#dynamic-table_length').addClass('hidden');
		}

		else{
			$('#dynamic-table_wrapper > .row > .col-xs-12').removeClass('col-xs-6').addClass('col-xs-6');
			$('.dataTables_wrapper label').css('display','inline-block');	
			$('#dynamic-table_length').removeClass('hidden');
		}

	 }

	else{
		$('#dynamic-table_info, #dynamic-table_paginate').parent().removeClass('col-xs-12').addClass('col-xs-6');
	}

});

</script>