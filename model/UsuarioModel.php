<?php
class UsuarioModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="usuario";
        parent::__construct($this->table);
    }
     
    //Metodos de consulta
    public function getAgentesDisponibles($cantidad){
        
        
        $query="SELECT user_nombre,user_apellidos,user_nickname,user_foto,agente_reputacion FROM usuario,agente WHERE agente_user_nickname = user_nickname AND user_rol = '2' AND agente_estado = 't' LIMIT '$cantidad'";
        
        $agentes=$this->ejecutarSql($query);
        
        return $agentes;

    }
    
}