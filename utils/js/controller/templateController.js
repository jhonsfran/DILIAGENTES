
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
