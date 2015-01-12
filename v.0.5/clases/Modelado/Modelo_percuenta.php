<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_percuenta{
//Constructor
public function Clase_percuenta(){}
//Atributos
private $nPerCtaCodigo;
private $cPerCodigo;
private $cNroCuenta;
private $nPerCtaTipo;
private $cPerJurCodigo;
private $nMonCodigo;
private $nPerCtaEstado;
//Propiedades
public function setnPerCtaCodigo($nPerCtaCodigo_){ $this->nPerCtaCodigo=$nPerCtaCodigo_;}
public function getnPerCtaCodigo(){ return $this->nPerCtaCodigo;}
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setcNroCuenta($cNroCuenta_){ $this->cNroCuenta=$cNroCuenta_;}
public function getcNroCuenta(){ return $this->cNroCuenta;}
public function setnPerCtaTipo($nPerCtaTipo_){ $this->nPerCtaTipo=$nPerCtaTipo_;}
public function getnPerCtaTipo(){ return $this->nPerCtaTipo;}
public function setcPerJurCodigo($cPerJurCodigo_){ $this->cPerJurCodigo=$cPerJurCodigo_;}
public function getcPerJurCodigo(){ return $this->cPerJurCodigo;}
public function setnMonCodigo($nMonCodigo_){ $this->nMonCodigo=$nMonCodigo_;}
public function getnMonCodigo(){ return $this->nMonCodigo;}
public function setnPerCtaEstado($nPerCtaEstado_){ $this->nPerCtaEstado=$nPerCtaEstado_;}
public function getnPerCtaEstado(){ return $this->nPerCtaEstado;}
//Métodos
//Método Insertar
public function Insertar_percuenta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into percuenta values('$this->nPerCtaCodigo','$this->cPerCodigo','$this->cNroCuenta','$this->nPerCtaTipo','$this->cPerJurCodigo','$this->nMonCodigo','$this->nPerCtaEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_percuenta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select percuenta.nPerCtaCodigo As 'nPerCtaCodigo',percuenta.cPerCodigo As 'cPerCodigo',percuenta.cNroCuenta As 'cNroCuenta',percuenta.nPerCtaTipo As 'nPerCtaTipo',percuenta.cPerJurCodigo As 'cPerJurCodigo',percuenta.nMonCodigo As 'nMonCodigo',percuenta.nPerCtaEstado As 'nPerCtaEstado' from percuenta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_percuenta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM percuenta WHERE nPerCtaCodigo='$this->nPerCtaCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_percuenta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM percuenta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_percuenta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE percuenta SET percuentaEstado='E' WHERE nPerCtaCodigo='$this->nPerCtaCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_percuenta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE percuenta SET percuentaEstado='A' WHERE nPerCtaCodigo='$this->nPerCtaCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_percuenta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE percuenta SET cPerCodigo='$this->cPerCodigo',cNroCuenta='$this->cNroCuenta',nPerCtaTipo='$this->nPerCtaTipo',cPerJurCodigo='$this->cPerJurCodigo',nMonCodigo='$this->nMonCodigo',nPerCtaEstado='$this->nPerCtaEstado' WHERE nPerCtaCodigo='$this->nPerCtaCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>