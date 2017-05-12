<?php
/**
* 
*/
class Users extends EntidadBase
{
	private $users_usuario;
	private $users_pass;
	private $tabla = "users";

	function __construct()
	{
		parent::__construct($this->tabla);
	}

	public function setUsuario($usuario)
	{
		$this->users_usuario = $usuario;
	}

	public function setPassword($pass)
	{
		$this->users_pass = $pass;
	}
	
	public function search(){
		$query = "SELECT *  FROM $this->tabla 
		WHERE usuario='$this->users_usuario' AND pass='$this->users_pass';";
		$search = pg_query($this->db(),$query);

		$rows = pg_num_rows($search);
		
		return $rows;
	}
}
?>