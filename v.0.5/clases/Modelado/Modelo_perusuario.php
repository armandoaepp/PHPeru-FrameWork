<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perusuario{
//Constructor
public function Clase_perusuario(){}
//Atributos
private $cPerCodigo;
private $cPerUsuCodigo;
private $cPerUsuClave;
private $nPerUsuEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setcPerUsuCodigo($cPerUsuCodigo_){ $this->cPerUsuCodigo=$cPerUsuCodigo_;}
public function getcPerUsuCodigo(){ return $this->cPerUsuCodigo;}
public function setcPerUsuClave($cPerUsuClave_){ $this->cPerUsuClave=$cPerUsuClave_;}
public function getcPerUsuClave(){ return $this->cPerUsuClave;}
public function setnPerUsuEstado($nPerUsuEstado_){ $this->nPerUsuEstado=$nPerUsuEstado_;}
public function getnPerUsuEstado(){ return $this->nPerUsuEstado;}
//Métodos
//Método Insertar
public function Insertar_perusuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perusuario values('$this->cPerCodigo','$this->cPerUsuCodigo','$this->cPerUsuClave','$this->nPerUsuEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perusuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perusuario.cPerCodigo As 'cPerCodigo',perusuario.cPerUsuCodigo As 'cPerUsuCodigo',perusuario.cPerUsuClave As 'cPerUsuClave',perusuario.nPerUsuEstado As 'nPerUsuEstado' from perusuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perusuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perusuario WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perusuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perusuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perusuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perusuario SET perusuarioEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perusuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perusuario SET perusuarioEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perusuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perusuario SET cPerUsuCodigo='$this->cPerUsuCodigo',cPerUsuClave='$this->cPerUsuClave',nPerUsuEstado='$this->nPerUsuEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>