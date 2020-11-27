<?php
	include('../../model/jugadores/fill_tabla.php');
	include('../../controller/funciones.php');

	user_login();


//$jugadores_capturista= fill_jugadores_usuario($_SESSION['id_usuario']);
//$tr_jugadores = fill_tr_jugadores_usuario ($jugadores_capturista);

	$seccion = $_POST['id'];
	
	$listados = fill_listado($seccion);
	$tr_listado=fill_tr_listado($listados);
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
		<li class="active">Alta de jugadores</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	

	<div class="page-header">
		<h1>Sección	<?php echo $seccion; ?>
		</h1>
		
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">

			<div class="clearfix">
				<div class="clearfix">
					<a href="javascript:cambiarcont('view/jugadores/select_secciones.php');" class="btn btn-primary">
						<i class="ace-icon fa fa-map-marker"></i>
						Cambiar Sección
					</a>	
				</div>
			</div>
			<hr>

			<!-- PAGE CONTENT BEGINS -->
			<div style="overflow-x: auto;"> 
				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>							
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Edad</th>
							<th>Domicilio</th>
							<th>Sección</th>						
							<th>Acciones</th>
						</tr>
					</thead>

					<tbody>
						<?php echo $tr_listado; ?>
					</tbody>
				</table>

				<div id="load_modal_add_juagador"></div>
			</div>
		</div>
	</div>
</div>
