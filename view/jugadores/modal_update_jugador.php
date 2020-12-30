<?php

  $paterno = $_POST['paterno'];
  $materno = $_POST['materno'];
  $nombre = $_POST['nombre'];
  $calle = $_POST['calle'];
  $numero = $_POST['numero'];
  $cp = $_POST['cp'];
  $colonia = $_POST['colonia'];
  $seccion = $_POST['seccion'];
  $fecha_captura = $_POST['fecha_captura'];

?>

<style type="text/css">
  .row{
    margin-bottom: 10px;
  }

  #form_update_jugador{
    background: #dedede;
    padding: 10px;
  }
</style>

<div class="modal fade" tabindex="-1" role="dialog" id="modal_update_jugador" style="overflow-y: auto;">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Editar Jugador</h4>
      </div>
      <div class="modal-body">
        
        <div style="display: flex; justify-content: center;">
          <img src="../../img/business.png" width="500" height="300">
        </div>

        <form id="form_update_jugador" class="form-horizontal">
          <fieldset>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Apellido Paterno<FONT COLOR="red">*</FONT></label>
                      <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <input value="<?=$paterno?>" name="a_paterno" id="a_paterno" placeholder="Apellido Paterno" class="form-control" type="text"  />
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      </div>
                    </div>
                  </div>
                </div>
              

              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Apellido Materno</label>
                      <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <input value="<?=$materno?>" name="a_materno" id="a_materno" placeholder="Apellido Materno" class="form-control" type="text" onchange="buscar_jugador_apellidos()" />
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Nombre<FONT COLOR="red">*</FONT></label>
                      <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <input value="<?=$nombre?>" name="nombre_jugador" id="nombre_jugador" placeholder="Nombre" class="form-control" type="text"   onchange="buscar_jugador()" />
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                         <label class="col-md-5 control-label">Calle<FONT COLOR="red">*</FONT></label>
                          <div class="col-md-7 inputGroupContainer">
                          <div class="input-group">
                            <input value="<?=$calle?>" name="calle" id="calle" placeholder="Calle" class="form-control" type="text"  >
                            <span class="input-group-addon"><i class="fa fa-road"></i></span>
                          </div>
                        </div>
                      </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                         <label class="col-md-5 control-label">Número<FONT COLOR="red">*</FONT></label>
                          <div class="col-md-7 inputGroupContainer">
                          <div class="input-group">
                            <input value="<?=$numero?>" name="numero" id="numero" placeholder="Número" class="form-control" type="number"  >
                            <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                          </div>
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                         <label class="col-md-5 control-label">Colonia<FONT COLOR="red">*</FONT></label>
                          <div class="col-md-7 inputGroupContainer">
                          <div class="input-group">
                            <input value="<?=$colonia?>" name="colonia" id="colonia" placeholder="Colonia" class="form-control" type="text"  >
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                         <label class="col-md-5 control-label">Código Postal<FONT COLOR="red">*</FONT></label>
                          <div class="col-md-7 inputGroupContainer">
                          <div class="input-group">
                            <input value="<?=$cp?>" name="cp" id="cp" placeholder="Código Postal" class="form-control" type="text"  onchange="compare_jugador()" >
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                         <label class="col-md-5 control-label">Teléfono<FONT COLOR="red">*</FONT></label>
                          <div class="col-md-7 inputGroupContainer">
                          <div class="input-group">
                            <input  name="telefono" id="telefono" placeholder="Teléfono" class="form-control" type="number"  onfocus="compare_jugador()" />
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          </div>
                        </div>
                      </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                         <label class="col-md-5 control-label">Sección<FONT COLOR="red">*</FONT></label>
                          <div class="col-md-7 inputGroupContainer">
                          <div class="input-group">
                            <input value="<?=$seccion?>" name="seccion" id="seccion" placeholder="Sección" class="form-control" type="text"   />
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                          </div>
                        </div>
                      </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Edad</label>
                      <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <input name="edad_jugador" id="edad_jugador" placeholder="Edad" class="form-control" type="number" onchange="date_calculator()">
                        <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Fecha de Nacimiento</label>
                      <div class="col-md-7 inputGroupContainer">

                      <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control mask_fecha" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="aaaa/mm/dd" onchange="age_calculator()">
                          <span class="input-group-addon"><i class="ace-icon fa fa-calendar"></i></span>
                      </div>

                    </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                       <label class="col-md-5 control-label">Movilizador<FONT COLOR="red">*</FONT></label>
                        <div class="col-md-7 inputGroupContainer">
                        <div class="input-group">
                          <input  name="movilizador" id="movilizador" placeholder="Movilizador" class="form-control" type="text"  >

                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>
                      </div>
                    </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Seccional<FONT COLOR="red">*</FONT></label>
                      <div class="col-md-4 inputGroupContainer">
                      <div class="input-group">
                      <select name="seccional" id="seccional" class="chosen-select form-control" type="text" required>
                        <option value="">Selecciona una Opción</option>
                          <?php echo $select_seccional;?>
                      </select>
                      <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">Zonal<FONT COLOR="red">*</FONT></label>
                      <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <select  name="zonal" id="zonal" placeholder="Zonal" class="form-control" type="text" required>
                          <option value="1">Selecciona una Opción</option>
                            <?php echo $select_zonal;?>
                        </select>
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                     <label class="col-md-5 control-label">¿Votó?<FONT COLOR="red">*</FONT></label>
                      <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <div class="radio">
                            <label>
                              <input type="radio" name="genero" id="voto" value="1" /> Si
                            </label>
                            <label>
                              <input type="radio" name="genero" id="voto" value="0" /> No
                            </label>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                                   <label class="col-md-5 control-label">¿A quién?</label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="a_quien" id="a_quien" placeholder="A quién" class="form-control" type="text">
                                            <span class="input-group-addon"><i class="fa fa-flag"></i></span>
                                        </div>
                                    </div>
                                </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                                   <label class="col-md-5 control-label">Porcentaje</label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <input name="porcen" id="porcen" placeholder="Porcentaje" class="form-control" type="number" min="0" max="100" >
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        </div>
                                    </div>
                                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                                   <label class="col-md-5 control-label">¿Hacer Movilizador?</label>
                                    <div class="col-md-7 inputGroupContainer">
                                        <div class="input-group">
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="make_mov" id="make_mov" value="1" /> Si
                                                </label>
                                                <label>
                                                    <input type="radio" name="make_mov" id="make_mov" value="0"> No
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
              </div>
            </div>  

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                     <label class="col-md-2 control-label">Observaciones<FONT COLOR="red">*</FONT></label>
                      <div class="col-md-9 inputGroupContainer">
                      <div class="input-group">
                        <textarea name="observaciones" id="observaciones" placeholder="Observaciones" class="form-control" ></textarea>
                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                      </div>
                    </div>
                  </div>
              </div> 
            
          </fieldset>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Cerrar</button>
        <button type="submit" id="btn_submit_update_jugador" form="form_update_jugador" disabled class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;Guardar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->