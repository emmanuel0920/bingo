<?php
include('../../controller/exe.php');

function create_prep($seccion, $casilla, $pan, $pri, $morena, $prd, $pv, $pt, $mc, $upm, $pla, $na, $jr, $jlm, $ds)
{
	$sql = "INSERT INTO prep(seccion, casilla, pan, pri, morena, prd, pv, pt, mc, upm, pla, na, jr, jlm, ds)
					VALUES ($seccion, '".$casilla."', $pan, $pri, $morena, $prd, $pv, $pt, $mc, $upm, $pla, $na, $jr, $jlm, $ds)";

	$result = querys($sql);

	return $result;
}

function get_totales_prep()
{
	$sql = "SELECT SUM(pan) AS total_pan, SUM(pri) AS total_pri, SUM(morena) AS total_morena, SUM(prd) AS total_prd, SUM(pv) AS total_pv, SUM(pt) AS total_pt, SUM(mc) AS total_mc, SUM(upm) AS total_upm, SUM(pla) AS total_pla, SUM(na) AS total_na, SUM(jr) AS total_jr, SUM(jlm) AS total_jlm, SUM(ds) AS total_ds FROM `prep` WHERE 1";

	$result = fetch_array($sql);

	return $result;
}