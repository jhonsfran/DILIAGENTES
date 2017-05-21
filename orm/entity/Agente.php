<?php namespace orm\entity;

use orm\entity\ORM as ORM;

/**
 * @id=agente_user_nickname
 * **/

class Agente extends ORM{
    private $agente_user_nickname;
    private $agente_reputacion;
    private $agente_estado;
    private $agente_rrss;
    private $agente_bio;
    private $tabla = "agente";
    
    public function __construct($data) {
        parent::__construct();


        if ($data != NULL && sizeof($data)) {
            $this->insertFlash($data);
        }
    }

    public function insertFlash($data) {
        foreach ($this as $key => $value) {
            $this->$key = isset($data["$key"]) ? $data["$key"] : null;
        }
    }

    public function listar() {
        return get_object_vars($this);
    }

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