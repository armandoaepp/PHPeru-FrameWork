<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pernatural{
//Constructor
public function Clase_pernatural(){}
//Atributos
private $cPerCodigo;
private $cPerNatApePaterno;
private $cPerNatApeMaterno;
private $nPerNatSexo;
private $nPerNatEstCivil;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setcPerNatApePaterno($cPerNatApePaterno_){ $this->cPerNatApePaterno=$cPerNatApePaterno_;}
public function getcPerNatApePaterno(){ return $this->cPerNatApePaterno;}
public function setcPerNatApeMaterno($cPerNatApeMaterno_){ $this->cPerNatApeMaterno=$cPerNatApeMaterno_;}
public function getcPerNatApeMaterno(){ return $this->cPerNatApeMaterno;}
public function setnPerNatSexo($nPerNatSexo_){ $this->nPerNatSexo=$nPerNatSexo_;}
public function getnPerNatSexo(){ return $this->nPerNatSexo;}
public function setnPerNatEstCivil($nPerNatEstCivil_){ $this->nPerNatEstCivil=$nPerNatEstCivil_;}
public function getnPerNatEstCivil(){ return $this->nPerNatEstCivil;}
//Métodos
//Método Insertar
public function Insertar_pernatural(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pernatural values('$this->cPerCodigo','$this->cPerNatApePaterno','$this->cPerNatApeMaterno','$this->nPerNatSexo','$this->nPerNatEstCivil')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_pernatural(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select pernatural.cPerCodigo As 'cPerCodigo',pernatural.cPerNatApePaterno As 'cPerNatApePaterno',pernatural.cPerNatApeMaterno As 'cPerNatApeMaterno',pernatural.nPerNatSexo As 'nPerNatSexo',pernatural.nPerNatEstCivil As 'nPerNatEstCivil' from pernatural";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pernatural(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pernatural WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_pernatural(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pernatural";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pernatural(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pernatural SET pernaturalEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_pernatural(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pernatural SET pernaturalEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_pernatural(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pernatural SET cPerNatApePaterno='$this->cPerNatApePaterno',cPerNatApeMaterno='$this->cPerNatApeMaterno',nPerNatSexo='$this->nPerNatSexo',nPerNatEstCivil='$this->nPerNatEstCivil' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>