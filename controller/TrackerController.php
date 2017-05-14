<?php


class TrackerController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        if(isset($_REQUEST["peticion"])){
            $action = $_REQUEST["peticion"];
        }else{
            $action = 'index';
        }
        

        switch ($action) {
            case 'index':
                $respuesta = "";
                $this->view("template", array());
                break;
            case 'solicitar_agentes':
                $respuesta = $this->solicitarAgentes($_REQUEST["dilegencia"]);
                
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
    
    public function solicitarAgentes($diligencia) {
        
        $prueba = new Prueba();

        //Conseguimos todas las pruebas
        $allpruebas = $prueba->getAll();

        return $allpruebas;
    }

}
?>