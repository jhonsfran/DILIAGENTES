<?php
class PruebaController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        
        $respuesta = "";
        
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
    
    public function indexar(){
         
        //Creamos el objeto prueba
        $prueba = new Prueba();
         
        //Conseguimos todas las pruebas
        $allpruebas = $prueba->getAll();
        
        if(empty($_SESSION['username'])) { // Recuerda usar corchetes.
            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
                "allpruebas"=>$allpruebas,
                "Hola"    =>"Soy Jhoan Sebastian Franco"
            ));
        }else{
            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
                "allpruebas"=>$allpruebas,
                "Hola"    =>"Soy Jhoan Sebastian Franco"
            ));
        }

        
    }
     
    public function crear(){
        
        
        if( isset($_POST["prueba_id"]) && isset($_POST["prueba_nombre"])){
            
            //Creamos una prueba
            $prueba = new Prueba();
            $prueba->setId($_POST["prueba_id"]);
            $prueba->setNombre($_POST["prueba_nombre"]);
            $save=$prueba->save();
        }
        $this->redirect("prueba", "index");
    }
     
    public function borrar(){
        
        
        if(isset($_GET["id"])){ 
            
            $id = (string) $_GET["id"];
            $prueba = new Prueba();
            $prueba->deleteById($id); 
            //deleteBy($column,$value)
        }
        
        $this->redirect();
    }
     
     
    public function hola(){
        
        $this->view("template",array());
    }
    
    public function diegonorrea(){
        
        $this->view("prueba",array());
    }
    
    public function ajax(){
        
        //$this->view("template",array());
        echo "sapo";
    }
 
}
?>