<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_educacion{
//Constructor
public function Clase_educacion(){}
//Atributos
private $EducacionId;
private $EducacionNivel;
//Propiedades
public function setEducacionId($EducacionId_){ $this->EducacionId=$EducacionId_;}
public function getEducacionId(){ return $this->EducacionId;}
public function setEducacionNivel($EducacionNivel_){ $this->EducacionNivel=$EducacionNivel_;}
public function getEducacionNivel(){ return $this->EducacionNivel;}
//Métodos
//Método Insertar
public function Insertar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into educacion values('$this->EducacionId','$this->EducacionNivel')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_educacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select educacion.EducacionId As 'EducacionId',educacion.EducacionNivel As 'EducacionNivel' from educacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_educacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM educacion WHERE EducacionId='$this->EducacionId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_educacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM educacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE educacion SET educacionEstado='E' WHERE EducacionId='$this->EducacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE educacion SET educacionEstado='A' WHERE EducacionId='$this->EducacionId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_educacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE educacion SET EducacionNivel='$this->EducacionNivel' WHERE EducacionId='$this->EducacionId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>