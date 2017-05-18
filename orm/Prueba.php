<?php

require_once 'Usuario.php';

$usuario = new Usuario();
$usuario->all();

echo $usuario;