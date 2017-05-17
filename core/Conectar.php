<?php

class Conectar{
    private $driver, $host, $user, $pass, $database, $charset, $port, $conexion, $errorCode;
    
    public function __construct() {
        
        $db_cfg = require_once 'config/database.php';
        
        /*$this->driver = $db_cfg["driver"];
        $this->host = $db_cfg["host"];
        $this->user = $db_cfg["user"];
        $this->pass = $db_cfg["pass"];
        $this->database = $db_cfg["database"];
        $this->charset = $db_cfg["charset"];
        $this->port = $db_cfg["port"];*/
        
        
        $this->driver = "postgresql";
        $this->host = "localhost";
        $this->user = "postgres";
        $this->pass = "1234";
        $this->database = "diliagentes";
        $this->charset = "utf8";
        $this->port = "5432";
        
        
        //echo $this->$driver, $this->$host, $this->$user, $this->$pass, $this->$database, $this->$charset, $this->$port, $this->$conexion, $this->$errorCode;

    }
    
    public function conexion(){
        
        if($this->driver=="postgresql" || $this->driver==NULL){
            $con = pg_connect("host=$this->host port=$this->port dbname=$this->database user=$this->user password=$this->pass");
        }
        
        if (!$con) {
            echo ("Ocurri&oacute; un error.\n");
            exit;
        }
            
        $this->conexion = $con;
        return $this->conexion;
        
    }
    
    public function close() {
        if ($this->conexion != "-1") {
            $this->RollbackTrans(); // rollback transaction before closing
            $closed = pg_close($this->conexion);
            return $closed;
        } else {
            // connection does not exist
            return null;
        }
    }
    
    public function errorMsg() {
        if ($this->conexion == "-1") {
            switch ($this->errorCode) {
                case -1:
                    return "FATAL ERROR - CONNECTION ERROR: RESOURCE NOT FOUND";
                    break;
                case -2:
                    return "FATAL ERROR - CLASS ERROR: FUNCTION CALLED WITHOUT PARAMETERS";
                    break;
                default:
                    return null;
            }
        } else {
            return pg_errormessage($this->conexion);
        }
    }
    
    //Sql builder
    /*
    public function startFluent(){
        
        require_once "FluentPDO/FluentPDO.php";
         
        if($this->driver=="postgresql" || $this->driver==null){
            $pdo = new PDO($this->driver.":dbname=".$this->database, $this->user, $this->pass);
            $fpdo = new FluentPDO($pdo);
        }
         
        return $fpdo;
    }
     * 
     */
}

