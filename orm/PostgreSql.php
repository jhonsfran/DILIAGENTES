<?php

require_once ('DataBaseProvider.php');  

class PostgreSql extends DataBaseProvider {  
    
    public function connect($host, $user, $pass, $dbname, $port) {
        
        $this->resource = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");

        if ($this->resource->connect_errno) {
            // Connection fails
            error_log($this->resource->connect_error);
        }
        return $this->resource;
    }
    
    public function disconnect() {
        return pg_close($this->resource);
    }
    public function getErrorNo() {
        return pg_last_error($this->resource);
    }
    public function getError() {
        return pg_result_error($this->resource);
    }
    public function query($q) {
        return $this->resource->pg_query($q);
    }
    public function numRows($resource) {
        $num_rows = 0;
        if ($resource) {
            $num_rows = $this->resource->pg_query($resource);
        }
        return $num_rows;
    }
    
    public function fetchArray($result) {
        return $result->pg_fetch_assoc();
    }
    
    public function isConnected() {
        return !is_null($this->resource);
    }
    
    public function escape($var) {
        return $this->resource->pg_escape_string($var);
    }
    
    public function getInsertedID() {
        return $this->resource->insert_id;
    }
    
    public function changeDB($database) {
        return $this->resource->select_db($database);
    }
    
    public function setCharset($charset) {
        return $this->resource->set_charset($charset);
    }
}