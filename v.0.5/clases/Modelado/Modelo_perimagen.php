<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perimagen{
//Constructor
public function Clase_perimagen(){}
//Atributos
private $cPerCodigo;
private $cPerRuta;
private $nPerTipo;
private $nPerEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setcPerRuta($cPerRuta_){ $this->cPerRuta=$cPerRuta_;}
public function getcPerRuta(){ return $this->cPerRuta;}
public function setnPerTipo($nPerTipo_){ $this->nPerTipo=$nPerTipo_;}
public function getnPerTipo(){ return $this->nPerTipo;}
public function setnPerEstado($nPerEstado_){ $this->nPerEstado=$nPerEstado_;}
public function getnPerEstado(){ return $this->nPerEstado;}
//Métodos
//Método Insertar
public function Insertar_perimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perimagen values('$this->cPerCodigo','$this->cPerRuta','$this->nPerTipo','$this->nPerEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perimagen(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perimagen.cPerCodigo As 'cPerCodigo',perimagen.cPerRuta As 'cPerRuta',perimagen.nPerTipo As 'nPerTipo',perimagen.nPerEstado As 'nPerEstado' from perimagen";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perimagen(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perimagen WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perimagen(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perimagen";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perimagen SET perimagenEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perimagen SET perimagenEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perimagen SET cPerRuta='$this->cPerRuta',nPerTipo='$this->nPerTipo',nPerEstado='$this->nPerEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>