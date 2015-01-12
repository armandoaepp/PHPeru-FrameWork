<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perjuridica{
//Constructor
public function Clase_perjuridica(){}
//Atributos
private $cPerCodigo;
private $nPerJurRubro;
private $cPerJurDescripcion;
private $nPerEmpresa;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerJurRubro($nPerJurRubro_){ $this->nPerJurRubro=$nPerJurRubro_;}
public function getnPerJurRubro(){ return $this->nPerJurRubro;}
public function setcPerJurDescripcion($cPerJurDescripcion_){ $this->cPerJurDescripcion=$cPerJurDescripcion_;}
public function getcPerJurDescripcion(){ return $this->cPerJurDescripcion;}
public function setnPerEmpresa($nPerEmpresa_){ $this->nPerEmpresa=$nPerEmpresa_;}
public function getnPerEmpresa(){ return $this->nPerEmpresa;}
//Métodos
//Método Insertar
public function Insertar_perjuridica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perjuridica values('$this->cPerCodigo','$this->nPerJurRubro','$this->cPerJurDescripcion','$this->nPerEmpresa')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perjuridica(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perjuridica.cPerCodigo As 'cPerCodigo',perjuridica.nPerJurRubro As 'nPerJurRubro',perjuridica.cPerJurDescripcion As 'cPerJurDescripcion',perjuridica.nPerEmpresa As 'nPerEmpresa' from perjuridica";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perjuridica(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perjuridica WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perjuridica(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perjuridica";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perjuridica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perjuridica SET perjuridicaEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perjuridica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perjuridica SET perjuridicaEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perjuridica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perjuridica SET nPerJurRubro='$this->nPerJurRubro',cPerJurDescripcion='$this->cPerJurDescripcion',nPerEmpresa='$this->nPerEmpresa' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>