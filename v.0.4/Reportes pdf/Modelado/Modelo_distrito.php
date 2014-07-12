<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_distrito{
//Constructor
public function Clase_distrito(){}
//Atributos
private $DistritoId;
private $DistritoNombre;
private $ProvinciaId;
private $UbigeoDist;
//Propiedades
public function setDistritoId($DistritoId_){ $this->DistritoId=$DistritoId_;}
public function getDistritoId(){ return $this->DistritoId;}
public function setDistritoNombre($DistritoNombre_){ $this->DistritoNombre=$DistritoNombre_;}
public function getDistritoNombre(){ return $this->DistritoNombre;}
public function setProvinciaId($ProvinciaId_){ $this->ProvinciaId=$ProvinciaId_;}
public function getProvinciaId(){ return $this->ProvinciaId;}
public function setUbigeoDist($UbigeoDist_){ $this->UbigeoDist=$UbigeoDist_;}
public function getUbigeoDist(){ return $this->UbigeoDist;}
//Métodos
//Método Insertar
public function Insertar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into distrito values('$this->DistritoId','$this->DistritoNombre','$this->ProvinciaId','$this->UbigeoDist')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select distrito.DistritoId As 'DistritoId',distrito.DistritoNombre As 'DistritoNombre',distrito.ProvinciaId As 'ProvinciaId',distrito.UbigeoDist As 'UbigeoDist' from distrito";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM distrito WHERE DistritoId='$this->DistritoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM distrito";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE distrito SET distritoEstado='E' WHERE DistritoId='$this->DistritoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE distrito SET distritoEstado='A' WHERE DistritoId='$this->DistritoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE distrito SET DistritoNombre='$this->DistritoNombre',ProvinciaId='$this->ProvinciaId',UbigeoDist='$this->UbigeoDist' WHERE DistritoId='$this->DistritoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>