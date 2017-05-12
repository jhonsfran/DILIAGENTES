<?php
class Diligencia extends EntidadBase{
    private $dil_id;
    private $dil_asunto;
    private $dil_archivos;
    private $dil_mensaje;
    private $dil_costo;
    private $dil_estado;
    private $dil_dir_origen;
    private $dil_dir_fin;
    private $dil_user_cliente;
    private $dil_user_agente;
    private $dil_fecha;


    private $tabla = "diligencia";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }


    /**
     * Gets the value of dil_id.
     *
     * @return mixed
     */
    public function getDilId()
    {
        return $this->dil_id;
    }

    /**
     * Sets the value of dil_id.
     *
     * @param mixed $dil_id the dil id
     *
     * @return self
     */
    private function setDilId($dil_id)
    {
        $this->dil_id = $dil_id;

        return $this;
    }

    /**
     * Gets the value of dil_asunto.
     *
     * @return mixed
     */
    public function getDilAsunto()
    {
        return $this->dil_asunto;
    }

    /**
     * Sets the value of dil_asunto.
     *
     * @param mixed $dil_asunto the dil asunto
     *
     * @return self
     */
    private function setDilAsunto($dil_asunto)
    {
        $this->dil_asunto = $dil_asunto;

        return $this;
    }

    /**
     * Gets the value of dil_archivos.
     *
     * @return mixed
     */
    public function getDilArchivos()
    {
        return $this->dil_archivos;
    }

    /**
     * Sets the value of dil_archivos.
     *
     * @param mixed $dil_archivos the dil archivos
     *
     * @return self
     */
    private function setDilArchivos($dil_archivos)
    {
        $this->dil_archivos = $dil_archivos;

        return $this;
    }

    /**
     * Gets the value of dil_mensaje.
     *
     * @return mixed
     */
    public function getDilMensaje()
    {
        return $this->dil_mensaje;
    }

    /**
     * Sets the value of dil_mensaje.
     *
     * @param mixed $dil_mensaje the dil mensaje
     *
     * @return self
     */
    private function setDilMensaje($dil_mensaje)
    {
        $this->dil_mensaje = $dil_mensaje;

        return $this;
    }

    /**
     * Gets the value of dil_costo.
     *
     * @return mixed
     */
    public function getDilCosto()
    {
        return $this->dil_costo;
    }

    /**
     * Sets the value of dil_costo.
     *
     * @param mixed $dil_costo the dil costo
     *
     * @return self
     */
    private function setDilCosto($dil_costo)
    {
        $this->dil_costo = $dil_costo;

        return $this;
    }

    /**
     * Gets the value of dil_estado.
     *
     * @return mixed
     */
    public function getDilEstado()
    {
        return $this->dil_estado;
    }

    /**
     * Sets the value of dil_estado.
     *
     * @param mixed $dil_estado the dil estado
     *
     * @return self
     */
    private function setDilEstado($dil_estado)
    {
        $this->dil_estado = $dil_estado;

        return $this;
    }

    /**
     * Gets the value of dil_dir_origen.
     *
     * @return mixed
     */
    public function getDilDirOrigen()
    {
        return $this->dil_dir_origen;
    }

    /**
     * Sets the value of dil_dir_origen.
     *
     * @param mixed $dil_dir_origen the dil dir origen
     *
     * @return self
     */
    private function setDilDirOrigen($dil_dir_origen)
    {
        $this->dil_dir_origen = $dil_dir_origen;

        return $this;
    }

    /**
     * Gets the value of dil_dir_fin.
     *
     * @return mixed
     */
    public function getDilDirFin()
    {
        return $this->dil_dir_fin;
    }

    /**
     * Sets the value of dil_dir_fin.
     *
     * @param mixed $dil_dir_fin the dil dir fin
     *
     * @return self
     */
    private function setDilDirFin($dil_dir_fin)
    {
        $this->dil_dir_fin = $dil_dir_fin;

        return $this;
    }

    /**
     * Gets the value of dil_user_cliente.
     *
     * @return mixed
     */
    public function getDilUserCliente()
    {
        return $this->dil_user_cliente;
    }

    /**
     * Sets the value of dil_user_cliente.
     *
     * @param mixed $dil_user_cliente the dil user cliente
     *
     * @return self
     */
    private function setDilUserCliente($dil_user_cliente)
    {
        $this->dil_user_cliente = $dil_user_cliente;

        return $this;
    }

    /**
     * Gets the value of dil_user_agente.
     *
     * @return mixed
     */
    public function getDilUserAgente()
    {
        return $this->dil_user_agente;
    }

    /**
     * Sets the value of dil_user_agente.
     *
     * @param mixed $dil_user_agente the dil user agente
     *
     * @return self
     */
    private function setDilUserAgente($dil_user_agente)
    {
        $this->dil_user_agente = $dil_user_agente;

        return $this;
    }

    /**
     * Gets the value of dil_fecha.
     *
     * @return mixed
     */
    public function getDilFecha()
    {
        return $this->dil_fecha;
    }

    /**
     * Sets the value of dil_fecha.
     *
     * @param mixed $dil_fecha the dil fecha
     *
     * @return self
     */
    private function setDilFecha($dil_fecha)
    {
        $this->dil_fecha = $dil_fecha;

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

    /**
     * Sets the value of tabla.
     *
     * @param mixed $tabla the tabla
     *
     * @return self
     */
    private function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }
}

?>