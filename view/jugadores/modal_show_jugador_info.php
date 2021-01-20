<?php

  include('../../model/jugadores/fill.php');

  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $nombre = $_POST['nombre'];
  $calle = $_POST['calle'];
  $numero = $_POST['numero'];
  $cp = $_POST['cp'];
  $colonia = $_POST['colonia'];
  $seccion = $_POST['seccion'];
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

?>



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
              <td>Sección: </td>
              <td><?=$seccion?></td>
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