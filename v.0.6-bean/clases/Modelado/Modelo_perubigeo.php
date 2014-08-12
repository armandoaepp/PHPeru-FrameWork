<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perubigeo{
//Constructor
public function Clase_perubigeo(){}
//Atributos
private $cPerCodigo;
private $nPerUbiCodigo;
private $nPerUbiGlosa;
private $nPerUbiEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerUbiCodigo($nPerUbiCodigo_){ $this->nPerUbiCodigo=$nPerUbiCodigo_;}
public function getnPerUbiCodigo(){ return $this->nPerUbiCodigo;}
public function setnPerUbiGlosa($nPerUbiGlosa_){ $this->nPerUbiGlosa=$nPerUbiGlosa_;}
public function getnPerUbiGlosa(){ return $this->nPerUbiGlosa;}
public function setnPerUbiEstado($nPerUbiEstado_){ $this->nPerUbiEstado=$nPerUbiEstado_;}
public function getnPerUbiEstado(){ return $this->nPerUbiEstado;}
//Métodos
//Método Insertar
public function Insertar_perubigeo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perubigeo values('$this->cPerCodigo','$this->nPerUbiCodigo','$this->nPerUbiGlosa','$this->nPerUbiEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perubigeo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perubigeo.cPerCodigo As 'cPerCodigo',perubigeo.nPerUbiCodigo As 'nPerUbiCodigo',perubigeo.nPerUbiGlosa As 'nPerUbiGlosa',perubigeo.nPerUbiEstado As 'nPerUbiEstado' from perubigeo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perubigeo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perubigeo WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perubigeo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perubigeo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perubigeo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perubigeo SET perubigeoEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perubigeo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perubigeo SET perubigeoEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perubigeo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perubigeo SET nPerUbiCodigo='$this->nPerUbiCodigo',nPerUbiGlosa='$this->nPerUbiGlosa',nPerUbiEstado='$this->nPerUbiEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>