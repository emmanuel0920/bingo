<?php
	include('../../controller/busquedas/funciones_busqueda.php');
	$id = $_POST['id'];
	$id_movilizador = $_POST['id_movilizador'];
	$seccion = $_POST['seccion'];
	if(create_ganador($id, $id_movilizador))
	{
		if(compare_seccion($seccion))
		{
			if(update_cuenta($seccion))
			{
				$mensaje= "correcto";
			}else{
				$mensaje= "error al actualizar";
			}
		}else{
			if(create_cuenta($seccion))
			{
				$mensaje= "correcto";
			}else{
				$mensaje= "error al crear seccion;";
			}
		}
	}else{
		$mensaje = "error";
	}

	echo $mensaje;
?>