<?php
    include('../../controller/funciones.php');
    include('../../model/prep/fill.php');
    error_reporting(0);

    $reporte_prep = 0;
    $reporte_prep = fill_prep();
    $total = $reporte_prep['total_pan'] + $reporte_prep['total_pri'] + $reporte_prep['total_morena'] + $reporte_prep['total_prd'] + $reporte_prep['total_pv'] + $reporte_prep['total_pt'] + $reporte_prep['total_mc'] + $reporte_prep['total_upm'] + $reporte_prep['total_pla'] + $reporte_prep['total_na'] + $reporte_prep['total_jr'] + $reporte_prep['total_jlm'] + $reporte_prep['total_ds'];
    user_login();
?>

<style type="text/css">
	
	.progress-bar-pan {
	    background-color: #2f0091;
	}

	.progress-bar-pri {
	    background-color: #de0014;
	}

	.progress-bar-mor {
	    background-color: #bf0004;
	}

	.progress-bar-prd {
	    background-color: #fdd700;
	}

	.progress-bar-verde {
	    background-color: #00c93e;
	}

	.progress-bar-pt {
	    background-color: #e60000;
	}

	.progress-bar-mov {
	    background-color: #ff7e00;
	}

	.progress-bar-unid {
	    background-color: #00a8f4;
	}

	.progress-bar-libre {
	    background-color: #2b5dc4;
	}

	.progress-bar-ali {
	    background-color: #00a8ae;
	}

	.progress-bar-rios {
	    background-color: #05338D;
	}

	.progress-bar-mares {
	    background-color: #05338D;
	}

	.progress-bar-seg {
	    background-color: #05338D;
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
		<li class="active">Reporte de votos</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	

	<div class="page-header">
		<h1>PREP JM
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Reporte de votos
			</small>
		</h1>
		
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<div class="clearfix">
				<div class="col-xs-12">
					
					<h3 class="blue center">Reporte General</h3>

					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="text-right">
								<b>Total: <?echo $total;?></b>
							</div>
						</div>	

						<div class="col-sm-4 col-xs-12">
							<div class="progress pos-rel" data-percent="100%">
								<div class="progress-bar progress-bar-inverse" style="width:100%;"></div>
							</div>
						</div>
					</div>	
						
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div class="text-right">
								<b>PAN: <?echo $reporte_prep['total_pan'];?></b>
							</div>	
						</div>

						<div class="col-sm-4 col-xs-12">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_pan'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-pan" style="width:<?echo round(($reporte_prep['total_pan'] * 100)/ $total, 2);?>%;"></div>
							</div>	
						</div>	
					</div>		
						
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>PRI: <?echo $reporte_prep['total_pri'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_pri'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-pri" style="width:<?echo round(($reporte_prep['total_pri'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Morena: <?echo $reporte_prep['total_morena'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_morena'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-mor" style="width:<?echo round(($reporte_prep['total_morena'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>PRD: <?echo $reporte_prep['total_prd'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_prd'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-prd" style="width:<?echo round(($reporte_prep['total_prd'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Partido Verde: <?echo $reporte_prep['total_pv'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_pv'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-verde" style="width:<?echo round(($reporte_prep['total_pv'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>PT: <?echo $reporte_prep['total_pt'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_pt'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-pt" style="width:<?echo round(($reporte_prep['total_pt'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Movimiento Ciudadano: <?echo $reporte_prep['total_mc'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_mc'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-mov" style="width:<?echo round(($reporte_prep['total_mc'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Unidos Podemos Más: <?echo $reporte_prep['total_upm'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_upm'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-unid" style="width:<?echo round(($reporte_prep['total_upm'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Partido Libre de Aguascalientes: <?echo $reporte_prep['total_pla'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_pla'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-libre" style="width:<?echo round(($reporte_prep['total_pla'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Nueva Alianza: <?echo $reporte_prep['total_na'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_na'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-ali" style="width:<?echo round(($reporte_prep['total_na'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Jorge Ríos Contreras: <?echo $reporte_prep['total_jr'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_jr'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-rios" style="width:<?echo round(($reporte_prep['total_jr'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>José Luis Mares Medina: <?echo $reporte_prep['total_jlm'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_jlm'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-mares" style="width:<?echo round(($reporte_prep['total_jlm'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="text-right"> 
								<b>Jairo Daniel Segura Pérez: <?echo $reporte_prep['total_ds'];?></b>
							</div>	
						</div>

						<div class="col-xs-12 col-sm-4">
							<div class="progress pos-rel" data-percent="<?echo round(($reporte_prep['total_ds'] * 100)/ $total, 2);?>%">
								<div class="progress-bar progress-bar-seg" style="width:<?echo round(($reporte_prep['total_ds'] * 100)/ $total, 2);?>%;"></div>
							</div>
						</div>
					</div>
                    <?php echo $grafica_seccion;?>
				</div>								
			</div>
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
				
