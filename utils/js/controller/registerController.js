
$("#btn_sign_up").on("click",function() {//validar usuario

    var url_ajax = crearUrlAjaxLanding("register","registroCliente");//le decimos a qué url tiene que mandar la información, controlador - action

    var nombre = $("#name").val();
    var apellido = $("#lastname").val();
    var correo = $("#email").val();
    var telefono = $("#phone").val();
    var celular = $("#smartphone").val();
    var numero_documento = $("#document_number").val();
    var tipo_documento = $("#document_type").val();
    var nickname = $("#nickname").val();
    var password = $("#password").val();

    registro_json = {
        id: '3',        
        nombre: nombre,
        apellido: apellido,
        correo: correo,
        telefono: telefono,
        celular: celular,
        numero_documento: numero_documento,
        tipo_documento: tipo_documento,
        nickname: nickname,
        password: password
    }

    //alert(registro_json);
    


    if(nickname == '' || password == ''){

        toastr.error("Username y/o contraseña vacíos, por favor digite un valor");
    
    }else{

        httpPetition.ajxPost(url_ajax, registro_json, function (data) {
            
            //alert(data.error_salida);
            if(data.validar){

                toastr.success('Te has registrado exitosamente');
                redireccionar("login.php");
                
            }else{
                toastr.error('Ha ocurrido un error');
            }

        });

        
    };

});

function redireccionar(url_direccionar){
    setTimeout(function(){ location.href=url_direccionar; }, 3000); //tiempo expresado en milisegundos
} 
