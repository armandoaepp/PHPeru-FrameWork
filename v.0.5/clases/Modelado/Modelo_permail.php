<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_permail{
//Constructor
public function Clase_permail(){}
//Atributos
private $cPerCodigo;
private $nPerMailItem;
private $cPerMail;
private $nPerMailEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerMailItem($nPerMailItem_){ $this->nPerMailItem=$nPerMailItem_;}
public function getnPerMailItem(){ return $this->nPerMailItem;}
public function setcPerMail($cPerMail_){ $this->cPerMail=$cPerMail_;}
public function getcPerMail(){ return $this->cPerMail;}
public function setnPerMailEstado($nPerMailEstado_){ $this->nPerMailEstado=$nPerMailEstado_;}
public function getnPerMailEstado(){ return $this->nPerMailEstado;}
//Métodos
//Método Insertar
public function Insertar_permail(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into permail values('$this->cPerCodigo','$this->nPerMailItem','$this->cPerMail','$this->nPerMailEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_permail(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select permail.cPerCodigo As 'cPerCodigo',permail.nPerMailItem As 'nPerMailItem',permail.cPerMail As 'cPerMail',permail.nPerMailEstado As 'nPerMailEstado' from permail";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_permail(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM permail WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_permail(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM permail";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_permail(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE permail SET permailEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_permail(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE permail SET permailEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_permail(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE permail SET nPerMailItem='$this->nPerMailItem',cPerMail='$this->cPerMail',nPerMailEstado='$this->nPerMailEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>