<?php

class EntidadBase{
    private $table;
    private $db;
    private $conectar;
 
    public function __construct($table) {
        
        $this->table = (string) $table;
         
        require_once 'Conectar.php';
        
        $this->conectar = new Conectar();
        $this->db = $this->conectar->conexion();
    }
     
    public function getConetar(){
        return $this->conectar;
    }
     
    public function db(){
        return $this->db;
    }
     
    public function getAll(){
        
        $query = pg_query($this->db,"SELECT * FROM $this->table ORDER BY prueba_id ASC");
          
        //Devolvemos el resultset en forma de array de objetos
        while ($row = pg_fetch_object($query)) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function getById($id){
        
        $query = pg_query($this->db,"SELECT * FROM $this->table WHERE prueba_id=$id");
 
        if($row = pg_fetch_object($query)) {
           $resultSet = $row;
        }
         
        return $resultSet;
    }
     
    public function getBy($column,$value){
        $query = pg_query($this->db,"SELECT * FROM $this->table WHERE $column='$value'");
 
        while($row = pg_fetch_object($query)) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function deleteById($id){

        $query = pg_query($this->db,"DELETE FROM $this->table WHERE prueba_id='$id'"); 
        return $query;
    }
     
    public function deleteBy($column,$value){
        $query = pg_query($this->db,"DELETE FROM $this->table WHERE $column='$value'"); 
        return $query;
    }
          
}
