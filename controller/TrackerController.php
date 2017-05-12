<?php


class TrackerController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        if(isset($_REQUEST["action"])){
            $action = $_REQUEST["action"];
        }else{
            $action = 'index';
        }

        switch ($action) {
            case 'index':
                $respuesta = "ingresó";
                $this->hola();
                break;
            case 'tracker':
                $respuesta = "tracker";
                $this->hola();
                break;
            case 'prueba':
                $this->diegonorrea();
                $respuesta = "gracias dios";
                break;
            default:
                $respuesta = "pailas";
        }
        
        $arr = array(
            'validar' => TRUE,
            'datos' => $respuesta
        );

        echo json_encode($arr);
    }
    
 
}
?>