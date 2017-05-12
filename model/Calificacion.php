<?php
class Calificacion extends EntidadBase{
    private $califica_id;
    private $califica_id_diligencia;
    private $califica_comentario;
    private $califica_servicio;
    private $califica_confianza;
    private $califica_diligencia;
    private $califica_fecha;
    private $tabla = "calificacion";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }


    public function getId()
    {
        return $this->califica_id;
    }

    public function setId($id)
    {
        $this->califica_id = $id;
    }

    public function getIdDiligencia()
    {
        return $this->califica_id_diligencia;
    }

    public function setIdDiligencia($idDiligencia)
    {
        $this->califica_id_diligencia = $idDiligencia;
    }    

    public function getComentario()
    {
        return $this->califica_comentario;
    }

    public function setComentario($comentario)
    {
        $this->califica_comentario = $comentario;
    } 

    public function getServicio()
    {
        return $this->califica_servicio;
    }

    public function setServicio($servicio)
    {
        $this->califica_servicio = $servicio;
    }  

    public function getConfianza()
    {
        return $this->califica_confianza;
    }

    public function setConfianza($confianza)
    {
        $this->califica_confianza = $confianza;
    } 

    public function getDiligencia()
    {
        return $this->califica_diligencia;
    }

    public function setDiligencia($diligencia)
    {
        $this->califica_diligencia = $diligencia;
    }        

    public function getFecha()
    {
        return $this->califica_fecha;
    }

    public function setFecha($fecha)
    {
        $this->califica_fecha = $fecha;
    }  
 



}
?>