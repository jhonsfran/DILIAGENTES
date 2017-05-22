<?php namespace orm\entity;

use orm\core\database\Database as Database;
use orm\core\exception\ExceptionHandler as ExceptionHandler;
use ReflectionClass;

class ORM{  
    
    private static $database;
    protected static $table;
    
    function __construct() {
        self::getConnection();
    }
    
    private static function getConnection() {
        
        $db_cfg = require 'config/globals_bd.php';

        $driver = $db_cfg["driver"];
        $host = $db_cfg["host"];
        $user = $db_cfg["user"];
        $pass = $db_cfg["pass"];
        $dbname = $db_cfg["database"];
        $port = $db_cfg["port"];
                
        self::$database = Database::getConnection($driver, $host, $user, $pass, $dbname, $port);
    }
    
    public static function find($id) {
        $results = self::where(self::getIdClass(), $id);
        return $results[0];
    }
    
    public static function where($field, $value) {
        $obj = null;
        self::getConnection();
        $query = "SELECT * FROM " . static ::$table . " WHERE " . $field . " = ?";
        
        $results = self::$database->execute($query, null, array($value));
        
        
        if (!is_null($results)) {
            
            $class = get_called_class();
            
            for ($i = 0;$i < sizeof($results);$i++) {
                $obj[$i] = new $class($results[$i]);
                
            }
            
            return $obj;
            
        }else{
            throw new ExceptionHandler(ExceptionHandler::CONSULTA_SIN_RESULTADOS);
        }
        
        
        
    }
    
    public static function all($order = null) {
        $objs = null;
        self::getConnection();
        $query = "SELECT * FROM " . static ::$table;
        if ($order) {
            $query.= $order;
        }
        
        $results = self::$database->execute($query, null, null);
        
        //var_dump(!is_null($results));
        
        if (!is_null($results)) {
            
            $class = get_called_class();
            
            /*if ($lastNsPos = strrpos($class, '\\')) {
                $class = substr($class, $lastNsPos + 1);
            }*/

            
            foreach ($results as $index => $obj) {
                
                //var_dump(new $class($obj));
                
                $objs[] = new $class($obj);
            }
        }else{
            throw new ExceptionHandler(ExceptionHandler::CONSULTA_SIN_RESULTADOS);
        }
        
        
        //var_dump($objs);
        return $objs;
        
    }
    
    public function save() {
        
        $values = $this->listar();
        
        $field_id_class = self::getIdClass();
        $filtered = null;

        foreach ($values as $key => $value) {
            $filtered[$key] = $value;
        }
        
        $columns = array_keys($filtered);//relleno el array con las columnas

        if(!self::existId($filtered[$field_id_class])){
        
            throw new ExceptionHandler(ExceptionHandler::REGISTRO_DUPLICADO);
            
        }else{
            
            $params = join(", ", array_fill(0, count($columns), "?"));
            $columns = join(", ", $columns);
            $query = "INSERT INTO " . static ::$table . " ($columns) VALUES ($params)";

            $result = self::$database->execute($query, null, $filtered);

            if ($result) {
                $result = array('error' => false, 'message' => self::$database->getInsertedID($result));
            } else {
                $result = array('error' => true, 'message' => self::$database->getError($result));
            }

            return $result;
        }
        
            
        
    }
    
    public function delete() {
        
        $values = $this->listar();
        $field_id_class = self::getIdClass();

        $filtered = null;

        foreach ($values as $key => $value) {
            
            if($key == $field_id_class){
                $filtered[$key] = $value;
            }
            
        }
        
        if(!self::existId($filtered[$field_id_class])){
        
            throw new ExceptionHandler(ExceptionHandler::REGISTRO_NO_EXISTE);
            
        }else{

            $query = "DELETE FROM " . static ::$table . " WHERE " . $field_id_class . " = '?'";

            $result = self::$database->execute($query,$filtered);

            if ($result) {
                $result = array('error' => false, 'message' => self::$database->getInsertedID($result));
            } else {
                $result = array('error' => true, 'message' => self::$database->getError($result));
            }
        
        }
        
        return $result;
    }
    
    public function executeQuery($query, $params) {

        $obj = null;
        $result = self::$database->executeQuery($query, $params);
        
        //var_dump($result);

        if (!is_null($result)) {
            
            /*$class = get_called_class();
            
            for ($i = 0;$i < sizeof($result);$i++) {
                $obj[$i] = new $class($result[$i]);
                
            }*/
            
            return $result;
            
        }else{
            throw new ExceptionHandler(ExceptionHandler::CONSULTA_SIN_RESULTADOS);
        }
    }

    public function update() {

        $values = $this->listar();
        $filtered = null;
        $field_id_class = self::getIdClass();

        foreach ($values as $key => $value) {
            
            //if ($value !== null && $value !== '' && strpos($key, 'obj_') === false && $key !== $field_id_class) {
                $filtered[$key] = $value;
            //}
        }
        
        $value_id_class = $filtered[$field_id_class];

        if (!self::existId($value_id_class)) {

            throw new ExceptionHandler(ExceptionHandler::REGISTRO_NO_EXISTE);
            
        }else{
            
            $columns = array_keys($filtered); //relleno el array con las columnas

            $columns = join(" = ?, ", $columns);
            $columns.= ' = ?';
            $query = "UPDATE " . static ::$table . " SET $columns WHERE " . $field_id_class . " = '" . $value_id_class . "'";

            $result = self::$database->executeQuery($query, $filtered);

            //echo($query);

            if ($result) {
                $result = array('error' => false, 'message' => self::$database->getInsertedID($result));
            } else {
                $result = array('error' => true, 'message' => self::$database->getError($result));
            }
            
        }
                
        return $result;
        
    }

    public static function getIdClass() {
        
        $class = get_called_class();

        $rc = new ReflectionClass($class);
        
        $doc = $rc->getDocComment();
        
        $re1 = '.*?'; # Non-greedy match on filler
        $re2 = '(?:[a-z][a-z0-9_]*)'; # Uninteresting: var
        $re3 = '.*?'; # Non-greedy match on filler
        $re4 = '((?:[a-z][a-z0-9_]*))'; # Variable Name 1

        if (preg_match_all("/" . $re1 . $re2 . $re3 . $re4 . "/is", $doc, $matches)) {
            
            $var = $matches[1][0];
            //echo "($var) \n";
        }
        
        return $var;
        
        //echo $var;
    }
    
    public function existId($id) {
                
        $result = self::find($id);

        if(!is_null($result)){
            return true;
        }else{
            return false;
        }
        
        
    }

}
