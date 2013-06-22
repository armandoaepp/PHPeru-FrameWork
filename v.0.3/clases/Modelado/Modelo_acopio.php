<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_acopio{
//Constructor
public function Clase_acopio(){}
//Atributos
private $AcopioId;
private $AcopioFecha;
private $AcopioNSacos;
private $AcopioPesoBruto;
private $AcopioHumedadEntregada;
private $AcopioHumedadRequerida;
private $AcopioPrecioQuintal;
private $AcopioTara;
private $BaseId;
private $TipoCertificacionId;
private $AcopioQuintalesNetos;
private $AcopioStatus;
private $AcopioEstado;
private $UnidadProductivaId;
private $GuiaAcopioId;
private $EstadoAcopioId;
private $PeriodoId;
//Propiedades
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
public function setAcopioFecha($AcopioFecha_){ $this->AcopioFecha=$AcopioFecha_;}
public function getAcopioFecha(){ return $this->AcopioFecha;}
public function setAcopioNSacos($AcopioNSacos_){ $this->AcopioNSacos=$AcopioNSacos_;}
public function getAcopioNSacos(){ return $this->AcopioNSacos;}
public function setAcopioPesoBruto($AcopioPesoBruto_){ $this->AcopioPesoBruto=$AcopioPesoBruto_;}
public function getAcopioPesoBruto(){ return $this->AcopioPesoBruto;}
public function setAcopioHumedadEntregada($AcopioHumedadEntregada_){ $this->AcopioHumedadEntregada=$AcopioHumedadEntregada_;}
public function getAcopioHumedadEntregada(){ return $this->AcopioHumedadEntregada;}
public function setAcopioHumedadRequerida($AcopioHumedadRequerida_){ $this->AcopioHumedadRequerida=$AcopioHumedadRequerida_;}
public function getAcopioHumedadRequerida(){ return $this->AcopioHumedadRequerida;}
public function setAcopioPrecioQuintal($AcopioPrecioQuintal_){ $this->AcopioPrecioQuintal=$AcopioPrecioQuintal_;}
public function getAcopioPrecioQuintal(){ return $this->AcopioPrecioQuintal;}
public function setAcopioTara($AcopioTara_){ $this->AcopioTara=$AcopioTara_;}
public function getAcopioTara(){ return $this->AcopioTara;}
public function setBaseId($BaseId_){ $this->BaseId=$BaseId_;}
public function getBaseId(){ return $this->BaseId;}
public function setTipoCertificacionId($TipoCertificacionId_){ $this->TipoCertificacionId=$TipoCertificacionId_;}
public function getTipoCertificacionId(){ return $this->TipoCertificacionId;}
public function setAcopioQuintalesNetos($AcopioQuintalesNetos_){ $this->AcopioQuintalesNetos=$AcopioQuintalesNetos_;}
public function getAcopioQuintalesNetos(){ return $this->AcopioQuintalesNetos;}
public function setAcopioStatus($AcopioStatus_){ $this->AcopioStatus=$AcopioStatus_;}
public function getAcopioStatus(){ return $this->AcopioStatus;}
public function setAcopioEstado($AcopioEstado_){ $this->AcopioEstado=$AcopioEstado_;}
public function getAcopioEstado(){ return $this->AcopioEstado;}
public function setUnidadProductivaId($UnidadProductivaId_){ $this->UnidadProductivaId=$UnidadProductivaId_;}
public function getUnidadProductivaId(){ return $this->UnidadProductivaId;}
public function setGuiaAcopioId($GuiaAcopioId_){ $this->GuiaAcopioId=$GuiaAcopioId_;}
public function getGuiaAcopioId(){ return $this->GuiaAcopioId;}
public function setEstadoAcopioId($EstadoAcopioId_){ $this->EstadoAcopioId=$EstadoAcopioId_;}
public function getEstadoAcopioId(){ return $this->EstadoAcopioId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}
//Métodos
//Método Insertar
public function Insertar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into acopio values('$this->AcopioId','$this->AcopioFecha','$this->AcopioNSacos','$this->AcopioPesoBruto','$this->AcopioHumedadEntregada','$this->AcopioHumedadRequerida','$this->AcopioPrecioQuintal','$this->AcopioTara','$this->BaseId','$this->TipoCertificacionId','$this->AcopioQuintalesNetos','$this->AcopioStatus','$this->AcopioEstado','$this->UnidadProductivaId','$this->GuiaAcopioId','$this->EstadoAcopioId','$this->PeriodoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_acopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select acopio.AcopioId As 'AcopioId',acopio.AcopioFecha As 'AcopioFecha',acopio.AcopioNSacos As 'AcopioNSacos',acopio.AcopioPesoBruto As 'AcopioPesoBruto',acopio.AcopioHumedadEntregada As 'AcopioHumedadEntregada',acopio.AcopioHumedadRequerida As 'AcopioHumedadRequerida',acopio.AcopioPrecioQuintal As 'AcopioPrecioQuintal',acopio.AcopioTara As 'AcopioTara',acopio.BaseId As 'BaseId',acopio.TipoCertificacionId As 'TipoCertificacionId',acopio.AcopioQuintalesNetos As 'AcopioQuintalesNetos',acopio.AcopioStatus As 'AcopioStatus',acopio.AcopioEstado As 'AcopioEstado',acopio.UnidadProductivaId As 'UnidadProductivaId',acopio.GuiaAcopioId As 'GuiaAcopioId',acopio.EstadoAcopioId As 'EstadoAcopioId',acopio.PeriodoId As 'PeriodoId' from acopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_acopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM acopio WHERE AcopioId='$this->AcopioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_acopio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM acopio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE acopio SET acopioEstado='E' WHERE AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE acopio SET acopioEstado='A' WHERE AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_acopio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE acopio SET AcopioFecha='$this->AcopioFecha',AcopioNSacos='$this->AcopioNSacos',AcopioPesoBruto='$this->AcopioPesoBruto',AcopioHumedadEntregada='$this->AcopioHumedadEntregada',AcopioHumedadRequerida='$this->AcopioHumedadRequerida',AcopioPrecioQuintal='$this->AcopioPrecioQuintal',AcopioTara='$this->AcopioTara',BaseId='$this->BaseId',TipoCertificacionId='$this->TipoCertificacionId',AcopioQuintalesNetos='$this->AcopioQuintalesNetos',AcopioStatus='$this->AcopioStatus',AcopioEstado='$this->AcopioEstado',UnidadProductivaId='$this->UnidadProductivaId',GuiaAcopioId='$this->GuiaAcopioId',EstadoAcopioId='$this->EstadoAcopioId',PeriodoId='$this->PeriodoId' WHERE AcopioId='$this->AcopioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>