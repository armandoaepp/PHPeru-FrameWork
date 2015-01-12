<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_base{
//Constructor
public function Clase_base(){}
//Atributos
private $BaseId;
private $BaseNombre;
//Propiedades
public function setBaseId($BaseId_){ $this->BaseId=$BaseId_;}
public function getBaseId(){ return $this->BaseId;}
public function setBaseNombre($BaseNombre_){ $this->BaseNombre=$BaseNombre_;}
public function getBaseNombre(){ return $this->BaseNombre;}
//Métodos
//Método Insertar
public function Insertar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into base values('$this->BaseId','$this->BaseNombre')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_base(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select base.BaseId As 'BaseId',base.BaseNombre As 'BaseNombre' from base";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_base(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM base WHERE BaseId='$this->BaseId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_base(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM base";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE base SET baseEstado='E' WHERE BaseId='$this->BaseId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE base SET baseEstado='A' WHERE BaseId='$this->BaseId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_base(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE base SET BaseNombre='$this->BaseNombre' WHERE BaseId='$this->BaseId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>