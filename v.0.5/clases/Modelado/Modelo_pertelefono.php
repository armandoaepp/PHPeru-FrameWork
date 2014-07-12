<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pertelefono{
//Constructor
public function Clase_pertelefono(){}
//Atributos
private $cPerCodigo;
private $nPerTelTipo;
private $nPerTelItem;
private $cPerTelNumero;
private $nPerTelEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerTelTipo($nPerTelTipo_){ $this->nPerTelTipo=$nPerTelTipo_;}
public function getnPerTelTipo(){ return $this->nPerTelTipo;}
public function setnPerTelItem($nPerTelItem_){ $this->nPerTelItem=$nPerTelItem_;}
public function getnPerTelItem(){ return $this->nPerTelItem;}
public function setcPerTelNumero($cPerTelNumero_){ $this->cPerTelNumero=$cPerTelNumero_;}
public function getcPerTelNumero(){ return $this->cPerTelNumero;}
public function setnPerTelEstado($nPerTelEstado_){ $this->nPerTelEstado=$nPerTelEstado_;}
public function getnPerTelEstado(){ return $this->nPerTelEstado;}
//Métodos
//Método Insertar
public function Insertar_pertelefono(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pertelefono values('$this->cPerCodigo','$this->nPerTelTipo','$this->nPerTelItem','$this->cPerTelNumero','$this->nPerTelEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_pertelefono(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select pertelefono.cPerCodigo As 'cPerCodigo',pertelefono.nPerTelTipo As 'nPerTelTipo',pertelefono.nPerTelItem As 'nPerTelItem',pertelefono.cPerTelNumero As 'cPerTelNumero',pertelefono.nPerTelEstado As 'nPerTelEstado' from pertelefono";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pertelefono(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pertelefono WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_pertelefono(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pertelefono";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pertelefono(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pertelefono SET pertelefonoEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_pertelefono(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pertelefono SET pertelefonoEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_pertelefono(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pertelefono SET nPerTelTipo='$this->nPerTelTipo',nPerTelItem='$this->nPerTelItem',cPerTelNumero='$this->cPerTelNumero',nPerTelEstado='$this->nPerTelEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>