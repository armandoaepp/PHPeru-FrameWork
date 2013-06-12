<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_trabajo{
//Constructor
public function Clase_trabajo(){}
//Atributos
private $ID_TRABAJO;
private $TRABAJO_COD;
private $NOMBRE_TRAB;
private $SALARIO_MIN;
private $SALARIO_MAX;
//Propiedades
public function setID_TRABAJO($ID_TRABAJO_){ $this->ID_TRABAJO=$ID_TRABAJO_;}
public function getID_TRABAJO(){ return $this->ID_TRABAJO;}
public function setTRABAJO_COD($TRABAJO_COD_){ $this->TRABAJO_COD=$TRABAJO_COD_;}
public function getTRABAJO_COD(){ return $this->TRABAJO_COD;}
public function setNOMBRE_TRAB($NOMBRE_TRAB_){ $this->NOMBRE_TRAB=$NOMBRE_TRAB_;}
public function getNOMBRE_TRAB(){ return $this->NOMBRE_TRAB;}
public function setSALARIO_MIN($SALARIO_MIN_){ $this->SALARIO_MIN=$SALARIO_MIN_;}
public function getSALARIO_MIN(){ return $this->SALARIO_MIN;}
public function setSALARIO_MAX($SALARIO_MAX_){ $this->SALARIO_MAX=$SALARIO_MAX_;}
public function getSALARIO_MAX(){ return $this->SALARIO_MAX;}
//Métodos
//Método Insertar
public function Insertar_trabajo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into trabajo values('$this->ID_TRABAJO','$this->TRABAJO_COD','$this->NOMBRE_TRAB','$this->SALARIO_MIN','$this->SALARIO_MAX')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_trabajo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select trabajo.ID_TRABAJO As 'ID_TRABAJO',trabajo.TRABAJO_COD As 'TRABAJO_COD',trabajo.NOMBRE_TRAB As 'NOMBRE_TRAB',trabajo.SALARIO_MIN As 'SALARIO_MIN',trabajo.SALARIO_MAX As 'SALARIO_MAX' from trabajo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_trabajo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from trabajo where ID_TRABAJO='$this->ID_TRABAJO'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_trabajo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from trabajo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_trabajo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trabajo set Estado='E' where ID_TRABAJO='$this->ID_TRABAJO'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_trabajo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trabajo set estado='A' where ID_TRABAJO='$this->ID_TRABAJO'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_trabajo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update trabajo set TRABAJO_COD='$this->TRABAJO_COD',NOMBRE_TRAB='$this->NOMBRE_TRAB',SALARIO_MIN='$this->SALARIO_MIN',SALARIO_MAX='$this->SALARIO_MAX' where ID_TRABAJO='$this->ID_TRABAJO'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>