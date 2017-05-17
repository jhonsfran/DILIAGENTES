<?php
class LoginController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $respuesta = "";
        
        if(isset($_REQUEST["peticion"])){
            $action = $_REQUEST["peticion"];
        }else{
            $action = 'index';
        }

        switch ($action) {
            case 'index':
                $respuesta = TRUE;                
                break;            
            case 'tracker':
                $respuesta = 'diegonorrea';                              
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
     
 
     
     
    public function hola(){
        
        $this->view("template",array());
    }
    

    public function vistaLogin()
    {
        $this->view("login",array());
    }

    public function diegonorrea(){
        
        $this->view("prueba",array());
    }
    
    public function ajax(){
        
        //$this->view("template",array());
        echo "sapo";
    }
 
}

