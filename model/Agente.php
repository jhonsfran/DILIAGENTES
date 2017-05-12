<?php
class Agente extends EntidadBase{
    private $agente_user_nickname;
    private $agente_reputacion;
    private $agente_estado;
    private $agente_rrss;
    private $agente_bio;
    private $tabla = "agente";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }
    /*Formato de como deberia ser 
    public function getColumna() {
        return $this->atributoprivado;
    }
 
    public function setColumna($columna) {
        $this->atributoprivado = $columna;
    }
    */

    public function getUserNickname()
    {
        return $this->agente_user_nickname;
    }

    public function setUserNickname($userNickname)
    {
        $this->agente_user_nickname = $userNickname;
    }

    public function getReputacion()
    {
        return $this->agente_reputacion;
    }

    public function setReputacion($reputacion)
    {
        $this->agente_reputacion = $reputacion;
    }

    public function getEstado()
    {
        return $this->agente_estado;
    }

    public function setEstado($estado)
    {
        $this->agente_estado = $estado;
    }

    public function getRedesSociales()
    {
        return $this->agente_rrss;
    }

    public function setRedesSociales($redesSociales)
    {
        $this->agente_rrss = $redesSociales;
    }

    public function getBiografia()
    {
        return $this->agente_bio;
    }

    public function setBiografia($biografia)
    {
        $this->agente_bio = $biografia;
    }




}
?>