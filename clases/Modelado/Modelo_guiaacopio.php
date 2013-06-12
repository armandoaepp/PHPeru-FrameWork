<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_guiaacopio{
//Constructor
public function Clase_guiaacopio(){}
//Atributos
private $GuiaAcopioId;
private $GuiaAcopioNumero;
private $GuiaAcopioEstado;
private $UsuarioId;
private $GuiaSerieId;
//Propiedades
public function setGuiaAcopioId($GuiaAcopioId_){ $this->GuiaAcopioId=$GuiaAcopioId_;}
public function getGuiaAcopioId(){ return $this->GuiaAcopioId;}
public function setGuiaAcopioNumero($GuiaAcopioNumero_){ $this->GuiaAcopioNumero=$GuiaAcopioNumero_;}
public function getGuiaAcopioNumero(){ return $this->GuiaAcopioNumero;}
public function setGuiaAcopioEstado($GuiaAcopioEstado_){ $this->GuiaAcopioEstado=$GuiaAcopioEstado_;}
public function getGuiaAcopioEstado(){ return $this->GuiaAcopioEstado;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setGuiaSerieId($GuiaSerieId_){ $this->GuiaSerieId=$GuiaSerieId_;}
public function getGuiaSerieId(){ return $this->GuiaSerieId;}
//Métodos
//Método Insertar
public function Insertar_guiaacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into guiaacopio values('$this->GuiaAcopioId','$this->GuiaAcopioNumero','$this->GuiaAcopioEstado','$this->UsuarioId','$this->GuiaSerieId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_guiaacopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select guiaacopio.GuiaAcopioId As 'GuiaAcopioId',guiaacopio.GuiaAcopioNumero As 'Guia Numero',guiaacopio.GuiaAcopioEstado As 'Guia Estado',guiaacopio.UsuarioId As 'UsuarioId',guiaacopio.GuiaSerieId As 'GuiaSerieId' from guiaacopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_guiaacopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from guiaacopio where GuiaAcopioId='$this->GuiaAcopioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_guiaacopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from guiaacopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_guiaacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update guiaacopio set Estado='E' where GuiaAcopioId='$this->GuiaAcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_guiaacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update guiaacopio set estado='A' where GuiaAcopioId='$this->GuiaAcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_guiaacopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update guiaacopio set GuiaAcopioNumero='$this->GuiaAcopioNumero',GuiaAcopioEstado='$this->GuiaAcopioEstado',UsuarioId='$this->UsuarioId',GuiaSerieId='$this->GuiaSerieId' where GuiaAcopioId='$this->GuiaAcopioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>