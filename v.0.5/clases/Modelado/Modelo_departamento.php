<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_departamento{
//Constructor
public function Clase_departamento(){}
//Atributos
private $nDepCodigo;
private $cDepDescripcion;
private $nPaiCodigo;
private $nDepEstado;
//Propiedades
public function setnDepCodigo($nDepCodigo_){ $this->nDepCodigo=$nDepCodigo_;}
public function getnDepCodigo(){ return $this->nDepCodigo;}
public function setcDepDescripcion($cDepDescripcion_){ $this->cDepDescripcion=$cDepDescripcion_;}
public function getcDepDescripcion(){ return $this->cDepDescripcion;}
public function setnPaiCodigo($nPaiCodigo_){ $this->nPaiCodigo=$nPaiCodigo_;}
public function getnPaiCodigo(){ return $this->nPaiCodigo;}
public function setnDepEstado($nDepEstado_){ $this->nDepEstado=$nDepEstado_;}
public function getnDepEstado(){ return $this->nDepEstado;}
//Métodos
//Método Insertar
public function Insertar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into departamento values('$this->nDepCodigo','$this->cDepDescripcion','$this->nPaiCodigo','$this->nDepEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select departamento.nDepCodigo As 'nDepCodigo',departamento.cDepDescripcion As 'cDepDescripcion',departamento.nPaiCodigo As 'nPaiCodigo',departamento.nDepEstado As 'nDepEstado' from departamento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM departamento WHERE nDepCodigo='$this->nDepCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM departamento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE departamento SET departamentoEstado='E' WHERE nDepCodigo='$this->nDepCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE departamento SET departamentoEstado='A' WHERE nDepCodigo='$this->nDepCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE departamento SET cDepDescripcion='$this->cDepDescripcion',nPaiCodigo='$this->nPaiCodigo',nDepEstado='$this->nDepEstado' WHERE nDepCodigo='$this->nDepCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>