<?php
class RegisterController extends ControladorBase{
     
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
                $respuesta = "ingresó";
                $this->vistaLogin();
                break;            
            case 'registro':
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

    public function registroCliente()
    {        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $celular = $_POST["celular"];
        $numero_documento = $_POST["numero_documento"];
        $tipo_documento = $_POST["tipo_documento"];
        $nickname = $_POST["nickname"];
        $password = $_POST["password"]


        var_dump($nickname);
    
    }
 
}
?>