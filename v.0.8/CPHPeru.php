<?php
 include_once 'conexion.php';
class PHPPeru{
	
	function ListarTablas(){
		$rpta;
		try{
			$con   = new Conexion();
			$query = "show tables;";
			$rpta  = $con->Listar($query);
			}catch( exception $e){
				}
		return $rpta;
	}
	function ListarCampos($tabla){
		$rpta;
		try{
			$con   = new Conexion();
			$query ="describe ".$tabla;
			$rpta  =$con->Listar($query);
			}catch( exception $e){
				}
		return $rpta;
	}	
}
?>