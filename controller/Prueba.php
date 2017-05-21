<?php
use entity\Usuario as Usuario;


$usuario = new Usuario(null);
//$usuarios = $usuario->all();

$usuarios = $usuario->where("user_nickname","diegonorrea");

//echo print_r($usuarios);



foreach ($usuarios as $object) {
    
    try{
        
        $usuario = $object;
        $usuario->setUserNombre("yyyy");
        
        echo print_r($usuario->update());


        //$usuario->update();

        //echo print_r("<br>" . $usuario->update());
        
        //$object->save();
        //echo $object->getUserApellidos();
        
    }catch(Exception $ex){
        
        
        $error = TRUE;
        $mensaje = $ex->getMessage();
        $cod_error =  $ex->getCode();
        
        $array_res = array(
            'error' => $error,
            'mensaje' => $mensaje,
            'codigo' => $cod_error
            );
        
            echo json_encode($array_res);
    }
    
    

}
