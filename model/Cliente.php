<?php
class Cliente extends EntidadBase{
    private $cli_user_nickname;
    private $cli_experiencia;
    private $cli_profesion;

    private $tabla = "cliente";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }


    public function getUserNickname()
    {
        return $this->cli_user_nickname;
    }

    public function setUserNickname($userNickname)
    {
        $this->cli_user_nickname = $userNickname;
    }

        public function getExperiencia()
    {
        return $this->cli_experiencia;
    }

    public function setExperiencia($experiencia)
    {
        $this->cli_experiencia = $experiencia;
    }

    public function getProfesion()
    {
        return $this->cli_profesion;
    }

    public function setProfesion($profesion)
    {
        $this->cli_profesion = $profesion;
    }    




}
?>