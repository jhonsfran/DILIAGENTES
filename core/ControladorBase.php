<?php namespace core;

class ControladorBase{
 
    public function __construct() {
        
        
    }
     
    //Plugins y funcionalidades
     
/*
* Este método lo que hace es recibir los datos del controlador en forma de array
* los recorre y crea una variable dinámica con el indice asociativo y le da el 
* valor que contiene dicha posición del array, luego carga los helpers para las
* vistas y carga la vista que le llega como parámetro. En resumen un método para
* renderizar vistas.
*/
    
    //metodo render
    public function view($vista,$datos){
        
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc}=$valor; 
        }
         
        require_once 'core/AyudaVistas.php';
        $helper = new AyudaVistas();
        
            
        //cargo el header del template
        require_once 'view/template/header.php';

        //cargo la vista -> la vista sólo tiene el body del html
        require_once 'view/' . $vista . 'View.php';

        //cargo el footer
        require_once 'view/template/footer.php';
        
        
    }
    
    public function viewAjax($vista){
        
        ob_start();
        include( 'view/' . $vista . 'View.php' );
        $variable = ob_get_clean();
        
        return "$variable";
    }
     
    public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        header("Location:index.php?controller=".$controlador."&action=".$accion);
    }
    
    public function salir($action){
                
        if(isset($action)){ 
            
            $arr = array(
                'error_salida' => TRUE
            );

            echo json_encode($arr);
            
        }else{
            
            header("Location: landing/index.php.html");
            
        }    
        
    }


}

?>
