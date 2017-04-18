<?php
class Prueba extends EntidadBase{
    private $prueba_id;
    private $prueba_nombre;
    private $tabla = "pruebas";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }
     
    public function getId() {
        return $this->prueba_id;
    }
 
    public function setId($id) {
        $this->prueba_id = $id;
    }
     
    public function getNombre() {
        return $this->prueba_nombre;
    }
 
    public function setNombre($nombre) {
        $this->prueba_nombre = $nombre;
    }
 
    public function save(){
        $query = "INSERT INTO $this->tabla (prueba_id,prueba_nombre)
                VALUES('".$this->prueba_id."','".$this->prueba_nombre."');";
        $save = pg_query($this->db(),$query);
        //$this->db()->error;
        return $save;
    }
 
}
?>