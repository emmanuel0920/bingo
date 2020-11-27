<?php
include('../../controller/prep/funciones_prep.php');
function fill_prep()
{
	$totales_prep = get_totales_prep();

	return $totales_prep;
}