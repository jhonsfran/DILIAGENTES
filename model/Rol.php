<?php
class Rol extends EntidadBase{
    private $rol_id;
    private $rol_nombre;
    private $rol_fecha;

    private $tabla = "rol";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }


    /**
     * Gets the value of rol_id.
     *
     * @return mixed
     */
    public function getRolId()
    {
        return $this->rol_id;
    }

    /**
     * Sets the value of rol_id.
     *
     * @param mixed $rol_id the rol id
     *
     * @return self
     */
    private function _setRolId($rol_id)
    {
        $this->rol_id = $rol_id;

        return $this;
    }

    /**
     * Gets the value of rol_nombre.
     *
     * @return mixed
     */
    public function getRolNombre()
    {
        return $this->rol_nombre;
    }

    /**
     * Sets the value of rol_nombre.
     *
     * @param mixed $rol_nombre the rol nombre
     *
     * @return self
     */
    private function _setRolNombre($rol_nombre)
    {
        $this->rol_nombre = $rol_nombre;

        return $this;
    }

    /**
     * Gets the value of rol_fecha.
     *
     * @return mixed
     */
    public function getRolFecha()
    {
        return $this->rol_fecha;
    }

    /**
     * Sets the value of rol_fecha.
     *
     * @param mixed $rol_fecha the rol fecha
     *
     * @return self
     */
    private function _setRolFecha($rol_fecha)
    {
        $this->rol_fecha = $rol_fecha;

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