<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_parametro{
//Constructor
public function Clase_parametro(){}
//Atributos
private $nParCodigo;
private $nParClase;
private $cParJerarquia;
private $cParNombre;
private $cParDescripcion;
private $nParEstado;
//Propiedades
public function setnParCodigo($nParCodigo_){ $this->nParCodigo=$nParCodigo_;}
public function getnParCodigo(){ return $this->nParCodigo;}
public function setnParClase($nParClase_){ $this->nParClase=$nParClase_;}
public function getnParClase(){ return $this->nParClase;}
public function setcParJerarquia($cParJerarquia_){ $this->cParJerarquia=$cParJerarquia_;}
public function getcParJerarquia(){ return $this->cParJerarquia;}
public function setcParNombre($cParNombre_){ $this->cParNombre=$cParNombre_;}
public function getcParNombre(){ return $this->cParNombre;}
public function setcParDescripcion($cParDescripcion_){ $this->cParDescripcion=$cParDescripcion_;}
public function getcParDescripcion(){ return $this->cParDescripcion;}
public function setnParEstado($nParEstado_){ $this->nParEstado=$nParEstado_;}
public function getnParEstado(){ return $this->nParEstado;}
//Métodos
//Método Insertar
public function Insertar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into parametro values('$this->nParCodigo','$this->nParClase','$this->cParJerarquia','$this->cParNombre','$this->cParDescripcion','$this->nParEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parametro.nParCodigo As 'nParCodigo',parametro.nParClase As 'nParClase',parametro.cParJerarquia As 'cParJerarquia',parametro.cParNombre As 'cParNombre',parametro.cParDescripcion As 'cParDescripcion',parametro.nParEstado As 'nParEstado' from parametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parametro WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_parametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parametro SET parametroEstado='E' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parametro SET parametroEstado='A' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parametro SET nParClase='$this->nParClase',cParJerarquia='$this->cParJerarquia',cParNombre='$this->cParNombre',cParDescripcion='$this->cParDescripcion',nParEstado='$this->nParEstado' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>