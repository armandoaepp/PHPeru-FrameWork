<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_trazabilidad{
//Constructor
public function Clase_trazabilidad(){}
//Atributos
private $TrazabilidadId;
private $TrazabilidadParcela;
private $ParcelaId;
private $AcopioId;
//Propiedades
public function setTrazabilidadId($TrazabilidadId_){ $this->TrazabilidadId=$TrazabilidadId_;}
public function getTrazabilidadId(){ return $this->TrazabilidadId;}
public function setTrazabilidadParcela($TrazabilidadParcela_){ $this->TrazabilidadParcela=$TrazabilidadParcela_;}
public function getTrazabilidadParcela(){ return $this->TrazabilidadParcela;}
public function setParcelaId($ParcelaId_){ $this->ParcelaId=$ParcelaId_;}
public function getParcelaId(){ return $this->ParcelaId;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into trazabilidad values('$this->TrazabilidadId','$this->TrazabilidadParcela','$this->ParcelaId','$this->AcopioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_trazabilidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select trazabilidad.TrazabilidadId As 'TrazabilidadId',trazabilidad.TrazabilidadParcela As 'Parcela',trazabilidad.ParcelaId As 'ParcelaId',trazabilidad.AcopioId As 'AcopioId' from trazabilidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_trazabilidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from trazabilidad where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_trazabilidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from trazabilidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set Estado='E' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set estado='A' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_trazabilidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trazabilidad set TrazabilidadParcela='$this->TrazabilidadParcela',ParcelaId='$this->ParcelaId',AcopioId='$this->AcopioId' where TrazabilidadId='$this->TrazabilidadId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>