<?php

  include('../../model/jugadores/fill.php');

  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $nombre = $_POST['nombre'];
  $calle = $_POST['calle'];
  $numero = $_POST['numero'];
  $colonia = $_POST['colonia'];
  $cp = $_POST['cp'];
  $telefono = $_POST['telefono'];
  $seccion = $_POST['seccion'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $edad = $_POST['edad'];
  $movilizador = $_POST['movilizador'];
  $seccional = $_POST['seccional'];
  $zonal = $_POST['zonal'];
  $a_quien = $_POST['a_quien'];
  $posibilidad = $_POST['posibilidad'];
  $observaciones = $_POST['observaciones'];
  $fecha_captura = $_POST['fecha_captura'];
  $identificador = $_POST['identificador'];
  $ruta = "../../assets/evidencias/".$identificador."/";
  $img = '<img src="../../img/business.png" width="500" height="300">';
  if(is_dir($ruta))
  {    
   $dir = opendir($ruta);     
    while ($elemento = readdir($dir))
    {
      if($elemento != "." && $elemento != "..")
      {
        if(!is_dir($ruta.$elemento) )
        {
          $img = '<img src="'.$ruta.$elemento.'" width="500" height="300">';
        }
      }
    }
  }

  if ($_POST['voto'] == 1) {
    $voto = "Sí";
  }else{
    $voto = "No";
  }

  $select_movilizador = fill_movilizador_show($movilizador);
  $select_seccional = fill_select_seccional_show($seccional);
  $select_zonal = fill_select_zonal_show($zonal);

?>

<style type="text/css">
  tr:nth-child(odd){
    background: #e7e5e5;
  }
</style>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_show_jugador_info" style="overflow-y: auto;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Información del Jugador</h4>
      </div>
      <div class="modal-body">
        
        <div style="display: flex; justify-content: center;">
          <?= $img; ?>
        </div>

        <table class="table">
          <tbody>
            <tr>
              <td>Identificador: </td>
              <td><?=$identificador?></td>
            </tr>

            <tr>
              <td>Apellido Paterno: </td>
              <td><?=$paterno?></td>
            </tr>

            <tr>
              <td>Apellido Materno: </td>
              <td><?=$materno?></td>
            </tr>

            <tr>
              <td>Nombre: </td>
              <td><?=$nombre?></td>
            </tr>

            <tr>
              <td>Calle: </td>
              <td><?=$calle?></td>
            </tr>

            <tr>
              <td>Número: </td>
              <td><?=$numero?></td>
            </tr>

            <tr>
              <td>Colonia: </td>
              <td><?=$colonia?></td>
            </tr>

            <tr>
              <td>CP: </td>
              <td><?=$cp?></td>
            </tr>

            <tr>
              <td>Teléfono: </td>
              <td><?=$telefono?></td>
            </tr>

            <tr>
              <td>Sección: </td>
              <td><?=$seccion?></td>
            </tr>

            <tr>
              <td>Fecha de Nacimiento: </td>
              <td><?=$fecha_nacimiento?></td>
            </tr>

            <tr>
              <td>Edad: </td>
              <td><?=$edad?></td>
            </tr>

            <tr>
              <td>Movilizador: </td>
              <td><?=$select_movilizador?></td>
            </tr>

            <tr>
              <td>Seccional: </td>
              <td><?=$select_seccional?></td>
            </tr>

            <tr>
              <td>Zonal: </td>
              <td><?=$select_zonal?></td>
            </tr>

            <tr>
              <td>¿Votó?: </td>
              <td><?=$voto?></td>
            </tr>

            <tr>
              <td>¿A quién?: </td>
              <td><?=$a_quien?></td>
            </tr>

            <tr>
              <td>Porcentaje: </td>
              <td><?=$posibilidad?></td>
            </tr>

            <!-- <tr>
              <td>¿Hacer Movilizador?: </td>
              <td><?=$make_mov?></td>
            </tr> -->

            <tr>
              <td>Observaciones: </td>
              <td><?=$observaciones?></td>
            </tr>

            <tr>
              <td>Fecha de Captura: </td>
              <td><?=$fecha_captura?></td>
            </tr>
          </tbody>
        </table>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->