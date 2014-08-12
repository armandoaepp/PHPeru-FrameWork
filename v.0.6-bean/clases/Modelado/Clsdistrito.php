<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clase_distrito extends ClsConexion {
//Constructor
public function Clase_distrito(){}
//Métodos
//Método Insertar
public function Set_distrito($bean_distrito){
try{
//Atributos
$nDisCodigo = $bean_distrito->getnDisCodigo;
$cDisDescripcion = $bean_distrito->getcDisDescripcion;
$nProCodigo = $bean_distrito->getnProCodigo;
$cDisUbiCodigo = $bean_distrito->getcDisUbiCodigo;
$nDisEstado = $bean_distrito->getnDisEstado;
$this->query = "CALL usp_Set_distrito('$nDisCodigo','$cDisDescripcion','$nProCodigo','$cDisUbiCodigo','$nDisEstado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}catch(exception $e){
 return $e->getMessage();}
}
//Método Listar
public function Listar_distrito(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select distrito.nDisCodigo As 'nDisCodigo',distrito.cDisDescripcion As 'cDisDescripcion',distrito.nProCodigo As 'nProCodigo',distrito.cDisUbiCodigo As 'cDisUbiCodigo',distrito.nDisEstado As 'nDisEstado' from distrito";
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
$consulta="UPDATE distrito SET cDisDescripcion='$this->cDisDescripcion',nProCodigo='$this->nProCodigo',cDisUbiCodigo='$this->cDisUbiCodigo',nDisEstado='$this->nDisEstado' WHERE nDisCodigo='$this->nDisCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>