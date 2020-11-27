<?php
	include('../../controller/prep/funciones_prep.php');
	$seccion = $_POST['seccion'];
	$casilla = $_POST['casilla'];	
	$pan = $_POST['pan'];
	$pri = $_POST['pri'];
	$morena = $_POST['morena'];
	$prd = $_POST['prd'];	
	$pv = $_POST['verde'];	
	$pt = $_POST['pt'];	
	$mc = $_POST['movimiento'];	
	$upm = $_POST['unidos'];	
	$pla = $_POST['libre'];	
	$na = $_POST['alianza'];	
	$jr = $_POST['rios'];	
	$jlm = $_POST['mares'];	
	$ds = $_POST['segura'];

	if(create_prep($seccion, $casilla, $pan, $pri, $morena, $prd, $pv, $pt, $mc, $upm, $pla, $na, $jr, $jlm, $ds))
	{
		$mensaje = "correcto";
	}else{
		$mensaje = "error";
	}
	echo $mensaje;
?>