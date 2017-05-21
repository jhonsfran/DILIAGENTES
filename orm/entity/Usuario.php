<?php namespace orm\entity;
use orm\entity\ORM as ORM;

/**
 * @id=user_nickname
 * **/

class Usuario extends ORM{
    
private $user_nickname;
private $user_apellidos;
private $user_nombre;
private $user_tipodoc;
private $user_documento;
private $user_telefono;
private $user_celular;
private $user_password;
private $user_email;
private $user_rol;
private $user_activo;
private $user_fecha;
private $user_foto;
private $user_position;

protected static $table = 'usuario';

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

    /**
 * Gets the value of user_nickname.
 *
 * @return mixed
 */
public function getUserNickname() {
    return $this->user_nickname;
}
function getPosition() {
    return $this->user_position;
}

function setPosition($position) {
    $this->user_position = $position;
}

/**
 * Sets the value of user_nickname.
 *
 * @param mixed $user_nickname the user nickname
 *
 * @return self
 */
public function setUserNickname($user_nickname) {
$this->user_nickname = $user_nickname;

return $this;
}

/**
 * Gets the value of user_apellidos.
 *
 * @return mixed
 */
public function getUserApellidos() {
return $this->user_apellidos;
}

/**
 * Sets the value of user_apellidos.
 *
 * @param mixed $user_apellidos the user apellidos
 *
 * @return self
 */
public function setUserApellidos($user_apellidos) {
$this->user_apellidos = $user_apellidos;

return $this;
}

/**
 * Gets the value of user_nombre.
 *
 * @return mixed
 */
public function getUserNombre() {
return $this->user_nombre;
}

/**
 * Sets the value of user_nombre.
 *
 * @param mixed $user_nombre the user nombre
 *
 * @return self
 */
public function setUserNombre($user_nombre) {
$this->user_nombre = $user_nombre;

return $this;
}

/**
 * Gets the value of user_tipodoc.
 *
 * @return mixed
 */
public function getUserTipodoc() {
return $this->user_tipodoc;
}

/**
 * Sets the value of user_tipodoc.
 *
 * @param mixed $user_tipodoc the user tipodoc
 *
 * @return self
 */
public function setUserTipodoc($user_tipodoc) {
$this->user_tipodoc = $user_tipodoc;

return $this;
}

/**
 * Gets the value of user_documento.
 *
 * @return mixed
 */
public function getUserDocumento() {
return $this->user_documento;
}

/**
 * Sets the value of user_documento.
 *
 * @param mixed $user_documento the user documento
 *
 * @return self
 */
public function setUserDocumento($user_documento) {
$this->user_documento = $user_documento;

return $this;
}

/**
 * Gets the value of user_telefono.
 *
 * @return mixed
 */
public function getUserTelefono() {
return $this->user_telefono;
}

/**
 * Sets the value of user_telefono.
 *
 * @param mixed $user_telefono the user telefono
 *
 * @return self
 */
public function setUserTelefono($user_telefono) {
$this->user_telefono = $user_telefono;

return $this;
}

/**
 * Gets the value of user_celular.
 *
 * @return mixed
 */
public function getUserCelular() {
return $this->user_celular;
}

/**
 * Sets the value of user_celular.
 *
 * @param mixed $user_celular the user celular
 *
 * @return self
 */
public function setUserCelular($user_celular) {
$this->user_celular = $user_celular;

return $this;
}

/**
 * Gets the value of user_password.
 *
 * @return mixed
 */
public function getUserPassword() {
return $this->user_password;
}

/**
 * Sets the value of user_password.
 *
 * @param mixed $user_password the user password
 *
 * @return self
 */
public function setUserPassword($user_password) {
$this->user_password = $user_password;

return $this;
}

/**
 * Gets the value of user_email.
 *
 * @return mixed
 */
public function getUserEmail() {
return $this->user_email;
}

/**
 * Sets the value of user_email.
 *
 * @param mixed $user_email the user email
 *
 * @return self
 */
public function setUserEmail($user_email) {
$this->user_email = $user_email;

return $this;
}

/**
 * Gets the value of user_rol.
 *
 * @return mixed
 */
public function getUserRol() {
return $this->user_rol;
}

/**
 * Sets the value of user_rol.
 *
 * @param mixed $user_rol the user rol
 *
 * @return self
 */
public function setUserRol($user_rol) {
$this->user_rol = $user_rol;

return $this;
}

/**
 * Gets the value of user_activo.
 *
 * @return mixed
 */
public function getUserActivo() {
return $this->user_activo;
}

/**
 * Sets the value of user_activo.
 *
 * @param mixed $user_activo the user activo
 *
 * @return self
 */
public function setUserActivo($user_activo) {
$this->user_activo = $user_activo;

return $this;
}

/**
 * Gets the value of user_fecha.
 *
 * @return mixed
 */
public function getUserFecha() {
return $this->user_fecha;
}

/**
 * Sets the value of user_fecha.
 *
 * @param mixed $user_fecha the user fecha
 *
 * @return self
 */
public function setUserFecha($user_fecha) {
$this->user_fecha = $user_fecha;

return $this;
}

/**
 * Gets the value of user_foto.
 *
 * @return mixed
 */
public function getUserFoto() {
return $this->user_foto;
}

/**
 * Sets the value of user_foto.
 *
 * @param mixed $user_foto the user foto
 *
 * @return self
 */
public function setUserFoto($user_foto) {
$this->user_foto = $user_foto;

return $this;
}

/**
 * Gets the value of tabla.
 *
 * @return mixed
 */
public function getTabla() {
return $this->tabla;
}

}


?>