<?php
function querys($sql)
{
	include('conexion.php');
	$result = mysqli_query($conexion, $sql);

	return $result;
}

function total_rows($sql)
{
	include('conexion.php');
	$result = mysqli_query($conexion, $sql);

	$result = mysqli_num_rows($result);

	return $result;
}

function fetch_array($sql)
{
	include('conexion.php');

	$result = mysqli_query($conexion, $sql);

	$result = mysqli_fetch_array($result, MYSQLI_ASSOC);

	return $result;
}

function last_id($sql)
{
	include('conexion.php');

	$result = mysqli_query($conexion, $sql);

	$result = mysqli_insert_id($conexion);

	return $result;
}