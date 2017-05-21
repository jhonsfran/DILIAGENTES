<?php
use tools\Tools as Tools;

require 'autoload.php';


//esta variable nos permite saber desde donde ingresa el usuario
//1 es que ingresa desde formulario inicio
//2 es que ya se encuentra logeado
//3 salir del sistema


session_start();



if( isset($_SESSION['id_session']) && (isset($_SESSION['password']) && isset($_SESSION['usuario']))){
        
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

        Tools::validarCorto($controller,$action);
        
        //Tools::frontController($controller,$action);
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

            Tools::validar($user_login, $user_passwd);
            
        } else {

            Tools::frontController(NULL,"vistaLogin");
        }
    };

    if ($id == '') {
        
        Tools::frontController(NULL,"salir");
    }
    
    if ($id == '3') {
        
        Tools::frontController($controller, $action);
        //salirSistema();
    }
    
    
} else {
    
    Tools::frontController(NULL,"salir");
    
}




?>