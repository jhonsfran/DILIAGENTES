<?php namespace orm\core\database;

include 'DataBaseProvider.php';

class PostgreSql extends DataBaseProvider {  
    
    public function connect($host, $user, $pass, $dbname, $port) {
        
        $this->resource = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

        if ($this->getErrorNo()) {
            // Connection fails
            error_log($this->resource->connect_error);
            
            
        }
        
        return $this->resource;
        
        print_r("error " . $this->resource);
    }
    
    public function disconnect() {
        return pg_close($this->resource);
    }
    public function getErrorNo() {
        return pg_last_error($this->resource);
    }
    public function getError($result) {
        return pg_result_error($result);
    }
    public function query($q) {
        
        $result = pg_query($this->resource,$q);
        
        return $result;
            
    }
    
    public function numRows($resource) {
        $num_rows = 0;
        if ($resource) {
            $num_rows = pg_num_rows($resource);
        }
        return $num_rows;
    }
    
    public function fetchArray($result) {
        
        return pg_fetch_assoc($result);
    }
    
    public function numRowsAffect($resource) {
        $num_rows = pg_affected_rows($resource);
        return $num_rows;
    }
    
    public function isConnected() {
        return !is_null($this->resource);
    }
    
    public function escape($var) {
        return pg_escape_string($var);
    }
    
    public function getInsertedID($result) {
        return pg_last_oid($result);
    }
    
    public function changeDB($database) {
        return $this->resource->select_db($database);
    }
    
    public function setCharset($charset) {
        //return $this->resource->set_charset($charset);
        return pg_set_client_encoding($this->resource, $charset);
    }
}