<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_documento{
//Constructor
public function Clase_documento(){}
//Atributos
private $cDocCodigo;
private $dDocFecha;
private $cDocObservacion;
private $nDocTipo;
private $nDocEstado;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setdDocFecha($dDocFecha_){ $this->dDocFecha=$dDocFecha_;}
public function getdDocFecha(){ return $this->dDocFecha;}
public function setcDocObservacion($cDocObservacion_){ $this->cDocObservacion=$cDocObservacion_;}
public function getcDocObservacion(){ return $this->cDocObservacion;}
public function setnDocTipo($nDocTipo_){ $this->nDocTipo=$nDocTipo_;}
public function getnDocTipo(){ return $this->nDocTipo;}
public function setnDocEstado($nDocEstado_){ $this->nDocEstado=$nDocEstado_;}
public function getnDocEstado(){ return $this->nDocEstado;}
//Métodos
//Método Insertar
public function Insertar_documento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into documento values('$this->cDocCodigo','$this->dDocFecha','$this->cDocObservacion','$this->nDocTipo','$this->nDocEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_documento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select documento.cDocCodigo As 'cDocCodigo',documento.dDocFecha As 'dDocFecha',documento.cDocObservacion As 'cDocObservacion',documento.nDocTipo As 'nDocTipo',documento.nDocEstado As 'nDocEstado' from documento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_documento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM documento WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_documento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM documento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_documento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE documento SET documentoEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_documento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE documento SET documentoEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_documento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE documento SET dDocFecha='$this->dDocFecha',cDocObservacion='$this->cDocObservacion',nDocTipo='$this->nDocTipo',nDocEstado='$this->nDocEstado' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>