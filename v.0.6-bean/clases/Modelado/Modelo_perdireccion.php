<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perdireccion{
//Constructor
public function Clase_perdireccion(){}
//Atributos
private $cPerCodigo;
private $nUbiCodigo;
private $nPerDirTipo;
private $cPerDirDescripcion;
private $cPerDirGlosa;
private $nPerDirEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnUbiCodigo($nUbiCodigo_){ $this->nUbiCodigo=$nUbiCodigo_;}
public function getnUbiCodigo(){ return $this->nUbiCodigo;}
public function setnPerDirTipo($nPerDirTipo_){ $this->nPerDirTipo=$nPerDirTipo_;}
public function getnPerDirTipo(){ return $this->nPerDirTipo;}
public function setcPerDirDescripcion($cPerDirDescripcion_){ $this->cPerDirDescripcion=$cPerDirDescripcion_;}
public function getcPerDirDescripcion(){ return $this->cPerDirDescripcion;}
public function setcPerDirGlosa($cPerDirGlosa_){ $this->cPerDirGlosa=$cPerDirGlosa_;}
public function getcPerDirGlosa(){ return $this->cPerDirGlosa;}
public function setnPerDirEstado($nPerDirEstado_){ $this->nPerDirEstado=$nPerDirEstado_;}
public function getnPerDirEstado(){ return $this->nPerDirEstado;}
//Métodos
//Método Insertar
public function Insertar_perdireccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perdireccion values('$this->cPerCodigo','$this->nUbiCodigo','$this->nPerDirTipo','$this->cPerDirDescripcion','$this->cPerDirGlosa','$this->nPerDirEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perdireccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perdireccion.cPerCodigo As 'cPerCodigo',perdireccion.nUbiCodigo As 'nUbiCodigo',perdireccion.nPerDirTipo As 'nPerDirTipo',perdireccion.cPerDirDescripcion As 'cPerDirDescripcion',perdireccion.cPerDirGlosa As 'cPerDirGlosa',perdireccion.nPerDirEstado As 'nPerDirEstado' from perdireccion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perdireccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perdireccion WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perdireccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perdireccion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perdireccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perdireccion SET perdireccionEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perdireccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perdireccion SET perdireccionEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perdireccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perdireccion SET nUbiCodigo='$this->nUbiCodigo',nPerDirTipo='$this->nPerDirTipo',cPerDirDescripcion='$this->cPerDirDescripcion',cPerDirGlosa='$this->cPerDirGlosa',nPerDirEstado='$this->nPerDirEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>