$("#login").delegate('#ingresoLogin', 'click', function () {//validar usuario

    var url_ajax = crearUrlAjax("prueba","index");//le decimos a qué url tiene que mandar la información, controlador - action

    var usuario_a_buscar = $("#name").val();
    var passwd_user = $("#pswd").val();

    alert(url_ajax);
    alert(passwd_user);

    registro_usuario_new = {
        action: 'ingresar',
        username: usuario_a_buscar,
        password_user: passwd_user
    };

    if(usuario_a_buscar == '' || passwd_user == ''){

        toastr.error("Username y/o contraseña vacíos, por favor digite un valor");
    
    }else{
        httpPetition.ajxPost(url_ajax, registro_usuario_new, function (data) {

            
            //alert(data.error_salida);
            
            if (typeof data.error_salida != 'undefined'){
            
                if(data.error_salida == true){

                    swal("Oops!", "La sesión ha finalizado", "error");

                    redireccionar(Define.URL_LANDING);

                }
                
            }else{
                
                
            }

        });
    };

});

function redireccionar(url_direccionar){
    setTimeout(function(){ location.href=url_direccionar; }, 3000); //tiempo expresado en milisegundos
} 


/*
$("#menu_principal").delegate('#tracker', 'click', function () {//validar usuario

    var url_ajax = crearUrlAjax("tracker","index");//le decimos a qué url tiene que mandar la información, controlador - action

    
    httpPetition.ajxPost(url_ajax, null, function (data) {
        
        data = JSON.parse(data);
            
        //alert(data.datos);

        if (typeof data.error_salida != 'undefined'){

            if(data.error_salida == true){

                swal("Oops!", "La sesión ha finalizado", "error");

                redireccionar(Define.URL_LANDING);

            }

        }else{
                        
            $("#contenido").hide();
            $("#contenido").html("");
            $("#contenido").html(data.datos);
            $("#contenido").show("slow");
            
            initMap();
            
            //swal("Oops!", "La sesión ha finalizado", "error");

        }

    });

});
*/
    


$("#menu_principal").delegate('#tracker', 'click', function () {//validar usuario

    $("#contenido").hide();
    var html_string = "<div class='block-header'> <h2> GOOGLE MAPS <small>Mapa para localización</small> </h2> </div><div class='alert alert-warning'> Es importante que <b>confirme</b> su ubicación para que el Agente pueda atender su solicitud &nbsp;&nbsp;<button id='confirmaPosicion' type='button' class='btn btn-primary waves-effect'>Confirmar posición</button></div>";
        html_string += "<div id='map' style='width: 50%; height: 50%; border: 1px solid #777; overflow: scroll;'></div>";    
    
    $("#contenido").html(html_string);

    $.getJSON('https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Qs5yPPHgIj6UJAY-1NJhP_JLfO-VK14&callback=?', function(){
        initMap();
    });

    $("#contenido").show("slow");


});

$("#contenido").delegate('#confirmaPosicion', 'click', function () {//validar usuario

    swal({
        title: "¿Esta seguro que esta es la posición?",
        text: "Luego d realizar la solicitud el sistema le notificará nuestros agentes disponibles",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#1f91f3",
        confirmButtonText: "Si, Confirmar",
        closeOnConfirm: false
    },
    function () {
        
        swal("Solicitud enviada!", "En un momento se le notificará de los agentes disponibles", "success");
        
        var url_ajax = crearUrlAjax("tracker", "index");//le decimos a qué url tiene que mandar la información, controlador - action

        var datos_diligencia = 'prueba';

        solicitud = {
            peticion: 'solicitar_agentes',
            dilegencia: datos_diligencia
        };

        if (datos_diligencia == '') {

            toastr.error("Ha ocurrido un error. Por favor vuelva a realizar la diligencia");

        } else {
            
            httpPetition.ajxPost(url_ajax, solicitud, function (data) {
                
                //JSON.parse(data);

                if (typeof JSON.parse(data).error_salida != 'undefined') {

                    if (JSON.parse(data).error_salida == true) {

                        swal("Oops!", "La sesión ha finalizado", "error");

                        redireccionar(Define.URL_LANDING);

                    }

                } else {

                    
                    //alert(JSON.parse(data).datos);
                    
                    $("#num_agentes").hide();
                    $("#num_agentes").hide();
                    
                    $("#num_agentes").html('');
                    $("#agentes_disponibles").html('');
                    
                    var count = 1;
                    var html_string = "";
                    
                    $(JSON.parse(data).datos).each(function (index, element) {
                        
                        alert("agentes_disponibles");

                        html_string += "<li><ahref='javascript:void(0);'><h4>"+element.prueba_nombre+"<small>32%</small></h4><divclass='progress'><divclass='progress-barbg-pink'role='progressbar'aria-valuenow='85'aria-valuemin='0'aria-valuemax='100'style='width:32%'></div></div></a></li>";
                        
                        count++;

                    });
                    
                    
                    
                    $("#num_agentes").html('5');
                    
                    $("#agentes_disponibles").html(html_string);
                    
                    $("#num_agentes").show();
                    $("#num_agentes").show();
                }

            });
        }
        ;
        
    });


});


function initMap() {

    if (navigator.geolocation) { 
        
            navigator.geolocation.getCurrentPosition(function(position) { 
                
                Define.LATITUD = position.coords.latitude;
                Define.LONGITUD = position.coords.longitude;

                var point = new google.maps.LatLng(position.coords.latitude, 
                                                   position.coords.longitude);

                //permite crear un marcador extra
                /*
                var latitude = event.latLng.lat();
                var longitude = event.latLng.lng();

                var markerLatLng = new google.maps.LatLng(latitude,
                        longitude);

                //registrarPosicion();
                //console.log(latitude + ', ' + longitude);

                var marker1 = new google.maps.Marker({
                    position: markerLatLng,
                    draggable: true
                });
                */
                    
                var marker2 = new google.maps.Marker({
                    position: point,
                    icon: "utils/img/cliente1.png",
                    draggable: true
                });
                
                
                infoWindow = new google.maps.InfoWindow();
                                                   

                // Initialize the Google Maps API v3
                var map = new google.maps.Map(document.getElementById('map'), {
                   zoom: 15,
                  center: point,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                //mouseover              
                google.maps.event.addListener(marker2, 'mouseup', function () {
                    openInfoWindow(marker2);
                });
                
                

                //Descomentar esto y lo de arriba para poder agragar un marcado
                /*
                google.maps.event.addListener(map, "click", function (event) {
                    
                    latitude = event.latLng.lat();
                    longitude = event.latLng.lng();

                    marker1.setMap(map);

                });
                */
                            
                marker2.setMap(map);

            }, function () {
                
            handleLocationError(true, infoWindow, map.getCenter());
        
        });
        
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
    
}

function openInfoWindow(marker) {
    
    var markerLatLng = marker.getPosition();
    
    Define.LATITUD = markerLatLng.lat();
    Define.LONGITUD = markerLatLng.lng();
    
    
    infoWindow.setContent([
        '<b>La posicion del marcador es:</b><br><br><b>latitud:</b>',
        markerLatLng.lat(),
        ',<br> <b>Longitud:</b>',
        markerLatLng.lng(),
        '<br><br> Arrástrame y haz click para actualizar la posición exacta.'
    ].join(''));
    infoWindow.open(map, marker);
}


function registrarPosicion() {
    
    var markerLatLng = marker.getPosition();
    
    var marker = new google.maps.Marker({
        position: markerLatLng,
        icon: "utils/img/agente2.png",
        draggable: false
    });
    
    
    marker.setMap(map);
    
}


function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\'t support geolocation.');
}