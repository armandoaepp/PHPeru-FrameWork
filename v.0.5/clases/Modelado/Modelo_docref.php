<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docref{
//Constructor
public function Clase_docref(){}
//Atributos
private $cDocCodigo;
private $cDocRefCodigo;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setcDocRefCodigo($cDocRefCodigo_){ $this->cDocRefCodigo=$cDocRefCodigo_;}
public function getcDocRefCodigo(){ return $this->cDocRefCodigo;}
//Métodos
//Método Insertar
public function Insertar_docref(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docref values('$this->cDocCodigo','$this->cDocRefCodigo')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docref(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docref.cDocCodigo As 'cDocCodigo',docref.cDocRefCodigo As 'cDocRefCodigo' from docref";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docref(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docref WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docref(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docref";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docref(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docref SET docrefEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docref(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docref SET docrefEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docref(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docref SET cDocRefCodigo='$this->cDocRefCodigo' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>