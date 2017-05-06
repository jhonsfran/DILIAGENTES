<?php
class PruebaController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
     
    public function index(){
         
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
 
}
?>