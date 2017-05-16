<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sesion
 *
 * @author Univalle_F
 */

function decrypt($edata) {
    $data = base64_decode($edata);
    $salt = substr($data, 0, 16);
    $ct = substr($data, 16);

    $rounds = 3; // depends on key length
    $data00 = GLOBAL_KEY . $salt;
    $hash = array();
    $hash[0] = hash('sha256', $data00, true);
    $result = $hash[0];
    for ($i = 1; $i < $rounds; $i++) {
        $hash[$i] = hash('sha256', $hash[$i - 1] . $data00, true);
        $result .= $hash[$i];
    }
    $key = substr($result, 0, 32);
    $iv = substr($result, 32, 16);

    return openssl_decrypt($ct, 'AES-256-CBC', $key, true, $iv);
}

/**
 * crypt AES 256
 *
 * @param data $data
 * @param string $password
 * @return base64 encrypted data
 */
function encrypt($data) {
// Set a random salt
    $salt = openssl_random_pseudo_bytes(16);

    $salted = '';
    $dx = '';
// Salt the key(32) and iv(16) = 48
    while (strlen($salted) < 48) {
        $dx = hash('sha256', $dx . GLOBAL_KEY . $salt, true);
        $salted .= $dx;
    }

    $key = substr($salted, 0, 32);
    $iv = substr($salted, 32, 16);

    $encrypted_data = openssl_encrypt($data, 'AES-256-CBC', $key, true, $iv);
    return base64_encode($salt . $encrypted_data);
}

function validar($user_login, $user_passwd) {
    
    $mensajes[] = "Usted ha digitado un usuario incorrecto o el usuario no existe en la Base de Datos";
    $mensajes[] = "La contraseña es invalida";
    $mensajes[] = "Su usuario ha sido desactivado";
    $mensajes[] = "Ok";
    $mensajes[] = "out";//este mensaje me valida desde ajax para salir

    
    try{
        

        $usuario = new Usuario();
        
        $resultObject = $usuario->getById('user_nickname',$user_login);

        //$usuario = $resultObject;

        foreach ($resultObject as $key => $object) {
            switch ($key) {
                case 'user_nickname':
                    $usuario->setUserNickname($object);
                    break;
                case 'user_password':
                    $usuario->setUserPassword($object);
                    break;        
                case 'user_rol':
                    $usuario->setUserRol($object);
                    break;                                             
            }           
        }

        echo $usuario->getUserNickname();

        if(($resultObject != NULL) &&  ($usuario->getUserPassword() == $user_passwd)){
            
            $mesaje_json = $mensajes[3];
            
            if (!isset($_SESSION)) {
                session_start();
            }
            //session_start();

            //esto nos indica si la sesion está iniciada
            $_SESSION["usuario"] = encrypt($usuario->getUserNickname());
            $_SESSION["password"] = encrypt($usuario->getUserPassword());
            $_SESSION["rol"] = encrypt($usuario->getUserRol());
            
            frontController();
            
        }
        
    }catch (Exception $ex){

        $mesaje_json = $mensajes[0];
        
        echo "-->mensaje: " . $ex->getMessage() . "\n";
        echo "-->code: " . $ex->getCode() . "\n";
    }

    
    
}

function validarCorto($controller,$action) {
    
    $mensajes[] = "Usted ha digitado un usuario incorrecto o el usuario no existe en la Base de Datos";
    $mensajes[] = "La contraseña es invalida";
    $mensajes[] = "Su usuario ha sido desactivado";
    $mensajes[] = "Ok";
    $mensajes[] = "out";//este mensaje me valida desde ajax para salir
    
    session_start();

    $user_login = decrypt($_SESSION["usuario"]);
    $user_passwd = decrypt($_SESSION["password"]);
    $user_rol = decrypt($_SESSION["rol"]);
    
    $prueba = new Prueba();
    
    try{
        
        $prueba->getById($user_login);
        
        if($prueba->getId() == $user_passwd){
            
            $mesaje_json = $mensajes[3];
            frontController($controller,$action);
            
        }
        
    }catch (Exception $ex){

        $mesaje_json = $mensajes[0];
        
        echo "-->mensaje: " . $ex->getMessage() . "\n";
        echo "-->code: " . $ex->getCode() . "\n";
    }
    
    
}

function frontController($controller = CONTROLADOR_DEFECTO,$action = ACCION_DEFECTO) {
    
    $controllerObj = cargarControlador($controller);
    lanzarAccion($controllerObj,$action);
    
}


function salirSistema() {

    unset($_SESSION["usuario"]);
    unset($_SESSION["time"]);
    unset($_SESSION["id"]);
    unset($_SESSION["usuario"]);
    unset($_SESSION["password"]);
    unset($_SESSION["rol"]);

    session_destroy();
    frontController(NULL, "salir");
}
