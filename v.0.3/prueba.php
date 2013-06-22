<?php 
include_once("conexion.php");
$cnx = new Conexion();
$oper=$cnx->conectar();

echo "conexion : ". $oper;

?>