<?php
	error_reporting(0);
	include('../../model/reportes/fill.php');
	$total_jugadores = fill_total_jugadores();
	$total_ganadores = fill_total_ganadores();
	$total_singanar = fill_total_singanar();
	$votos_seccion = fill_votos();
	$total_votos = fill_total_votos($votos_seccion);
	$porcentaje_ganadores = round((($total_ganadores * 100)/$total_jugadores),2);
	$porcentaje_singanr = round((($total_votos * 100)/80000),2);
	$total_seccion = total_seecion();
	$grafica_seccion = grafica_seccion($total_seccion);
	$total_jugadores_movilizador = fill_jugadores_movilizador();
	$total_jugadores_movilizador = fill_ganadores_movilizador($total_jugadores_movilizador);
	$votos_reporte_seccion = fill_votos_reporte($votos_seccion);
	$div_reportes = fill_div_reporte($votos_reporte_seccion);
	
?>

<link rel="stylesheet" href="assets/css/bingo_estilos/tablas.css" />

<style type="text/css">
	h5.widget-title{

	}
</style>

<div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="inicio.php">Inicio</a>
		</li>
		<li>
			<a href="#">Reportes</a>
		</li>
		<li class="active"></li>
	</ul><!-- /.breadcrumb -->	
</div>

<div class="page-content">
	<div class="page-header">
		
		<h1>
			Reportes
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Nuevo Reporte
			</small>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">

			<div class="tabbable">
							
				<ul id="inbox-tabs" class="nav nav-tabs padding-16 tab-size-bigger tab-space-1">		
					<?php if($_SESSION['id_tipo_usuario']!=4){ ?>
					<li class="active">
						<a data-toggle="tab" href="#sent">
							<i class="blue ace-icon glyphicon glyphicon-list-alt bigger-130"></i>
							<span class="tab_hid">Reporte General</span>
						</a>
					</li>
					<?php } ?>

					<li class="3_tab">
						<a data-toggle="tab" href="#received">
							<i class="orange ace-icon fa fa-users bigger-130"></i>
							<span class="tab_hid">Reporte por Movilizador</span>
						</a>
					</li>					
					
					<li>
						<a data-toggle="tab" href="#seccional">
							<i class="red ace-icon fa fa-user bigger-130"></i>
							<span class="tab_hid">Reporte por Seccional</span>
						</a>
					</li>

				</ul>

				<div class="tab-content no-padding">
		
<!-- ------------------------------------------------------------------TAB INFORMACION--------------------------------------------------------- -->

					<?php if($_SESSION['id_tipo_usuario']!=4){ ?>

					<div id="sent" class="tab-pane fade <?php if($_SESSION['id_tipo_usuario']!=4){ ?>in active <?php } ?>">

						<div class="message-container">
							<div class="clearfix">
								<div class="col-xs-12">									
									
                                    <h1 class="center blue">Reporte General</h1>	
									
									<div class="row">
										<div class="col-xs-4 center">
												<hr />
												<h2 class="green">PADRÓN</h2>
													<div class="easy-pie-chart percentage" data-percent="100" data-color="#28af38" data-width="" data-size="220">
														<span style="font-size: 50px; color: #28af38;" class="percent">0<?//echo $total_jugadores;?></span>
													</div>
											</div>
											<div class="col-xs-4 center">

													<hr />
													<h2 class="red">VOTOS</h2>
													<div class="easy-pie-chart percentage" data-percent="<?echo $porcentaje_singanr;?>" data-color="#e82200" data-size="220">
														<span style="font-size: 50px; color: #e82200;" class="percent"><?echo $total_votos;?></span>
													</div>
											</div>
											<div class="col-xs-4 center">

													<hr />
													<h2 class="blue">VOTOS PAN</h2>
													<div class="easy-pie-chart percentage" data-percent="<?echo $porcentaje_ganadores;?>" data-color="#4c99ff" data-size="220">
														<span style="font-size: 50px; color: #4c99ff;" class="percent"><?echo $total_ganadores;?></span>
													</div>
											</div><!-- /.col -->
									</div>	
									<hr>

								</div>								
							</div>
						</div>	
					</div>

					<?php } ?>
							
<!-- ------------------------------------------------------------------TAB Reporte por Movilizador-------------------------------------------- -->				
					<!--TAB-->
					<div id="received" class="tab-pane fade <?php if($_SESSION['id_tipo_usuario']==4){ ?> in active <?php } ?>" >
						<div class="message-container">
							<div class="clearfix">
								<h3 class="center blue">Reporte Por Movilizador</h3>	
							
								<div class="row">
									<div class="col-xs-12">
										<?php
										$table_jugador_usuario ='<div style="overflow-x: auto;"><table id="dynamic-table2" class="table table-striped table-bordered table-hover"><thead><th class="hidden"></th><th>Nombre Movilizador</th><th class="hidden"></th><th>Total Personas</th><th>Asistentes</th><th>No asistentes</th><th class="hidden"></th><tbody>';
										foreach ($total_jugadores_movilizador as $jugadores_movilizador) 
										{

											$total_sin_ganar_usuario = $jugadores_movilizador['total']-$jugadores_movilizador['total_ganadores'];
											$table_jugador_usuario.='
												<tr>
													<td class="hidden"></td>
													<td>
														'.$jugadores_movilizador['nombre'].'<br>
														
													</td>
													<td class="hidden"></td>

													<td>
														<div style="display: inline;" class="brk_ln">
															<span>
																'.$jugadores_movilizador['total'].'
															</span>
														</div>

														<div style="display: inline;" class="brk_ln">	
				
															<a onclick="modal_total_mov('.$jugadores_movilizador['id'].')" role="button" class="btn btn-xs btn-primary ali_gn" style="float: right;" data-toggle="modal" title="Ver más información">

										
																<i class="ace-icon fa fa-users bigger-120">
																</i>
															</a>
															
														</div>
													</td>

													<td>
														<div style="display: inline;" class="brk_ln">
															<span>'.$jugadores_movilizador['total_ganadores'].'
															</span>
														</div>
														
														<div style="display: inline;" class="brk_ln">	
															<a onclick="modal_si_mov('.$jugadores_movilizador['id'].')" style="float: right;" role="button" class="btn btn-xs btn-success ali_gn" data-toggle="modal" title="Ver más información">
																<i class="ace-icon fa fa-users bigger-120"></i>
															</a>
														</div>	
													</td>

													<td>
														<div style="display: inline;" class="brk_ln">
															<span>'.$total_sin_ganar_usuario.'</span>
														</div>

														<div style="display: inline;" class="brk_ln">
															<a onclick="modal_no_mov('.$jugadores_movilizador['id'].')" role="button" class="btn btn-xs btn-danger ali_gn" style="float: right;" data-toggle="modal" title="Ver más información">
																<i class="ace-icon fa fa-users bigger-120"></i>
															</a>
														</div>
													</td>
													<td class="hidden"></td>
												</tr>
											';
										}
										echo $table_jugador_usuario.='</tbody></table></div>';
										/*foreach ($total_jugadores_movilizador as $jugadores_movilizador) 
										{
											$modales = modales($jugadores_movilizador['id']);

											echo $modales;
										}*/
										?>

										<div id="load_modal_mov"></div>

										
									</div>	
								</div>
							</div>
						</div>
					</div>

					<div id="seccional" class="tab-pane fade">
						<div class="message-container">
							<div class="clearfix" style="padding: 5px;">						
								<br>
								
									<?php echo $div_reportes;?>		
												
								
							</div>	
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	cargar_pie();
	
	function modal_total_mov(id)
    {

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
                document.getElementById("load_modal_mov").innerHTML=xmlhttp.responseText;
                
                waitingDialog.hide();
                $('#modal_total').modal('show');
                load_tabla_perrona();
            }
        }

        var datos_modal = id;

        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/reportes/modal_total_mov.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
    }


    function modal_si_mov(id)
    {

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
                document.getElementById("load_modal_mov").innerHTML=xmlhttp.responseText;
                
                waitingDialog.hide();
                $('#modal_asistentes').modal('show');
                load_tabla_perrona();
            }
        }

        var datos_modal = id;

        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/reportes/modal_si_mov.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
    }


    function modal_no_mov(id)
    {

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
                document.getElementById("load_modal_mov").innerHTML=xmlhttp.responseText;
                
                waitingDialog.hide();
                $('#modal_no').modal('show');
                load_tabla_perrona();
            }
        }

        var datos_modal = id;

        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
        xmlhttp.open("POST","./view/reportes/modal_no_mov.php",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.send(datos_modal);
    }


    function load_tabla_perrona(){

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
    }

</script>

<script type="text/javascript">
	jQuery(function($) {
		//initiate dataTables plugin
		var myTable = 
		$('#dynamic-table2')
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
		myTable.buttons().container().appendTo( $('.tableTools2-container') );
		
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
			$('.dt-button-collection').appendTo('.tableTools2-container .dt-buttons')
		});
	
		////
	
		setTimeout(function() {
			$($('.tableTools2-container')).find('a.dt-button').each(function() {
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
		$('#dynamic-table2 > thead > tr > th input[type=checkbox], #dynamic-table2_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header
			
			$('#dynamic-table2').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});
		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table2').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});
	
		$(document).on('click', '#dynamic-table2 .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});
		
	})
</script>

<script type="text/javascript">
	jQuery(function($) {
		//initiate dataTables plugin
		var myTable = 
		$('#dynamic-table3')
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
		myTable.buttons().container().appendTo( $('.tableTools3-container') );
		
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
			$('.dt-button-collection').appendTo('.tableTools3-container .dt-buttons')
		});
	
		////
	
		setTimeout(function() {
			$($('.tableTools3-container')).find('a.dt-button').each(function() {
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
		$('#dynamic-table3 > thead > tr > th input[type=checkbox], #dynamic-table3_wrapper input[type=checkbox]').eq(0).on('click', function(){
			var th_checked = this.checked;//checkbox inside "TH" table header
			
			$('#dynamic-table3').find('tbody > tr').each(function(){
				var row = this;
				if(th_checked) myTable.row(row).select();
				else  myTable.row(row).deselect();
			});
		});
		
		//select/deselect a row when the checkbox is checked/unchecked
		$('#dynamic-table3').on('click', 'td input[type=checkbox]' , function(){
			var row = $(this).closest('tr').get(0);
			if(this.checked) myTable.row(row).deselect();
			else myTable.row(row).select();
		});
	
		$(document).on('click', '#dynamic-table3 .dropdown-toggle', function(e) {
			e.stopImmediatePropagation();
			e.stopPropagation();
			e.preventDefault();
		});
		
	})
</script>