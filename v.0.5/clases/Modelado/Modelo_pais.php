<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pais{
//Constructor
public function Clase_pais(){}
//Atributos
private $nPaiCodigo;
private $cPaiNombre;
private $nPaiEstado;
//Propiedades
public function setnPaiCodigo($nPaiCodigo_){ $this->nPaiCodigo=$nPaiCodigo_;}
public function getnPaiCodigo(){ return $this->nPaiCodigo;}
public function setcPaiNombre($cPaiNombre_){ $this->cPaiNombre=$cPaiNombre_;}
public function getcPaiNombre(){ return $this->cPaiNombre;}
public function setnPaiEstado($nPaiEstado_){ $this->nPaiEstado=$nPaiEstado_;}
public function getnPaiEstado(){ return $this->nPaiEstado;}
//Métodos
//Método Insertar
public function Insertar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pais values('$this->nPaiCodigo','$this->cPaiNombre','$this->nPaiEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select pais.nPaiCodigo As 'nPaiCodigo',pais.cPaiNombre As 'cPaiNombre',pais.nPaiEstado As 'nPaiEstado' from pais";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pais WHERE nPaiCodigo='$this->nPaiCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pais";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pais SET paisEstado='E' WHERE nPaiCodigo='$this->nPaiCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pais SET paisEstado='A' WHERE nPaiCodigo='$this->nPaiCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pais SET cPaiNombre='$this->cPaiNombre',nPaiEstado='$this->nPaiEstado' WHERE nPaiCodigo='$this->nPaiCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>