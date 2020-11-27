<?php
	include('../../controller/busquedas/funciones_busqueda.php');
	
	$seccion = $_POST['seccion'];
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
	echo $mensaje;	
?>