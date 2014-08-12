<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_provincia{
//Constructor
public function Clase_provincia(){}
//Atributos
private $nProCodigo;
private $cProDescripcion;
private $nDepCodigo;
private $cProUbiCodigo;
private $nProEstado;
//Propiedades
public function setnProCodigo($nProCodigo_){ $this->nProCodigo=$nProCodigo_;}
public function getnProCodigo(){ return $this->nProCodigo;}
public function setcProDescripcion($cProDescripcion_){ $this->cProDescripcion=$cProDescripcion_;}
public function getcProDescripcion(){ return $this->cProDescripcion;}
public function setnDepCodigo($nDepCodigo_){ $this->nDepCodigo=$nDepCodigo_;}
public function getnDepCodigo(){ return $this->nDepCodigo;}
public function setcProUbiCodigo($cProUbiCodigo_){ $this->cProUbiCodigo=$cProUbiCodigo_;}
public function getcProUbiCodigo(){ return $this->cProUbiCodigo;}
public function setnProEstado($nProEstado_){ $this->nProEstado=$nProEstado_;}
public function getnProEstado(){ return $this->nProEstado;}
//Métodos
//Método Insertar
public function Insertar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into provincia values('$this->nProCodigo','$this->cProDescripcion','$this->nDepCodigo','$this->cProUbiCodigo','$this->nProEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_provincia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select provincia.nProCodigo As 'nProCodigo',provincia.cProDescripcion As 'cProDescripcion',provincia.nDepCodigo As 'nDepCodigo',provincia.cProUbiCodigo As 'cProUbiCodigo',provincia.nProEstado As 'nProEstado' from provincia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_provincia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM provincia WHERE nProCodigo='$this->nProCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_provincia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM provincia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE provincia SET provinciaEstado='E' WHERE nProCodigo='$this->nProCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE provincia SET provinciaEstado='A' WHERE nProCodigo='$this->nProCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE provincia SET cProDescripcion='$this->cProDescripcion',nDepCodigo='$this->nDepCodigo',cProUbiCodigo='$this->cProUbiCodigo',nProEstado='$this->nProEstado' WHERE nProCodigo='$this->nProCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>