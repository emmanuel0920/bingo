<?php
include('../../controller/usuarios/funciones_usuarios.php');

function fill_movilizador()
{
    $movilizadores = get_movilizador();
    $select_movilizador='[';
    foreach($movilizadores as $movilizador)
    {
        $select_movilizador.= "'".$movilizador['id'].'-'.$movilizador['nombre']."',";
    }
    $select_movilizador.="]";
    $select_movilizador = str_replace(',]', ']', $select_movilizador);
    return $select_movilizador;
}

function fill_seccional($seccion)
{
    $seccionales = get_seccional($seccion);
    foreach($seccionales as $seccional)
    {
        $select_seccional.='
                <option value="'.$seccional['id'].'">'.$seccional['nombre'].'</option>
        ';
    }
    
    return $select_seccional;
}

function fill_select_movilizador()
{
    $movilizadores = get_movilizadores();
    $select_movilizador = '';
    foreach($movilizadores as $movilizador)
    {
        $select_movilizador.='
                <option value="'.$movilizador['id_usuario'].'">'.$movilizador['nombre_usuario'].'</option>
        ';
    }
    
    return $select_movilizador;
}

function fill_select_seccional()
{
    $seccionales = get_seccionales();
    $select_seccional = '';
    foreach($seccionales as $seccional)
    {
        $select_seccional.='
                <option value="'.$seccional['id'].'">'.$seccional['nombre'].'</option>
        ';
    }
    
    return $select_seccional;
}

function fill_select_zonal()
{
    $zonales = get_zonales();
    $select_zonal = '';
    foreach($zonales as $zonal)
    {
        $select_zonal.='
                <option value="'.$zonal['id'].'">'.$zonal['nombre'].'-'.$zonal['seccion'].'</option>
        ';
    }
    
    return $select_zonal;
}

function fill_select_a_quien()
{
    $aquienes = get_aquien();
    $select_aquien = '';
    foreach($aquienes as $aquien)
    {
        $select_aquien.='
                <option value="'.$aquien['id'].'">'.$aquien['nombre'].'</option>
        ';
    }
    
    return $select_aquien;
}

function fill_nombre_direccion()
{
    $nombres_direcciones =  get_nombres_direcciones();

    return $nombres_direcciones;
}

function fill_a_paterno($nombres_direcciones)
{
    $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result.= '"'.$nombre_direccion['a_paterno'].'",';
    }
    $result = $result."-";

    $result = str_replace('"",', "", $result);
    $result = str_replace(",-", "", $result);

    return $result;

}

function fill_a_materno($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $a_materno= array("a_materno" =>$nombre_direccion['a_materno']);

        $result.= '"'.$nombre_direccion['a_materno'].'",';
    }
    $result = $result."-";
    $result = str_replace('"",', "", $result);
    $result = str_replace(",-", "", $result);
    return $result;
}

function fill_nombre($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result.= '"'.$nombre_direccion['nombre'].'",';
    }
    $result = $result."-";

    $result = str_replace('"",', "", $result);
    $result = str_replace(",-", "", $result);

    return $result;
}

function fill_calle($nombres_direcciones)
{
     $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result.= '"'.$nombre_direccion['calle'].'",';
    }
    $result = $result."-";
    
    $result = str_replace('"",', "", $result);
    $result = str_replace(",-", "", $result);

    return $result;
}

function fill_colonia($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result.= '"'.$nombre_direccion['colonia'].'",';
    }
    $result = $result."-";

    $result = str_replace('"",', "", $result);
    $result = str_replace(",-", "", $result);
    return $result;
}

function fill_c_p($nombres_direcciones)
{
      $result = "";
    foreach ($nombres_direcciones as $nombre_direccion) 
    {
        $result.= '"'.$nombre_direccion['c_p'].'",';
    }
    $result = $result."-";

    $result = str_replace('"",', "", $result);
    $result = str_replace(",-", "", $result);
    return $result;
}

function fill_jugador_id($id)
{
    $datos_jugador = get_datos_jugador($id);

    return $datos_jugador;
}

function fill_select_calle($a_pat,$a_mat,$nom)
{
    $calles = get_calle($a_pat,$a_mat,$nom);
    $select_calle = '';
    foreach($calles as $calle)
    {
        $select_calle.='
                <option value="'.$calle['calle'].'" selected>'.$calle['calle'].'</option>
        ';
    }
    
    return $select_calle;
}

function fill_select_num($a_pat,$a_mat,$nom)
{
    $numeros = get_num($a_pat,$a_mat,$nom);
    $select_num = '';
    foreach($numeros as $numero)
    {
        $select_num.='
                <option value="'.$numero['numero_ext'].'" selected>'.$numero['numero_ext'].'</option>
        ';
    }
    
    return $select_num;
}

function fill_select_colonia($a_pat,$a_mat,$nom)
{
    $colonias = get_colonia($a_pat,$a_mat,$nom);
    $select_colonia = '';
    foreach($colonias as $colonia)
    {
        $select_colonia.='
                <option value="'.$colonia['colonia'].'" selected>'.$colonia['colonia'].'</option>
        ';
    }
    
    return $select_colonia;
}

function fill_select_cp($a_pat,$a_mat,$nom)
{
    $cps = get_cp($a_pat,$a_mat,$nom);
    $select_cp= '';
    foreach($cps as $cp)
    {
        $select_cp.='
                <option value="'.$cp['c_p'].'" selected>'.$cp['c_p'].'</option>
        ';
    }
    
    return $select_cp;
}

function fill_select_seccion($a_pat,$a_mat,$nom)
{
    $secciones = get_secciones($a_pat,$a_mat,$nom);
    $select_seccion = '';
    foreach($secciones as $seccion)
    {
        $select_seccion.='
                <option value="'.$seccion['seccion'].'" selected>'.$seccion['seccion'].'</option>
        ';
    }
    
    return $select_seccion;
}

function fill_iguales($a_paterno, $a_materno)
{
    $iguales = get_iguales($a_paterno, $a_materno);
    
    return $iguales;
}

function fill_tr_jugadores($iguales)
{
    $tr_jugadores = "";
    foreach($iguales as $igual)
    {
        $tr_jugadores.="<tr>
							<td>".$igual['a_paterno']."</td>
							<td>".$igual['a_materno']."</td>
							<td>".$igual['nombre']."</td>
							<td>".$igual['calle']." #".$igual['numero_ext']."</td>
							<td>".$igual['c_p']."</td>
							<td>".$igual['seccion']."</td>
							<td class='center'>
								<div class='btn-group'>
									<a class='btn btn-xs btn-info' onclick='buscar_jugador_editar(".$igual['id'].")' role='button' title='Editar jugador'>
										<i class='ace-icon fa fa-pencil bigger-130'></i>
									</a>
								</div>
							</td>
						</tr>";
    }
    return $tr_jugadores;
}
?>
