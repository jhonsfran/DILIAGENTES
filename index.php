<?php

//esta variable nos permite saber desde donde ingresa el usuario
//1 es que ingresa desde formulario inicio
//2 es que ya se encuentra logeado
//3 salir del sistema


session_start();



if( isset($_SESSION['id_session']) ){
        
    if (isset($_POST['id'])) {

        $id = $_POST['id'];
        
    } else {

        $id = '2';
    }
    
}else{
    
    
    //la session durará una hora
    ini_set("session.cookie_lifetime", "3600");

    //Seteamos la hora de la sesion
    $_SESSION["time"] = time();
    
    session_regenerate_id();
    
    if (isset($_POST['id'])) {

        $id = $_POST['id'];
    } else {

        $id = '';
    }
    
}

//$id = '2';

//Configuración global
require_once 'config/global.php'; 
//Base para los controladores
require_once 'core/ControladorBase.php';
//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

require_once 'core/EntidadBase.php';

require_once 'core/ModeloBase.php';
        
//Incluir todos los modelos
foreach(glob("model/*.php") as $file){
    require_once $file;
}

//herramientas para el manejo de sesion
require_once 'tools/tools.php';


if (isset($_GET["controller"])) {
    $controller = $_GET["controller"];
} else {
    //Cargamos controladores
    $controller = CONTROLADOR_DEFECTO;
}

if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    //Cargamos acciones por defecto
    $action = ACCION_DEFECTO;
}


if (time() - $_SESSION["time"] < 3600) {
    
    
    if ($id == '2') {

        validarCorto($controller,$action);
        
        //frontController($controller,$action);
    }

    if ($id == '1') {

        if (isset($_POST["usuario"]) && isset($_POST["password"])) {
        
        //$usu = "jhonsfran";
        //$pass = "JSFT1165";
            
        //if (isset($usu) && isset($pass)) {

            $user_login = $_POST["usuario"];
            $user_passwd = $_POST["password"];
            
            //$user_login = $usu;
            //$user_passwd = $pass;

            validar($user_login, $user_passwd);
            
        } else {

            frontController(NULL,"vistaLogin");
        }
    };

    if ($id == '') {
        
        frontController(NULL,"salir");
    }
    
    if ($id == '3') {
        
        frontController($controller, $action);
        //salirSistema();
    }
    
    
} else {
    
    frontController(NULL,"salir");
    
}




?>