<?php

include("validar.php");

$usuario=$_POST['usuario'];
$password=$_POST['password'];

$proyecto = new conexion;
$proyecto->login($usuario,$password);
$proyecto->cerrar();

?>