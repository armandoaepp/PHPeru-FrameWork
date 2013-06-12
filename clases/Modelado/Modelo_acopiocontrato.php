<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_acopiocontrato{
//Constructor
public function Clase_acopiocontrato(){}
//Atributos
private $AcopioContratoId;
private $AcopioAsignado;
private $AcopioPorAsignar;
private $ContratoRequerido;
private $ContratoAsignado;
private $AcopioId;
private $ContratoId;
//Propiedades
public function setAcopioContratoId($AcopioContratoId_){ $this->AcopioContratoId=$AcopioContratoId_;}
public function getAcopioContratoId(){ return $this->AcopioContratoId;}
public function setAcopioAsignado($AcopioAsignado_){ $this->AcopioAsignado=$AcopioAsignado_;}
public function getAcopioAsignado(){ return $this->AcopioAsignado;}
public function setAcopioPorAsignar($AcopioPorAsignar_){ $this->AcopioPorAsignar=$AcopioPorAsignar_;}
public function getAcopioPorAsignar(){ return $this->AcopioPorAsignar;}
public function setContratoRequerido($ContratoRequerido_){ $this->ContratoRequerido=$ContratoRequerido_;}
public function getContratoRequerido(){ return $this->ContratoRequerido;}
public function setContratoAsignado($ContratoAsignado_){ $this->ContratoAsignado=$ContratoAsignado_;}
public function getContratoAsignado(){ return $this->ContratoAsignado;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
public function setContratoId($ContratoId_){ $this->ContratoId=$ContratoId_;}
public function getContratoId(){ return $this->ContratoId;}
//Métodos
//Método Insertar
public function Insertar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into acopiocontrato values('$this->AcopioContratoId','$this->AcopioAsignado','$this->AcopioPorAsignar','$this->ContratoRequerido','$this->ContratoAsignado','$this->AcopioId','$this->ContratoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_acopiocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select acopiocontrato.AcopioContratoId As 'AcopioContratoId',acopiocontrato.AcopioAsignado As 'Asignado',acopiocontrato.AcopioPorAsignar As 'Por Asignar',acopiocontrato.ContratoRequerido As 'Requerido',acopiocontrato.ContratoAsignado As 'Asignado',acopiocontrato.AcopioId As 'AcopioId',acopiocontrato.ContratoId As 'ContratoId' from acopiocontrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_acopiocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from acopiocontrato where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_acopiocontrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from acopiocontrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopiocontrato set Estado='E' where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopiocontrato set estado='A' where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_acopiocontrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update acopiocontrato set AcopioAsignado='$this->AcopioAsignado',AcopioPorAsignar='$this->AcopioPorAsignar',ContratoRequerido='$this->ContratoRequerido',ContratoAsignado='$this->ContratoAsignado',AcopioId='$this->AcopioId',ContratoId='$this->ContratoId' where AcopioContratoId='$this->AcopioContratoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>