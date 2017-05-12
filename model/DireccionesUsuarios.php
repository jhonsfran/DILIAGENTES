<?php
class DireccionesUsuarios extends EntidadBase{
    private $dir_user_nickname;
    private $dir_direccion;
    private $dir_ubicacion;

    private $tabla = "direcciones_usuarios";
    
    public function __construct() {
        parent::__construct($this->tabla);
    }






    /**
     * Gets the value of dir_user_nickname.
     *
     * @return mixed
     */
    public function getDirUserNickname()
    {
        return $this->dir_user_nickname;
    }

    /**
     * Sets the value of dir_user_nickname.
     *
     * @param mixed $dir_user_nickname the dir user nickname
     *
     * @return self
     */
    private function _setDirUserNickname($dir_user_nickname)
    {
        $this->dir_user_nickname = $dir_user_nickname;

        return $this;
    }

    /**
     * Gets the value of dir_direccion.
     *
     * @return mixed
     */
    public function getDirDireccion()
    {
        return $this->dir_direccion;
    }

    /**
     * Sets the value of dir_direccion.
     *
     * @param mixed $dir_direccion the dir direccion
     *
     * @return self
     */
    private function _setDirDireccion($dir_direccion)
    {
        $this->dir_direccion = $dir_direccion;

        return $this;
    }

    /**
     * Gets the value of dir_ubicacion.
     *
     * @return mixed
     */
    public function getDirUbicacion()
    {
        return $this->dir_ubicacion;
    }

    /**
     * Sets the value of dir_ubicacion.
     *
     * @param mixed $dir_ubicacion the dir ubicacion
     *
     * @return self
     */
    private function _setDirUbicacion($dir_ubicacion)
    {
        $this->dir_ubicacion = $dir_ubicacion;

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