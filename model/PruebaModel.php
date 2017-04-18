<?php
class PruebaModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="pruebas";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getUnaPrueba(){
        $query="SELECT * FROM pruebas";
        $prueba=$this->ejecutarSql($query);
        return $prueba;
    }
}
?>