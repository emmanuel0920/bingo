<?php
    include('../../controller/funciones.php');
    include('../../model/jugadores/fill.php');
   
	$a_pat = $_POST["a_pat"];
	$a_mat = $_POST["a_mat"];
	
	$iguales = fill_iguales($a_pat, $a_mat);
	$tr_jugadores = fill_tr_jugadores($iguales);
?>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Código Postal</th>
							<th>Sección</th>
							<th>Acciones</th>
						</tr>
					</thead>

					<tbody>
					    <?php echo $tr_jugadores;?>
					</tbody>
				</table>
