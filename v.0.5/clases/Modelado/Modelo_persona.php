<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_persona{
//Constructor
public function Clase_persona(){}
//Atributos
private $cPerCodigo;
private $cPerNombre;
private $cPerApellidos;
private $dPerNacimiento;
private $nPerTipo;
private $nPerEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setcPerNombre($cPerNombre_){ $this->cPerNombre=$cPerNombre_;}
public function getcPerNombre(){ return $this->cPerNombre;}
public function setcPerApellidos($cPerApellidos_){ $this->cPerApellidos=$cPerApellidos_;}
public function getcPerApellidos(){ return $this->cPerApellidos;}
public function setdPerNacimiento($dPerNacimiento_){ $this->dPerNacimiento=$dPerNacimiento_;}
public function getdPerNacimiento(){ return $this->dPerNacimiento;}
public function setnPerTipo($nPerTipo_){ $this->nPerTipo=$nPerTipo_;}
public function getnPerTipo(){ return $this->nPerTipo;}
public function setnPerEstado($nPerEstado_){ $this->nPerEstado=$nPerEstado_;}
public function getnPerEstado(){ return $this->nPerEstado;}
//Métodos
//Método Insertar
public function Insertar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into persona values('$this->cPerCodigo','$this->cPerNombre','$this->cPerApellidos','$this->dPerNacimiento','$this->nPerTipo','$this->nPerEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_persona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select persona.cPerCodigo As 'cPerCodigo',persona.cPerNombre As 'cPerNombre',persona.cPerApellidos As 'cPerApellidos',persona.dPerNacimiento As 'dPerNacimiento',persona.nPerTipo As 'nPerTipo',persona.nPerEstado As 'nPerEstado' from persona";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_persona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM persona WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_persona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM persona";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE persona SET personaEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE persona SET personaEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE persona SET cPerNombre='$this->cPerNombre',cPerApellidos='$this->cPerApellidos',dPerNacimiento='$this->dPerNacimiento',nPerTipo='$this->nPerTipo',nPerEstado='$this->nPerEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>