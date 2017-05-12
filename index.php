<?php
//Configuración global
require_once 'config/global.php'; 
//Base para los controladores
require_once 'core/ControladorBase.php';
//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';


//herramientas para el manejo de sesion
require_once 'tools/tools.php';

//esta variable nos permite saber desde donde ingresa el usuario
//1 es que ingresa desde formulario inicio
//2 es que ya se encuentra logeado
//3 salir del sistema

if( isset( $_POST["id"] ) ){
    
    $id = $_POST["id"];
    
}else{
    
    $id = "1";
    
}

//la session durará una hora
ini_set("session.cookie_lifetime", "3600");

//iniciamos la sessión
session_start();

//Seteamos la hora de la sesion
$_SESSION["time"] = time();

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

        //validarCorto($controller,$action);
        frontController($controller,$action);
    }

    if ($id == '1') {

        if (isset($_POST["usuario"]) && isset($_POST["password"])) {

            $user_login = $_POST["usuario"];
            $user_passwd = $_POST["password"];

            validar($user_login, $user_passwd);
            
        } else {

            frontController(NULL,"vistaLogin");
        }
    };

    if ($id == '') {
        
        frontController(NULL,"salir");
    }
    
    if ($id == '3') {
        salirSistema();
    }
    
    
} else {
    
    frontController(NULL,"salir");
    
}




?>