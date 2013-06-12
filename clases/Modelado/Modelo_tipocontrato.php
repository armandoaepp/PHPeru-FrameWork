<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_tipocontrato{
//Constructor
public function Clase_tipocontrato(){}
//Atributos
private $TipoContratoId;
private $TipoContrato;
private $TipoContratoEstado;
//Propiedades
public function setTipoContratoId($TipoContratoId_){ $this->TipoContratoId=$TipoContratoId_;}
public function getTipoContratoId(){ return $this->TipoContratoId;}
public function setTipoContrato($TipoContrato_){ $this->TipoContrato=$TipoContrato_;}
public function getTipoContrato(){ return $this->TipoContrato;}
public function setTipoContratoEstado($TipoContratoEstado_){ $this->TipoContratoEstado=$TipoContratoEstado_;}
public function getTipoContratoEstado(){ return $this->TipoContratoEstado;}
//Métodos
//Método Insertar
public function Insertar_tipocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tipocontrato values('$this->TipoContratoId','$this->TipoContrato','$this->TipoContratoEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tipocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tipocontrato.TipoContratoId As 'TipoContratoId',tipocontrato.TipoContrato As 'TipoContrato',tipocontrato.TipoContratoEstado As 'Estado' from tipocontrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tipocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipocontrato where TipoContratoId='$this->TipoContratoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tipocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from tipocontrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tipocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipocontrato set Estado='E' where TipoContratoId='$this->TipoContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tipocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipocontrato set estado='A' where TipoContratoId='$this->TipoContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tipocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update tipocontrato set TipoContrato='$this->TipoContrato',TipoContratoEstado='$this->TipoContratoEstado' where TipoContratoId='$this->TipoContratoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>