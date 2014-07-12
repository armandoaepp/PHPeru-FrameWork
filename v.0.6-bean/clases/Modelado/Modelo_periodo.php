<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_periodo{
//Constructor
public function Clase_periodo(){}
//Atributos
private $nPrdCodigo;
private $cPrdDescripcion;
private $dPrdFecInic;
private $dPrdFecFin;
private $nPrdTipo;
private $nPrdEstado;
//Propiedades
public function setnPrdCodigo($nPrdCodigo_){ $this->nPrdCodigo=$nPrdCodigo_;}
public function getnPrdCodigo(){ return $this->nPrdCodigo;}
public function setcPrdDescripcion($cPrdDescripcion_){ $this->cPrdDescripcion=$cPrdDescripcion_;}
public function getcPrdDescripcion(){ return $this->cPrdDescripcion;}
public function setdPrdFecInic($dPrdFecInic_){ $this->dPrdFecInic=$dPrdFecInic_;}
public function getdPrdFecInic(){ return $this->dPrdFecInic;}
public function setdPrdFecFin($dPrdFecFin_){ $this->dPrdFecFin=$dPrdFecFin_;}
public function getdPrdFecFin(){ return $this->dPrdFecFin;}
public function setnPrdTipo($nPrdTipo_){ $this->nPrdTipo=$nPrdTipo_;}
public function getnPrdTipo(){ return $this->nPrdTipo;}
public function setnPrdEstado($nPrdEstado_){ $this->nPrdEstado=$nPrdEstado_;}
public function getnPrdEstado(){ return $this->nPrdEstado;}
//Métodos
//Método Insertar
public function Insertar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into periodo values('$this->nPrdCodigo','$this->cPrdDescripcion','$this->dPrdFecInic','$this->dPrdFecFin','$this->nPrdTipo','$this->nPrdEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_periodo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select periodo.nPrdCodigo As 'nPrdCodigo',periodo.cPrdDescripcion As 'cPrdDescripcion',periodo.dPrdFecInic As 'dPrdFecInic',periodo.dPrdFecFin As 'dPrdFecFin',periodo.nPrdTipo As 'nPrdTipo',periodo.nPrdEstado As 'nPrdEstado' from periodo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_periodo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM periodo WHERE nPrdCodigo='$this->nPrdCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_periodo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM periodo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE periodo SET periodoEstado='E' WHERE nPrdCodigo='$this->nPrdCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE periodo SET periodoEstado='A' WHERE nPrdCodigo='$this->nPrdCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE periodo SET cPrdDescripcion='$this->cPrdDescripcion',dPrdFecInic='$this->dPrdFecInic',dPrdFecFin='$this->dPrdFecFin',nPrdTipo='$this->nPrdTipo',nPrdEstado='$this->nPrdEstado' WHERE nPrdCodigo='$this->nPrdCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>