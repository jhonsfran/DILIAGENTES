<?php namespace controller;

use orm\entity\Usuario as Usuario;
use core\ControladorBase as ControladorBase;
use tools\Tools as Tools;

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
                $this->registrarPosition($_REQUEST["position_cliente"]);
                $respuesta = $this->solicitarAgentes($_REQUEST["cantidad"]);
               
                
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
        
        $usuario = new Usuario(null);
        //$usuarios = $usuario->all();
        
        $query = "SELECT user_nombre,user_apellidos,user_nickname,user_foto,agente_reputacion FROM usuario,agente WHERE agente_user_nickname = user_nickname AND user_rol = '2' AND agente_estado = 't' LIMIT '$cantidad'";

        $usuarios = $usuario->executeQuery($query,null);

        //var_dump($usuarios);
        
        return $usuarios;
    }
    
    
    public function registrarPosition($position) {

        //$user_login = Tools::decrypt($_SESSION["usuario"]);
        //$user_rol = Tools::decrypt($_SESSION["rol"]);
        
        $usuario = new Usuario(null);
        
        //$resultObject = $usuario->find('jhonsfran');
        
        $resultObject = $usuario->find('jhonsfran');

        $resultObject->setPosition(json_encode($position));
        $resultObject->update();

        
    }

}
?>