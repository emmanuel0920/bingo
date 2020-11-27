
<div class="page-content">    
    <div class="row">
        <div class="col-xs-12">
            <div class="container-fluid">

                <form class="well form-horizontal" method="post"  id="form_dg" name="form_dg">
                    <fieldset>                        
                        <!-- Button -->
                        <div class="form-group">
                            <button onclick="mapa_inicial();" style="display: block; margin-right: auto; margin-left: auto;" class="btn btn-success"> <i class="ace-icon fa fa-floppy-o"></i> &nbsp Buscar </button>
                        </div>
                        <div class="form-group"></div>
                        
                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2" id="map" style="height:400px; background: grey;">
                            </div>
                        </div>
                        
                        <div class="form-group"></div>
                        <h3 class="header smaller lighter center"></h3>                                                        
                    </fieldset>
                </form>
            </div>    
            
        </div>
    </div>
</div>


<script type="text/javascript">

   

   jQuery(function($) {
                    
    
        if(!ace.vars['touch']) {
            $('.chosen-select').chosen({allow_single_deselect:true}); 
            //resize the chosen on window resize
    
            $(window)
            .off('resize.chosen')
            .on('resize.chosen', function() {
                $('.chosen-select').each(function() {
                     var $this = $(this);
                     $this.next().css({'width': $this.parent().width()});
                })
            }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if(event_name != 'sidebar_collapsed') return;
                $('.chosen-select').each(function() {
                     var $this = $(this);
                     $this.next().css({'width': $this.parent().width()});
                })
            });
    
    
            $('#chosen-multiple-style .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                 else $('#form-field-select-4').removeClass('tag-input-style');
            });            
        }
    
        $('#catastral').mask('**-**-**-***-***-***');
    
    
    });
</script>

<script  type="text/javascript" charset="UTF-8" >

    function tags_fisica(){
    
        var tag_input = $('#nombre');
        var mis_datos = ["pancho","pedro","juan"] ;
        
        
        try{
            tag_input.tag(
              {
                placeholder:tag_input.attr('placeholder'),
                //enable typeahead by specifying the source array
                 
                source: mis_datos,//defined in ace.js >> ace.enable_search_ahead
                /**
                //or fetch data from database, fetch those that match "query"
                source: function(query, process) {
                  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
                  .done(function(result_items){
                    process(result_items);
                  });
                }
                */
              }
            )

            //programmatically add/remove a tag
            var $tag_obj = $('#nombre').data('tag');
            
            var index = $tag_obj.inValues('some tag');
            $tag_obj.remove(index);

            
        }

        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="'+tag_input.attr('nombre')+'" name="'+tag_input.attr('nombre')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
            //autosize($('#form-field-tags'));
        }

        $('[data-rel=tooltip]').tooltip();
            
        tag_input.on('added', function (e, value) {
            
            $(".valid").attr('readonly', true);

            var xmlhttp;

            if (window.XMLHttpRequest){
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            
            else{// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.onreadystatechange=function(){
                
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("loading").innerHTML = ''; // Hide the image after the response from the
                    document.getElementById("ocultos_fisica").innerHTML=xmlhttp.responseText;
                    $("#editar").css("display", "block");
                    switch_edit();
                }
            }

            document.getElementById("loading").innerHTML = '<img src="./img/loader_2.gif" alt="Cargando, favor de esperar"/>'; // Set here the image before sending request
            xmlhttp.open("POST","./model/sedatum/datos_persona_fisica.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send(value);
        });


        tag_input.on('removed', function (e, value) {
            $("#ocultos_fisica").empty();
            $("#editar").css("display", "none");
            $(".valid").attr('readonly', false);
        });


        function switch_edit(){
            $("#switch_edit",).change(function() {
                if ($('input', form_fisica).is('[readonly]')) 
                {
                    $('input', form_fisica).removeAttr("readonly");
                } else {
                    $('input', form_fisica).attr("readonly","readonly");
                }
            });
        }
    }


    function tags_moral(){
    
        var tag_input = $('#nombre_empresa');
        var mis_datos = ["COCA COLA","OXXO","COPPEL"] ;
        
        
        try{
            tag_input.tag(
              {
                placeholder:tag_input.attr('placeholder'),
                //enable typeahead by specifying the source array
                 
                source: mis_datos,//defined in ace.js >> ace.enable_search_ahead
                /**
                //or fetch data from database, fetch those that match "query"
                source: function(query, process) {
                  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
                  .done(function(result_items){
                    process(result_items);
                  });
                }
                */
              }
            )

            //programmatically add/remove a tag
            var $tag_obj = $('#nombre_empresa').data('tag');
            
            var index = $tag_obj.inValues('some tag');
            $tag_obj.remove(index);

            
        }

        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="'+tag_input.attr('nombre_empresa')+'" name="'+tag_input.attr('nombre_empresa')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
            //autosize($('#form-field-tags'));
        }

        $('[data-rel=tooltip]').tooltip();
            
        tag_input.on('added', function (e, value) {
            
            $(".valid").attr('readonly', true);

            var xmlhttp;

            if (window.XMLHttpRequest){
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            }
            
            else{// code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            
            xmlhttp.onreadystatechange=function(){
                
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("loading_moral").innerHTML = ''; // Hide the image after the response from the
                    document.getElementById("ocultos_moral").innerHTML=xmlhttp.responseText;
                    $("#editar").css("display", "block");
                    switch_edit();
                }
            }

            document.getElementById("loading").innerHTML = '<img src="./img/loader_2.gif" alt="Cargando, favor de esperar"/>'; // Set here the image before sending request
            xmlhttp.open("POST","./model/sedatum/datos_persona_moral.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xmlhttp.send(value);
        });


        tag_input.on('removed', function (e, value) {
            $("#ocultos_moral").empty();
            $("#editar").css("display", "none");
            $(".valid").attr('readonly', false);
        });


        function switch_edit(){
            $("#switch_edit",).change(function() {
                if ($('input', form_moral).is('[readonly]')) 
                {
                    $('input', form_moral).removeAttr("readonly");
                } else {
                    $('input', form_moral).attr("readonly","readonly");
                }
            });
        }
    }


    function mapa_inicial(){
        $(map).empty();

       

        function moveMapToAgs(map){
            map.setCenter({lat:21.961431132297992, lng:-102.34325996858598});
            map.setZoom(14);


            map.addObject(new H.map.Circle(
                // The central point of the circle
                {lat:21.9490639, lng:-102.35194},
                // The radius of the circle in meters
                350,
                {
                  style: {
                    strokeColor: 'rgba(0,0,255,0.2)', // Color of the perimeter
                    lineWidth: 2,
                    fillColor: 'rgba(0,0,255,0.2)'  // Color of the circle
                  }
                }
              ));            
        }

        /**
         * Boilerplate map initialization code starts below:
         */

        //Step 1: initialize communication with the platform
        var platform = new H.service.Platform({
            app_id: 'ZGz7zZ8IFFGIJi6gmhRE',
            app_code: 'dVGiTbgyVPotX-_dyzRd3A',
            useHTTPS: true
        });
        var pixelRatio = window.devicePixelRatio || 1;
        var defaultLayers = platform.createDefaultLayers({
          tileSize: pixelRatio === 1 ? 256 : 512,
          ppi: pixelRatio === 1 ? undefined : 320
        });

        //Step 2: initialize a map  - not specificing a location will give a whole world view.
        var map = new H.Map(document.getElementById('map'),
          defaultLayers.normal.map, {pixelRatio: pixelRatio});

        //Step 3: make the map interactive
        // MapEvents enables the event system
        // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
        var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

        // Create the default UI components
        var ui = H.ui.UI.createDefault(map, defaultLayers);

        // Now use the map as required...
        moveMapToAgs(map);
    }


    function buscar_direccion(){
        $(map).empty();
        var calle = document.getElementById('calle_dg').value;
        var num_ext = document.getElementById('no_ex_dg').value;
        var colonia = document.getElementById('colonia_dg').value;
        var localidad = document.getElementById('localidad_dg').value;
        var cp = document.getElementById('cp_dg').value;
        var latlong = document.getElementById('latlong');

        $.ajax({
            url: 'https://geocoder.api.here.com/6.2/geocode.json',
            type: 'GET',
            dataType: 'jsonp',
            jsonp: 'jsoncallback',
            data: {
                housenumber: num_ext,
                street: calle,
                city: localidad,
                state: 'Aguascalientes',
                district: colonia,
                postalCode: cp,
                gen: '9',
                app_id: 'ZGz7zZ8IFFGIJi6gmhRE',
                app_code: 'dVGiTbgyVPotX-_dyzRd3A'
            },
            success: function (data) {
                console.log(JSON.stringify(data));
                var longitud = data.Response.View[0].Result[0].Location.DisplayPosition.Longitude;
                var latitud = data.Response.View[0].Result[0].Location.DisplayPosition.Latitude;

                function moveMapToBerlin(map){
                    map.setCenter({lat:latitud, lng:longitud});
                    map.setZoom(17);

                    latlong.value=latitud+", "+longitud;

                    var direccionMarker = new H.map.Marker({lat:latitud, lng:longitud});
                    map.addObject(direccionMarker);

                    map.addEventListener('tap', function (evt) {
                        var coord = map.screenToGeo(evt.currentPointer.viewportX,
                                evt.currentPointer.viewportY);
                        alert('Clicked at ' + Math.abs(coord.lat.toFixed(4)) +
                            ((coord.lat > 0) ? 'N' : 'S') +
                            ' ' + Math.abs(coord.lng.toFixed(4)) +
                             ((coord.lng > 0) ? 'E' : 'W'));
                    });
                }

                //Step 1: initialize communication with the platform
                var platform = new H.service.Platform({
                  app_id: 'ZGz7zZ8IFFGIJi6gmhRE',
                  app_code: 'dVGiTbgyVPotX-_dyzRd3A',
                  useHTTPS: true
                });

                var pixelRatio = window.devicePixelRatio || 1;
                var defaultLayers = platform.createDefaultLayers({
                    tileSize: pixelRatio === 1 ? 256 : 512,
                    ppi: pixelRatio === 1 ? undefined : 320
                });

                //Step 2: initialize a map  - not specificing a location will give a whole world view.
                var map = new H.Map(document.getElementById('map'),
                    defaultLayers.normal.map, {pixelRatio: pixelRatio});

                //Step 3: make the map interactive
                // MapEvents enables the event system
                // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
                var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

                // Create the default UI components
                var ui = H.ui.UI.createDefault(map, defaultLayers);

                // Now use the map as required...
                moveMapToBerlin(map);
            }
        });
    }       
</script>



<script type="text/javascript">

    $.mask.definitions['~']='[+-]';
    $('.mask_curp').mask('aaaa999999aaaaaa99', {reverse: true});
    $('.mask_tel').mask('9999999999', {reverse: true});
    $('.mask_cp').mask('99999', {reverse: true});
    $('.mask_rfc_fis').mask('aaaa999999aa9', {reverse: true});

    function mayus(e) {
        e.value = e.value.toUpperCase();
    }

    $('#chosen-multiple-style .btn').on('click', function(e){
        var target = $(this).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
         else $('#form-field-select-4').removeClass('tag-input-style');
    });

    $.fn.datepicker.dates['es'] = {
        days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
        daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
        daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
        months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
        monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
        today: "Hoy",
        monthsTitle: "Meses",
        clear: "Borrar",
        weekStart: 0,
        format: "yyyy-mm-dd"
    };

    function cambia_especifique(value)
    {
        console.log(value);
        if (value==true){
            $("#ocultar").css("display", "block");
        } else{
            $("#ocultar").css("display", "none");
            $("#especifique").val("");
        }
    }

    //datepicker plugin
    //link
    $('.date_picker').datepicker({
        language: 'es',
        autoclose: true,
        todayHighlight: true
    })

    

    //var $validation = false;
        $('#fuelux-wizard-container')
        .ace_wizard({
            //step: 2 //optional argument. wizard will jump to step "2" at first
            //buttons: '.wizard-actions:eq(0)'
        })
        .on('actionclicked.fu.wizard' , function(e, info){
            var tipo_persona = $('#tipo_persona:checked').val();

            if(info.step == 1) {
                e.preventDefault();

                if(typeof tipo_persona !== "undefined")
                {
                    if(tipo_persona=="p_fisica")
                    {
                        document.getElementById("titulo_paso").innerHTML="Información Personas Físicas";
                        $("#div_morales").removeAttr("data-step");
                        $('#div_fisicas').attr('data-step','2');                            
                        $('#fuelux-wizard-container').wizard('selectedItem', {
                            step: 2
                        }); 
                        tags_fisica();                           
                    } else{
                        document.getElementById("titulo_paso").innerHTML="Información Personas Morales";
                        $("#div_fisicas").removeAttr("data-step");
                        $('#div_morales').attr('data-step','2');
                        $('#fuelux-wizard-container').wizard('selectedItem', {
                            step: 2
                        });
                        tags_moral();
                    }

                } else{
                    swal({
                        title: "¡Error!",
                        text: "Favor de seleccionar una opción",
                        icon: "warning",
                        button: "Aceptar"
                    });
                }
                
            }

            if(info.step == 2) {
                if(info.direction == 'next')
                {                    
                    if(tipo_persona=="p_fisica")
                    {
                        if(!$('#form_fisica').valid()){
                            e.preventDefault();
                        }
                        else{

                            e.preventDefault();
                            var parametros_conyugue = {                     
                                "nombre" : $('#nombre').val(),
                                "calle" : $('#calle').val(),
                                "no_ex" : $('#no_ex').val(),
                                "no_int" : $('#no_int').val(),
                                "curp_fis" : $('#curp_fis').val(),
                                "colonia" : $('#colonia').val(),
                                "municipio" : $('#municipio').val(),
                                "localidad" : $('#localidad').val(),
                                "cp" : $('#cp').val(),
                                "rfc" : $('#rfc').val(),
                                "curp_fis" : $('#curp_fis').val(),
                                "telefono" : $('#telefono').val(),
                                "email" : $('#email').val(),
                            };
                            
                            $.ajax({
                                    data:  parametros_conyugue,
                                    url:   './model/solicitud/create_pfisica.php',
                                    type:  'post',
                                    
                                    success:  function (data) {
                                                                            
                                        if (data==='correcto'){
                                            swal({
                                                title: "¡Datos guardados correctamente!",
                                                timer: 3000,
                                                icon: "success",
                                                button: "Aceptar"
                                            });                  

                                            $('#fuelux-wizard-container').wizard('selectedItem', {
                                                step: 3
                                            });                     
                                        }
                                        
                                        if (data==='error2'){
                                            swal({
                                                title: "¡Error Grave!",
                                                text: "¡Ocurrio algo al guardar!",
                                                timer: 3000,
                                                icon: "error",
                                                button: "Aceptar"
                                            });
                                        }
                                    }

                            });
                        }
                    } else{
                        if(!$('#form_moral').valid()){
                            e.preventDefault();
                        }
                        else{

                            e.preventDefault();
                            var parametros_moral = {                     
                                "nombre_empresa" : $('#nombre_empresa').val(),
                                "fecha_constitucion" : $('#fecha_constitucion').val(),
                                "rfc_pm" : $('#rfc_pm').val(),
                                "telefono_pm" : $('#telefono_pm').val(),
                                "email_pm" : $('#email_pm').val(),
                                "nombre_rl" : $('#nombre_rl').val(),
                                "rfc_rl" : $('#rfc_rl').val(),
                                "curp_rl" : $('#curp_rl').val(),
                                "calle_rl" : $('#calle_rl').val(),
                                "no_ex_rl" : $('#no_ex_rl').val(),
                                "no_int_rl" : $('#no_int_rl').val(),
                                "colonia_rl" : $('#colonia_rl').val(),
                                "municipio_rl" : $('#municipio_rl').val(),
                                "localidad_rl" : $('#localidad_rl').val(),
                                "cp_rl" : $('#cp_rl').val(),
                                "estado_rl" : $('#estado_rl').val(),
                                "telefono_rl" : $('#telefono_rl').val(),
                                "email_rl" : $('#email_rl').val(),
                            };
                            
                            $.ajax({
                                    data:  parametros_moral,
                                    url:   './model/solicitud/create_pmoral.php',
                                    type:  'post',
                                    
                                    success:  function (data) {
                                                                            
                                        if (data==='correcto'){
                                            swal({
                                                title: "¡Datos guardados correctamente!",
                                                timer: 3000,
                                                icon: "success",
                                                button: "Aceptar"
                                            });                  

                                            $('#fuelux-wizard-container').wizard('selectedItem', {
                                                step: 3
                                            });                     
                                        }
                                        
                                        if (data==='error2'){
                                            swal({
                                                title: "¡Error Grave!",
                                                text: "¡Ocurrio algo al guardar!",
                                                timer: 3000,
                                                icon: "error",
                                                button: "Aceptar"
                                            });
                                        }
                                    }

                            });
                        }
                    }
                }                
            }


            if(info.step == 3) {
                if(info.direction == 'next')
                {
                    if(!$('#form_dg').valid()){
                        e.preventDefault();
                    }
                    else{
                        e.preventDefault();

                        var parametros_conyugue = {                     
                            "id_solicitud" : $('#id_solicitud').val(),
                            "nombre_comercial" : $('#nombre_comercial').val(), 
                            "horario_trabajo" : $('#horario_trabajo').val(),
                            "calle_dg" : $('#calle_dg').val(),
                            "no_ex_dg" : $('#no_ex_dg').val(),
                            "no_int_dg" : $('#no_int_dg').val(),
                            "colonia_dg" : $('#colonia_dg').val(),
                            "entre_calles" : $('#entre_calles').val(),
                            "municipio_dg" : $('#municipio_dg').val(),     
                            "localidad_dg" : $('#localidad_dg').val(),
                            "cp_dg" : $('#cp_dg').val(),
                            "telefono_dg" : $('#telefono_dg').val(),
                            "uso" : $('#uso').val(),
                            "scian" : $('#scian').val(),
                            "catastral" : $('#catastral').val(),
                            "manzana"  : $('#manzana').val(),
                            "lote" : $('#lote').val(),
                            "distancia_esquina" : $('#distancia_esquina').val(),
                            "cajones" : $('#cajones').val(),
                            "inversion" : $('#inversion').val(),
                            "personal_ocupado" : $('#personal_ocupado').val(),
                            "servicios" : $('#servicios').val(),
                        };
                        
                        $.ajax({
                                data:  parametros_conyugue,
                                url:   './model/solicitud/create_dg.php',
                                type:  'post',
                                
                                success:  function (data) {
                                                                        
                                    if (data==='correcto'){
                                        swal({
                                            title: "¡Datos guardados correctamente!",
                                            timer: 3000,
                                            icon: "success",
                                            button: "Aceptar"
                                        });                  

                                        $('#fuelux-wizard-container').wizard('selectedItem', {
                                            step: 3
                                        });                     
                                    }
                                    
                                    if (data==='error2'){
                                        swal({
                                            title: "¡Error Grave!",
                                            text: "¡Ocurrio algo al guardar!",
                                            timer: 3000,
                                            icon: "error",
                                            button: "Aceptar"
                                        });
                                    }

                                    if (data==='error1'){
                                        swal({
                                            title: "¡Error!",
                                            text: "¡Este usuario ya registró con anterioridad!",
                                            timer: 3000,
                                            icon: "warning",
                                            button: "Aceptar"
                                        });
                                    }
                                }

                        });
                    }
                }                
            }



            if(info.step == 4) {
                if(info.direction == 'next')
                {
                    
                    if(!$('#form_dg').valid()){
                        e.preventDefault();
                    }
                    else{
                        e.preventDefault();
                        var myForm = document.getElementById('form_dimensiones');
                        var fd = new FormData(myForm);

                        $.ajax({
                            data:  fd,
                            url:   './model/beneficiario/create_dimensiones.php',
                            type: "POST",
                            processData: false,
                            contentType: false,
                            
                            success:  function (data) {
                                                                    
                                if (data==='correcto'){
                                    swal({
                                        title: "¡Datos guardados correctamente!",
                                        timer: 3000,
                                        icon: "success",
                                        button: "Aceptar"
                                    });                  

                                                      
                                }
                                
                                if (data==='error2'){
                                    swal({
                                        title: "¡Error Grave!",
                                        text: "¡Ocurrio algo al guardar!",
                                        timer: 3000,
                                        icon: "error",
                                        button: "Aceptar"
                                    });
                                }

                                if (data==='error1'){
                                    swal({
                                        title: "¡Error!",
                                        text: "¡Este usuario ya registró con anterioridad!",
                                        timer: 3000,
                                        icon: "warning",
                                        button: "Aceptar"
                                    });
                                }
                            }

                        });
                        /*swal({
                            title: "¿Desea finalizar el alta del título?",
                            icon: "info",
                            buttons: true,
                            buttons: ["No", "Si"],
                            dangerMode: true,
                        })
                        .then((value) => {
                            if (value) {

                                swal({
                                    title: "Título creado correctamente",
                                    timer: 3000,
                                    icon: "success",
                                    button: "Aceptar"
                                });

                                $('#modal_add_title').modal('hide');
                                cargar_pack(id_panteon, nombre_panteon);
                            }
                            else{
                                e.preventDefault();
                            }
                        });*/
                    }
                }                
            }
        })
        //.on('changed.fu.wizard', function() {
        //})
        .on('finished.fu.wizard', function(e) {
            swal({
                title: "Título creado correctamente",
                timer: 3000,
                icon: "success",
                button: "Aceptar"
            });

            location.reload();
           
        }).on('stepclicked.fu.wizard', function(e){
            e.preventDefault();//this will prevent clicking and selecting steps
        });
    
    
        //jump to a step
        function salto(paso){
            var wizard = $('#fuelux-wizard-container').data('fu.wizard')
            wizard.currentStep = paso;
            wizard.setState();
        }
        
    
        //determine selected step
        //wizard.selectedItem().step


       $('#form_fisica').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                nombre: {
                    required: true
                },

                calle: {
                    required: true
                },

                no_ex: {
                    required: true,
                    number: true
                },

                no_int: {
                    number: true
                },

                colonia: {
                    required: true
                },

                municipio: {
                    required: true
                },

                localidad: {
                    required: true
                },

                cp: {
                    required: true
                },

                rfc: {
                    required: true
                },

                curp_fis: {
                    required: true
                },

                telefono: {
                    required: true
                },

                email: {
                    required: true,
                    email: true
                }
            },     

            messages: {
                nombre: {
                    required: "Favor de ingresar el nombre."
                },

                calle: {
                    required: "Favor de ingresar la calle."
                },

                no_ex: {
                    required: "Favor de ingresar el número exterior.",
                    number: "Favor de ingresar solo números."
                },

                no_int: {
                    number: "Favor de ingresar solo números."
                },

                colonia: {
                    required: "Favor de ingresar la colonia."
                },

                municipio: {
                    required: "Favor de seleccionar el municipio."
                },

                localidad: {
                    required: "Favor de ingresar la localidad."
                },

                cp: {
                    required: "Favor de ingresar el código postal."
                },

                rfc: {
                    required: "Favor de ingresar el RFC."
                },

                curp_fis: {
                    required: "Favor de ingresar la CURP."
                },

                telefono: {
                    required: "Favor de ingresar el teléfono."
                },

                email: {
                    required: "Favor de ingresar el correo electrónico."
                }
            },


            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },

            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },

            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                
                
            }
        
        });


        $('#form_moral').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                nombre_empresa: {
                    required: true
                },

                fecha_constitucion: {
                    required: true
                },

                rfc_pm: {
                    required: true
                },

                telefono_pm: {
                    required: true
                },

                email_pm: {
                    email: true,
                    required: true
                },

                nombre_rl: {
                    required: true
                },

                rfc_rl: {
                    required: true
                },

                curp_rl: {
                    required: true
                },

                calle_rl: {
                    required: true
                },

                no_ex_rl: {
                    required: true,
                    number: true
                },

                no_int_rl: {
                    number: true
                },

                colonia_rl: {
                    required: true
                },

                municipio_rl: {
                    required: true
                },

                localidad_rl: {
                    required: true
                },

                cp_rl: {
                    required: true
                },

                estado_rl: {
                    required: true
                },

                telefono_rl: {
                    required: true
                },

                email_rl: {
                    required: true,
                    email: true
                }
            },     

            messages: {
                nombre_empresa: {
                    required: "Favor de ingresar el nombre de la empresa."
                },

                fecha_constitucion: {
                    required: "Favor de ingresar la fecha de constitución."
                },

                rfc_pm: {
                    required: "Favor de ingresar el RFC de la empresa."
                },

                telefono_pm: {
                    required: "Favor de ingresar el teléfono de la empresa."
                },

                email_pm: {
                    required: "Favor de ingresar el correo electrónico de la empresa."
                },

                nombre_rl: {
                    required: "Favor de ingresar el nombre."
                },

                rfc_rl: {
                    required: "Favor de ingresar el RFC."
                },

                curp_rl: {
                   required: "Favor de ingresar la CURP."
                },

                calle_rl: {
                    required: "Favor de ingresar la calle."
                },

                no_ex_rl: {
                    required: "Favor de ingresar el número exterior.",
                    number: "Favor de ingresar solo números."
                },

                no_int_rl: {
                    number: "Favor de ingresar solo números."
                },

                colonia_rl: {
                    required: "Favor de ingresar la colonia."
                },

                municipio_rl: {
                    required: "Favor de seleccionar el municipio."
                },

                localidad_rl: {
                    required: "Favor de ingresar el nombre."
                },

                cp_rl: {
                    required: "Favor de ingresar el código postal."
                },

                estado_rl: {
                    required: "Favor de seleccionar el estado."
                },

                telefono_rl: {
                    required: "Favor de ingresar el teléfono."
                },

                email_rl: {
                    required: "Favor de ingresar el correo electrónico."
                }
            },


            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },

            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },

            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                
                
            }
        
        });



        $('#form_dg').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                nombre_comercial: {
                    required: true
                },

                horario_trabajo: {
                    required: true
                },

                calle_dg: {
                    required: true
                },

                no_ex_dg: {
                    required: true,
                    number: true
                },

                no_int_dg: {
                    number: true
                },

                colonia_dg: {
                    required: true
                },

                colonia_dg: {
                    required: true
                },

                entre_calles: {
                    required: true
                },

                municipio_dg: {
                    required: true
                },

                localidad_dg: {
                    required: true
                },

                cp_dg: {
                    required: true
                },

                telefono_dg: {
                    required: true
                },

                uso: {
                    required: true
                },

                scian: {
                    required: true
                },

                catastral: {
                    required: true
                },

                manzana: {
                    required: true
                },

                lote: {
                    required: true
                },

                distancia_esquina: {
                    required: true
                },

                cajones: {
                    required: true
                },

                inversion: {
                    required: true
                },

                personal_ocupado: {
                    required: true
                },

                servicios: {
                    required: true
                },
            },     

            messages: {
                nombre_comercial: {
                    required: "Favor de ingresar el nombre comercial."
                },

                horario_trabajo: {
                    required: "Favor de ingresar el horario de trabajo."
                },

                calle_dg: {
                    required: "Favor de ingresar la calle."
                },

                no_ex_dg: {
                    required: "Favor de ingresar el número exterior.",
                    number: "Favor de ingresar solo números."
                },

                no_int_dg: {
                    number: "Favor de ingresar solo números."
                },

                colonia_dg: {
                    required: "Favor de ingresar la colonia."
                },                

                entre_calles: {
                    required: "Favor de ingresar la colonia."
                },

                municipio_dg: {
                    required: "Favor de seleccionar el municipio."
                },

                localidad_dg: {
                    required: "Favor de ingresar el nombre."
                },

                cp_dg: {
                    required: "Favor de ingresar el código postal."
                },

                telefono_dg: {
                    required: "Favor de ingresar el teléfono."
                },

                uso: {
                    required: "Favor de ingresar uso actual."
                },

                scian: {
                    required: "Favor de ingresar el giro scian."
                },

                catastral: {
                    required: "Favor de ingresar la cuenta catastral."
                },

                manzana: {
                    required: "Favor de ingresar la manzana."
                },

                lote: {
                    required: "Favor de ingresar el lote."
                },

                distancia_esquina: {
                    required: "Favor de ingresar la distancia a la esquina más cercana."
                },

                cajones: {
                    required: "Favor de ingresar el numero de cajones de estacionamiento."
                },

                inversion: {
                    required: "Favor de ingresar el monto de la inversión capital social."
                },

                personal_ocupado: {
                    required: "Favor de ingresar el personal ocupado."
                },

                servicios: {
                    required: "Favor de ingresar los servicios existentes."
                },
            },


            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },

            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },

            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                
                
            }
        
        });




        $('#form_dimensiones').validate({
            errorElement: 'div',
            errorClass: 'help-block',
            focusInvalid: false,
            ignore: "",
            rules: {
                nombre: {
                    required: true
                },

                calle: {
                    required: true
                },

                no_ex: {
                    required: true,
                    number: true
                },

                no_int: {
                    number: true
                },

                colonia: {
                    required: true
                },

                municipio: {
                    required: true
                },

                localidad: {
                    required: true
                },

                cp: {
                    required: true
                },

                rfc: {
                    required: true
                },

                curp_fis: {
                    required: true
                },

                telefono: {
                    required: true
                },

                email: {
                    required: true,
                    email: true
                }
            },     

            messages: {
                nombre: {
                    required: "Favor de ingresar el nombre."
                },

                calle: {
                    required: "Favor de ingresar la calle."
                },

                no_ex: {
                    required: "Favor de ingresar el número exterior.",
                    number: "Favor de ingresar solo números."
                },

                no_int: {
                    number: "Favor de ingresar solo números."
                },

                colonia: {
                    required: "Favor de ingresar la colonia."
                },

                municipio: {
                    required: "Favor de seleccionar el municipio."
                },

                localidad: {
                    required: "Favor de ingresar la localidad."
                },

                cp: {
                    required: "Favor de ingresar el código postal."
                },

                rfc: {
                    required: "Favor de ingresar el RFC."
                },

                curp_fis: {
                    required: "Favor de ingresar la CURP."
                },

                telefono: {
                    required: "Favor de ingresar el teléfono."
                },

                email: {
                    required: "Favor de ingresar el correo electrónico."
                }
            },


            highlight: function (e) {
                $(e).closest('.form-group').removeClass('has-info').addClass('has-error');
            },

            success: function (e) {
                $(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
                $(e).remove();
            },

            errorPlacement: function (error, element) {
                if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
                    var controls = element.closest('div[class*="col-"]');
                    if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
                    else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
                }
                else if(element.is('.select2')) {
                    error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
                }
                else if(element.is('.chosen-select')) {
                    error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
                }
                else error.insertAfter(element.parent());
            },

            submitHandler: function (form) {
                
                
            }
        
        });
</script>