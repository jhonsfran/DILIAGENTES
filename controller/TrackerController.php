<?php namespace controller;

class TrackerController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        if(isset($_REQUEST["peticion"])){
            $peticion = $_REQUEST["peticion"];
        }else{
            $peticion = 'index';
        }
        

        switch ($peticion) {
            case 'index':
                $respuesta = "";
                $this->view("template", array());
                break;
            
            case 'solicitar_agentes':
                //$respuesta = $this->solicitarAgentes($_REQUEST["cantidad"]);
                $respuesta = $this->registrarPosition($_REQUEST["position_cliente"]);
                
                break;
            case 'prueba':
                $this->diegonorrea();
                $respuesta = "gracias dios";
                break;
            default:
                $respuesta = "";
        }

        
        $arr = array(
            'error_salida' => FALSE,
            'datos' => $respuesta
        );

        echo json_encode($arr);
    }
    
    public function solicitarAgentes($cantidad) {
        
        $usuarioModel = new UsuarioModel();

        //Conseguimos todas las pruebas
        $allAgentes = $usuarioModel->getAgentesDisponibles($cantidad);
        

        return $allAgentes;
    }
    
    
    public function registrarPosition($position) {

        $user_login = decrypt($_SESSION["usuario"]);
        $user_rol = decrypt($_SESSION["rol"]);
        
        //echo $user_login;
        //echo $user_rol;
        //echo json_encode($position);

        $usuario = new Usuario();
        
        $resultObject = $usuario->getById('user_nickname', $user_login);
        
        //echo $resultObject;
        
        /*foreach ($resultObject as $key => $object) {
            echo $key." => ".$object;
        }*/

        echo $usuario->update($resultObject);
/*
        $resultObject = $usuario->getById('user_nickname',$user_login);

        foreach ($resultObject as $key => $object) {
            switch ($key) {
            case 'user_nickname':
            $usuario->setUserNickname($object);
            break;
            case 'user_password':
            $usuario->setUserPassword($object);
            break;
            case 'user_rol':
            $usuario->setUserRol($object);
            break;
            }
        }

        return $allAgentes;
         * */
    }

}
?>