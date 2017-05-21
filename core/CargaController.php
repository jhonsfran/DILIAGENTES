<?php namespace core;
//FUNCIONES PARA EL CONTROLADOR FRONTAL

class CargaController{


    public static function cargarControlador($controller){
        $controlador = ucwords($controller).'Controller';
        $strFileController = 'controller/'.$controlador.'.php';

        if(!is_file($strFileController)){
            $strFileController = 'controller/'.ucwords(CONTROLADOR_DEFECTO).'Controller.php';
            $controlador = ucwords(CONTROLADOR_DEFECTO).'Controller';
        }

        require_once $strFileController;//incluyo el archivo del controlador

        $controlador = "controller\\" . $controlador;
        
        $controllerObj = new $controlador();
        return $controllerObj;
    }

    public static function cargarAccion($controllerObj,$action){
        $accion = $action;
        $controllerObj->$accion();
    }

    public static function lanzarAccion($controllerObj,$action){

        if(isset($action) && method_exists($controllerObj, $action)){
            self::cargarAccion($controllerObj, $action);
        }else{
            self::cargarAccion($controllerObj, ACCION_DEFECTO);
        }
    }
}
