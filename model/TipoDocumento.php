<?php
class TipoDocumento extends EntidadBase{
    private $tpdoc_id;
    private $tpdoc_codigo;
    private $tpdoc_nombre;
    private $tpdoc_fecha;

    private $tabla = "tipo_documento";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }
    

    /**
     * Gets the value of tpdoc_id.
     *
     * @return mixed
     */
    public function getTpdocId()
    {
        return $this->tpdoc_id;
    }

    /**
     * Sets the value of tpdoc_id.
     *
     * @param mixed $tpdoc_id the tpdoc id
     *
     * @return self
     */
    private function _setTpdocId($tpdoc_id)
    {
        $this->tpdoc_id = $tpdoc_id;

        return $this;
    }

    /**
     * Gets the value of tpdoc_codigo.
     *
     * @return mixed
     */
    public function getTpdocCodigo()
    {
        return $this->tpdoc_codigo;
    }

    /**
     * Sets the value of tpdoc_codigo.
     *
     * @param mixed $tpdoc_codigo the tpdoc codigo
     *
     * @return self
     */
    private function _setTpdocCodigo($tpdoc_codigo)
    {
        $this->tpdoc_codigo = $tpdoc_codigo;

        return $this;
    }

    /**
     * Gets the value of tpdoc_nombre.
     *
     * @return mixed
     */
    public function getTpdocNombre()
    {
        return $this->tpdoc_nombre;
    }

    /**
     * Sets the value of tpdoc_nombre.
     *
     * @param mixed $tpdoc_nombre the tpdoc nombre
     *
     * @return self
     */
    private function _setTpdocNombre($tpdoc_nombre)
    {
        $this->tpdoc_nombre = $tpdoc_nombre;

        return $this;
    }

    /**
     * Gets the value of tpdoc_fecha.
     *
     * @return mixed
     */
    public function getTpdocFecha()
    {
        return $this->tpdoc_fecha;
    }

    /**
     * Sets the value of tpdoc_fecha.
     *
     * @param mixed $tpdoc_fecha the tpdoc fecha
     *
     * @return self
     */
    private function _setTpdocFecha($tpdoc_fecha)
    {
        $this->tpdoc_fecha = $tpdoc_fecha;

        return $this;
    }

    /**
     * Gets the value of tabla.
     *
     * @return mixed
     */
    public function getTabla()
    {
        return $this->tabla;
    }

}
?>