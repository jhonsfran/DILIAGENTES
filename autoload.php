<?php

 //Configuración global
require_once 'config/global.php';

define("DIR_DEFAULT", realpath(dirname(__FILE__)));


class Autoloader {

    static public function autoload($className) {
        
        $dir = str_replace('\\', "/", DIR_DEFAULT);

        $className = ltrim($className, '\\');
        $fileName = '';
        $namespace = '';

        //echo "<br><br>lastNsPos: " . strrpos($className, '\\') . " Classname: $className";
        
        if ($lastNsPos = strrpos($className, '\\')) {

            $namespace = substr($className, 0, $lastNsPos);

            //echo "<br>Namespace: " . $namespace;

            $className = substr($className, $lastNsPos + 1);

           // echo "<br>Classname: " . $className;

            $fileName = str_replace('\\', "/", $namespace) . "/";

            //echo "<br>fileName: " . $fileName;
        }

        $fileName .= str_replace('_', "/", $className) . '.php';

        //echo "<br>file final0: " . $fileName;

        $fileName = $dir . "/" . $fileName;

        //echo "<br>file final: " . $fileName;

        //echo "<br>Real path: " . realpath(dirname(__FILE__));
        
        if (file_exists($fileName)) {
            require $fileName;
        }
    }

}

spl_autoload_register('Autoloader::autoload');

