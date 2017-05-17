<?php


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
                $respuesta = $this->solicitarAgentes($_REQUEST["cantidad"]);
                //$respuesta = "";
                
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
        
        $usuarioModel = new UsuarioModel("usuario");

        //Conseguimos todas las pruebas
        $allAgentes = $usuarioModel->getAgentesDisponibles($cantidad);
        
        return $allAgentes;
    }

}
?>