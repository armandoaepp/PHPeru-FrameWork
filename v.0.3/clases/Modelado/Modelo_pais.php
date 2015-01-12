<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pais{
//Constructor
public function Clase_pais(){}
//Atributos
private $PaisId;
private $PaisNombre;
//Propiedades
public function setPaisId($PaisId_){ $this->PaisId=$PaisId_;}
public function getPaisId(){ return $this->PaisId;}
public function setPaisNombre($PaisNombre_){ $this->PaisNombre=$PaisNombre_;}
public function getPaisNombre(){ return $this->PaisNombre;}
//Métodos
//Método Insertar
public function Insertar_pais(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pais values('$this->PaisId','$this->PaisNombre')";
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
$consulta="Select pais.PaisId As 'PaisId',pais.PaisNombre As 'PaisNombre' from pais";
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
$consulta= "SELECT * FROM pais WHERE PaisId='$this->PaisId'";
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
$consulta="UPDATE pais SET paisEstado='E' WHERE PaisId='$this->PaisId'";
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
$consulta="UPDATE pais SET paisEstado='A' WHERE PaisId='$this->PaisId'";
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
$consulta="UPDATE pais SET PaisNombre='$this->PaisNombre' WHERE PaisId='$this->PaisId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>