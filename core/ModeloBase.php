<?php

class ModeloBase extends EntidadBase{
    private $table;
    //private $fluent;
     
    public function __construct($table) {
        
        $this->table=(string) $table;
        parent::__construct($table);
         
        //$this->fluent=$this->getConetar()->startFluent();
        
    }
     
    /*
    public function fluent(){
        return $this->fluent;
    }*/
     
    public function ejecutarSql($query){
        
        $query=pg_query($this->db(),$query);
        
        if($query==true){
            if(pg_num_rows($query)>1){
                while($row = pg_fetch_object($query)) {
                   $resultSet[]=$row;
                }
            }elseif(pg_num_rows($query)==1){
                if($row = pg_fetch_object($query)) {
                    $resultSet[]=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }
         
        //return $resultSet;
        
        return $resultSet;
    }

    //Aqui podemos montarnos métodos para los modelos de consulta
     
}
?>