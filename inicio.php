<?php
	include('controller/conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"  />
		<meta charset="utf-8" />
		<title>BINGO</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="assets/css/bingo_estilos/bingo.css" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesomeold/4.5.0/css/font-awesome.min.css" />
		<link rel="shortcut icon" type="image/ico" href="#"/>
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-colorpicker.min.css" />
		<link rel="stylesheet" type="text/css" href="assets/sweetalert-master/dist/sweetalert.css">
		<link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />
		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		
		
	</head>

	<body class="skin-3 no-skin">
		<nav id="navbar" class="navbar navbar-default ace-save-state navbar-fixed-top" style="height: 50px;">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar" style="z-index: 1 !important;">
					<span class="sr-only">Toggle sidebar</span>
 					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left" style="position: relative; top: -15px; height: 50px;">
					<a href="inicio.php" class="navbar-brand">
						<small>
						<div class="nin">
							<p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis"><i>&nbsp;<!--<img src="img/logo.png" width="25">--></i> Sistema de Jugadores</p>
						</div>	 
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation" style="position: fixed; top: 0px; right: 0px; z-index: 1">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="xxx">
									<small>Bienvenido (a),</small>
									<?php echo $_SESSION['nombre_usuario']; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="index.php?modo=desconectar">
										<i class="ace-icon fa fa-power-off"></i>
										Cerrar Sesión
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</div><!-- /.navbar-container -->
		</nav>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			

			<div id="sidebar" class="sidebar                  responsive-min                    ace-save-state sidebar-fixed sidebar-scroll">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<ul class="nav nav-list">
					<?php if($_SESSION['id_tipo_usuario']==1){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="javascript:cambiarcont('view/reportes/nuevo.php');">
								<i class="menu-icon glyphicon glyphicon-edit"></i>
								<span class="menu-text">Reportes</span>
							</a>

							<b class="arrow"></b>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-book"></i>

								<span class="menu-text">
									Jugadores
								</span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/select_secciones.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Padrón - Jugadores
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/nuevo.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Nuevo Jugador
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/listado.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Listado Jugadores Capturados
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-pie-chart"></i>

								<span class="menu-text">
									PREP JM
								</span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/prep/nuevo.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Captura
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/prep/reporte.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Reportes
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>
						</li>


						<li class="">
							<a href="javascript:cambiarcont('view/mapeo/nuevo.php');">
								<i class="menu-icon fa fa-user"></i>
								<span class="menu-text"> Mapeo </span>
							</a>
						</li>

					<?php } if($_SESSION['id_tipo_usuario']==2){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>						

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-book"></i>

								<span class="menu-text">
									Jugadores
								</span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/select_secciones.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Padrón - Jugadores
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/nuevo.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Nuevo Jugador
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/listado.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Listado Jugadores Capturados
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>
						</li>

						<li class="">
							<a href="javascript:cambiarcont('view/reportes/nuevo.php');">
								<i class="menu-icon fa fa-bar-chart"></i>
								<span class="menu-text">Reportes</span>
							</a>

							<b class="arrow"></b>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-pie-chart"></i>

								<span class="menu-text">
									PREP JM
								</span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/prep/nuevo.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Captura
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/prep/reporte.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Reportes
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>
						</li>

					<?php } if($_SESSION['id_tipo_usuario']==3){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>

					<?php } if($_SESSION['id_tipo_usuario']==4){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="javascript:cambiarcont('view/reportes/nuevo.php');">
								<i class="menu-icon fa fa-bar-chart"></i>
								<span class="menu-text">Reportes</span>
							</a>

							<b class="arrow"></b>
						</li>

					<?php } if($_SESSION['id_tipo_usuario']==5){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>

					<?php } if($_SESSION['id_tipo_usuario']==6){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-book"></i>

								<span class="menu-text">
									Jugadores
								</span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/busqueda.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Padrón - Jugadores
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/nuevo.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Nuevo Jugador
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/listado.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Listado Jugadores Capturados
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>
						</li>
					<?php } if($_SESSION['id_tipo_usuario']==7){ ?>

						<li class="">
							<a href="inicio.php">
								<i class="menu-icon glyphicon glyphicon-home"></i>
								<span class="menu-text"> Inicio </span>
							</a>

							<b class="arrow"></b>
						</li>
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-book"></i>

								<span class="menu-text">
									Jugadores
								</span>

								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/select_secciones.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Padrón - Jugadores
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/nuevo.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Nuevo Jugador
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>

							<ul class="submenu">
								<li class="">
									<a href="javascript:cambiarcont('view/jugadores/listado.php');">
										<i class="menu-icon fa fa-caret-right"></i>
										Listado Jugadores Capturados
									</a>

									<b class="arrow"></b>
								</li>							
							</ul>
						</li>
						
					<?php }?>
					
				</ul><!-- /.nav-list -->


				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			
			<div class="main-content">

				<div class="main-content-inner" id="body_content" name="body_content"></div>
			</div>
		</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content" style="margin-left: 40px;">
						<span class="bigger-120">
							Jesus Development
						</span>

						&nbsp; &nbsp;
						<span class="action-buttons">
						</span>
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->		
		<script src="assets/js/jquery-ui.min.js"></script>	
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="assets/js/dataTables.buttons.min.js"></script>
		<script src="assets/js/buttons.flash.min.js"></script>
		<script src="assets/js/buttons.html5.min.js"></script>
		<script src="assets/js/buttons.print.min.js"></script>
		<script src="assets/js/buttons.colVis.min.js"></script>
		<script src="assets/js/dataTables.select.min.js"></script>
		<script src="assets/js/jquery.validate.min.js"></script>
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/spinbox.min.js"></script>
		<script src="assets/js/bootstrap-datepicker.min.js"></script>
		<script src="assets/js/bootstrap-timepicker.min.js"></script>
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/daterangepicker.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script> 
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/bootbox.js"></script>	
		<script src="assets/js/spin.js"></script>
		<script src="assets/js/jquery.hotkeys.index.min.js"></script>	
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>

		
		<script src="assets/js/bootstrap-load.js"></script>


		<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
		<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
		<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
		<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>
		
		<!--Alert-->
		<script src="assets/js/sweetalert.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">

			function funcion_chida(valor){

				caracteres = valor.length;
				var nombres = document.getElementById("nombres").value;
				var seccion = document.getElementById("seccion").value;

				valor = valor.toUpperCase();


				if(caracteres==15){
					var respuesta = nombres.indexOf(valor) > -1;

					if (respuesta == false){
						var parametros = {		               
							"seccion" : seccion,
						};
						
						$.ajax({
							data:  parametros,
							url:   './model/busquedas/contar_jugador.php',
							type:  'post',
							
							success:  function (data) {																
								console.log(data);
							}
						});

					} else{
						console.log("Se detectó");
					}

					/**/
				}


			}

			jQuery(function($) {				
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);				
				
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
			
			function cargar_pie(){
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})
			}
			
			jQuery(function($) {
				/*$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})*/
			
				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});
			
			
			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  //$.resize.throttleWindow = false;
			
			  /*var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "Finanzas",  data: 38.7, color: "#68BC31"},
				{ label: "Obras Públicas",  data: 24.5, color: "#2091CF"},
				{ label: "Desarrollo Económico",  data: 15, color: "#AF4E96"},
				{ label: "Servicios Públicos",  data: 18.6, color: "#DA5430"},
				{ label: "Administración",  data: 3.2, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne", 
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);
			
			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);
			
			
			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;
			
			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}
				
			 });
			
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});
			
			
			
			
				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}
			
				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}
			
				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}
				
			
				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});*/
			
			
				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			
			
				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });
				
				
				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}
			
				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});
			
			
				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();
			
					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) 
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});
			
			})
			
			
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
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
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
			
				autosize($('textarea[class*=autosize]'));
				
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
			
			
				
				//"jQuery UI Slider"
				//range slider tooltip example
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1] + "";
			
						if( !ui.handle.firstChild ) {
							$("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
							.prependTo(ui.handle);
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('span.ui-slider-handle').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
			
				
				$('#id-input-file-1 , #id-input-file-2').ace_file_input({
					no_file:'No File ...',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});
				//pre-show a file name, for example a previously selected file
				//$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
			
			
				$('#id-input-file-3').ace_file_input({
					style: 'well',
					btn_choose: 'Drop files here or click to choose',
					btn_change: null,
					no_icon: 'ace-icon fa fa-cloud-upload',
					droppable: true,
					thumbnail: 'small'//large | fit
					//,icon_remove:null//set null, to hide remove/reset button
					/**,before_change:function(files, dropped) {
						//Check an example below
						//or examples/file-upload.html
						return true;
					}*/
					/**,before_remove : function() {
						return true;
					}*/
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
				
				//$('#id-input-file-3')
				//.ace_file_input('show_file_list', [
					//{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
					//{type: 'file', name: 'hello.txt'}
				//]);
			
				
				
			
				//dynamically change allowed formats by changing allowExt && allowMime function
				$('#id-file-format').removeAttr('checked').on('change', function() {
					var whitelist_ext, whitelist_mime;
					var btn_choose
					var no_icon
					if(this.checked) {
						btn_choose = "Drop images here or click to choose";
						no_icon = "ace-icon fa fa-picture-o";
			
						whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
						whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
					}
					else {
						btn_choose = "Drop files here or click to choose";
						no_icon = "ace-icon fa fa-cloud-upload";
						
						whitelist_ext = null;//all extensions are acceptable
						whitelist_mime = null;//all mimes are acceptable
					}
					var file_input = $('#id-input-file-3');
					file_input
					.ace_file_input('update_settings',
					{
						'btn_choose': btn_choose,
						'no_icon': no_icon,
						'allowExt': whitelist_ext,
						'allowMime': whitelist_mime
					})
					file_input.ace_file_input('reset_input');
					
					file_input
					.off('file.error.ace')
					.on('file.error.ace', function(e, info) {
						//console.log(info.file_count);//number of selected files
						//console.log(info.invalid_count);//number of invalid files
						//console.log(info.error_list);//a list of errors in the following format
						
						//info.error_count['ext']
						//info.error_count['mime']
						//info.error_count['size']
						
						//info.error_list['ext']  = [list of file names with invalid extension]
						//info.error_list['mime'] = [list of file names with invalid mimetype]
						//info.error_list['size'] = [list of file names with invalid size]
						
						
						/**
						if( !info.dropped ) {
							//perhapse reset file field if files have been selected, and there are invalid files among them
							//when files are dropped, only valid files will be added to our file array
							e.preventDefault();//it will rest input
						}
						*/
						
						
						//if files have been selected (not dropped), you can choose to reset input
						//because browser keeps all selected files anyway and this cannot be changed
						//we can only reset file field to become empty again
						//on any case you still should check files with your server side script
						//because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
					});
					
					
					/**
					file_input
					.off('file.preview.ace')
					.on('file.preview.ace', function(e, info) {
						console.log(info.file.width);
						console.log(info.file.height);
						e.preventDefault();//to prevent preview
					});
					*/
				
				});
			
				
				
				
				;(function($){
					$.fn.datepicker.dates['es'] = {
						days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
						daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
						daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
						months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
						monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
						today: "Hoy",
						monthsTitle: "Meses",
						clear: "Borrar",
						weekStart: 0,
						format: "dd/mm/yyyy"
					};
				}(jQuery));
			
			
				//datepicker plugin
				//link
				$('.date-picker').datepicker({
					language: 'es',
					autoclose: true,
					todayHighlight: true
				})
				//show datepicker when clicking on the icon
				.next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
			
				//or change it into a date range picker
				$('.input-daterange').datepicker({autoclose:true});
			
			
				//to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
				$('input[name=date-range-picker]').daterangepicker({
					'applyClass' : 'btn-sm btn-success',
					'cancelClass' : 'btn-sm btn-default',
					locale: {
						applyLabel: 'Apply',
						cancelLabel: 'Cancel',
					}
				})
				.prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
			
			
				$(".knob").knob();
				
				
				var tag_input = $('#form-field-tags');
				try{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
						/**
						//or fetch data from database, fetch those that match "query"
						source: function(query, process) {
						  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
						  .done(function(result_items){
							process(result_items);
						  });
						}
						*/
					  }
					)
			
					//programmatically add/remove a tag
					var $tag_obj = $('#form-field-tags').data('tag');
					$tag_obj.add('Programmatically Added');
					
					var index = $tag_obj.inValues('some tag');
					$tag_obj.remove(index);
				}
				catch(e) {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//autosize($('#form-field-tags'));
				}
				
				
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'ace-icon fa fa-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					if(!ace.vars['touch']) {
						$(this).find('.chosen-container').each(function(){
							$(this).find('a:first-child').css('width' , '210px');
							$(this).find('.chosen-drop').css('width' , '210px');
							$(this).find('.chosen-search input').css('width' , '200px');
						});
					}
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
				
				
				$(document).one('ajaxloadstart.page', function(e) {
					autosize.destroy('textarea[class*=autosize]')
					
					$('.limiterBox,.autosizejs').remove();
					$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
				});
			
			});
		</script>

		<!--Aquí comienzan mis script--> 
		<script>
			/*funcion para cambiar el contenido a mostrar*/
			function cambiarcont(pagina) 
			{			
			    $("#body_content").html("<img src='img/exit.gif' class='img-responsive center-block' alt='Cargando...' />");
			    $("#body_content").load(pagina);
				$("#body_content").fadeIn(10000);
				
			}
		
		</script>
		
		
		<?php
           	if(($_SESSION['id_tipo_usuario']==6)|| ($_SESSION['id_tipo_usuario']==7) )
           	{ ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#body_content").html("<img src='img/exit.gif' class='img-responsive center-block' alt='Cargando...' />");
			    $('#body_content').load('view/jugadores/nuevo.php');
				$("#body_content").fadeIn(10000);
			});
		</script>

		<?php }
		else { ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$("#body_content").html("<img src='img/exit.gif' class='img-responsive center-block' alt='Cargando...' />");
			    $('#body_content').load('view/busqueda/listado.php');
				$("#body_content").fadeIn(3000);
			});
		</script>

		<?php } ?>

		<script type="text/javascript">
			/*$( document ).ready(function() {

				var act = $('.3_tab').is('.active');
				
				if (act == true) {
					$('#body_content').addClass('min_w');
					
				}

				else{
					$('#body_content').removeClass('min_w');	
				}
			});

			$( window ).resize(function() {

				var act = $('.3_tab').is('.active');	

				if (act == true) {
					$('#body_content').addClass('min_w');
				}

				else{
					$('#body_content').removeClass('min_w');	
				}
			});*/
		</script>


		<script type="text/javascript">
			
			function fill_modal_add(id_juagador)
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
		                document.getElementById("load_modal_add_juagador").innerHTML=xmlhttp.responseText;
		                
		                waitingDialog.hide();
		                $('#modal_add_jugador').modal('show');
		                validador_jugadores();
		                compare_jugador();
		                chosen_select();
		            }
		        }

		        var datos_modal = id_juagador;

		        waitingDialog.show('Cargando Información', {dialogSize: 'sm', progressType: 'warning'})
		        xmlhttp.open("POST","./model/jugadores/modal_add_jugador.php",true);
		        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		        xmlhttp.send(datos_modal);
		    }


		    function chosen_select(){
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
			}


			function compare_jugador(){

				var a_pat = $('#a_paterno').val();
				var nom = $('#nombre_jugador').val();
				var calle = $('#calle').val();
				var num = $('#numero').val();
				var col = $('#colonia').val();
				var cp = $('#cp').val();

				if ((a_pat=="")||(nom=="")||(calle=="")||(cp=="")||(col==""))
				{
					swal({
					  title: "¡Error!",
					  text: "¡Favor de llenar los datos obligatorios!",
					  icon: "warning",
					  confirmButtonText: "Aceptar"
					});

				}else{


					var parametros = {		               
						"a_paterno" : a_pat,
						"a_materno" : $('#a_materno').val(),
						"nombre" : nom,
						"calle" : calle,
						"numero" : num,
						"colonia" : col,
						"cp" : cp
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
									  confirmButtonText: "Aceptar"
									});

									$("#form_jugadores")[0].reset();

								}
							}
					});
				}
			}

				function validador_jugadores(){
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

							lider: {
								required: true
							},

							seccional: {
								required: true
							},

							zonal: {
								required: true
							}

							
						},

						messages: {
							a_paterno: {
								required: "Campo obligatorio."
							},

							nombre_jugador: {
								required: "Campo obligatorio."
							},

							calle: {
								required: "Campo obligatorio."
							},

							numero: {
								required: "Campo obligatorio."
							},

							colonia: {
								required: "Campo obligatorio."
							},

							cp: {
								required: "Campo obligatorio."
							},

							telefono: {
								required: "Campo obligatorio."
							},

							seccion: {
								required: "Campo obligatorio."
							},

							lider: {
								required: "Campo obligatorio."
							},

							seccional: {
								required: "Campo obligatorio."
							},

							zonal: {
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
								"movilizador" : $('#movilizador').val(),
								"id_seccional" : $('#seccional').val(),
								"zonal" : $('#zonal').val(),
								"identificador" : $('#identificador').val(),
							};
							
							
							$.ajax({
									data:  parametros,
									url:   './model/jugadores/create_jugador_auto.php',
									type:  'post',
									
									success:  function (data) {
											if (data==='correcto'){
												swal({
												  title: "¡Datos guardados correctamente!",
												  timer: 3000,
												  icon: "success",
												  button: "Aceptar"
												});
												var id_fila = $('#id_padron').val();
												$('#fila-'+id_fila).remove();
												$('#modal_add_jugador').modal('hide');
											}
											
											if (data==='error2'){
												swal({
												  title: "¡Error al guardar!",
												  text: "",
												  timer: 3000,
												  icon: "error",
												  confirmButtonText: "Aceptar"
												});
											}
											
											if (data==='error'){
												swal({
												  title: "¡Error!",
												  text: "¡Este jugador ya registró con anterioridad!",
												  timer: 3000,
												  icon: "warning",
												  confirmButtonText: "Aceptar"
												});
											}
									}
							});
						}
					
					});
				}
		</script>

	</body>
</html>