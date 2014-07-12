<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_distrito{
//Constructor
public function Clase_distrito(){}
//Atributos
private $nDisCodigo;
private $cDisDescripcion;
private $nProCodigo;
private $nDisEstado;
//Propiedades
public function setnDisCodigo($nDisCodigo_){ $this->nDisCodigo=$nDisCodigo_;}
public function getnDisCodigo(){ return $this->nDisCodigo;}
public function setcDisDescripcion($cDisDescripcion_){ $this->cDisDescripcion=$cDisDescripcion_;}
public function getcDisDescripcion(){ return $this->cDisDescripcion;}
public function setnProCodigo($nProCodigo_){ $this->nProCodigo=$nProCodigo_;}
public function getnProCodigo(){ return $this->nProCodigo;}
public function setnDisEstado($nDisEstado_){ $this->nDisEstado=$nDisEstado_;}
public function getnDisEstado(){ return $this->nDisEstado;}
//Métodos
//Método Insertar
public function Insertar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into distrito values('$this->nDisCodigo','$this->cDisDescripcion','$this->nProCodigo','$this->nDisEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select distrito.nDisCodigo As 'nDisCodigo',distrito.cDisDescripcion As 'cDisDescripcion',distrito.nProCodigo As 'nProCodigo',distrito.nDisEstado As 'nDisEstado' from distrito";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM distrito WHERE nDisCodigo='$this->nDisCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM distrito";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE distrito SET distritoEstado='E' WHERE nDisCodigo='$this->nDisCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE distrito SET distritoEstado='A' WHERE nDisCodigo='$this->nDisCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_distrito(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE distrito SET cDisDescripcion='$this->cDisDescripcion',nProCodigo='$this->nProCodigo',nDisEstado='$this->nDisEstado' WHERE nDisCodigo='$this->nDisCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>