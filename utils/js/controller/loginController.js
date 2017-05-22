
$("#btn_sign_in").on("click",function() {//validar usuario

    var url_ajax = crearUrlAjaxLanding("login","index");//le decimos a qué url tiene que mandar la información, controlador - action

    var usuario_a_buscar = $("#usuario").val();
    var passwd_user = $("#password").val();

    //alert(url_ajax);
    //alert(passwd_user);

    registro_usuario_new = {
        peticion: 'index',
        id: '1',
        usuario: usuario_a_buscar,
        password: passwd_user
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

                if(data.validar){

                    toastr.success('Te has registrado exitosamente');
                    redireccionar(crearUrlAjaxLanding('prueba', 'hola'));

                }else{

                    toastr.error('Ha ocurrido un error');

                }

                
                
            }

        });
    };

});

function redireccionar(url_direccionar){
     location.href=url_direccionar;
} 
