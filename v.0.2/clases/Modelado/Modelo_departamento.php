<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_departamento{
//Constructor
public function Clase_departamento(){}
//Atributos
private $ID_DEPARTAMENTO;
private $DPTO_COD;
private $NOMBRE_DPTO;
private $JEFE;
private $PRESUPUESTO;
private $PRES_ACTUAL;
//Propiedades
public function setID_DEPARTAMENTO($ID_DEPARTAMENTO_){ $this->ID_DEPARTAMENTO=$ID_DEPARTAMENTO_;}
public function getID_DEPARTAMENTO(){ return $this->ID_DEPARTAMENTO;}
public function setDPTO_COD($DPTO_COD_){ $this->DPTO_COD=$DPTO_COD_;}
public function getDPTO_COD(){ return $this->DPTO_COD;}
public function setNOMBRE_DPTO($NOMBRE_DPTO_){ $this->NOMBRE_DPTO=$NOMBRE_DPTO_;}
public function getNOMBRE_DPTO(){ return $this->NOMBRE_DPTO;}
public function setJEFE($JEFE_){ $this->JEFE=$JEFE_;}
public function getJEFE(){ return $this->JEFE;}
public function setPRESUPUESTO($PRESUPUESTO_){ $this->PRESUPUESTO=$PRESUPUESTO_;}
public function getPRESUPUESTO(){ return $this->PRESUPUESTO;}
public function setPRES_ACTUAL($PRES_ACTUAL_){ $this->PRES_ACTUAL=$PRES_ACTUAL_;}
public function getPRES_ACTUAL(){ return $this->PRES_ACTUAL;}
//Métodos
//Método Insertar
public function Insertar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into departamento values('$this->ID_DEPARTAMENTO','$this->DPTO_COD','$this->NOMBRE_DPTO','$this->JEFE','$this->PRESUPUESTO','$this->PRES_ACTUAL')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select departamento.ID_DEPARTAMENTO As 'ID_DEPARTAMENTO',departamento.DPTO_COD As 'DPTO_COD',departamento.NOMBRE_DPTO As 'NOMBRE_DPTO',departamento.JEFE As 'JEFE',departamento.PRESUPUESTO As 'PRESUPUESTO',departamento.PRES_ACTUAL As 'PRES_ACTUAL' from departamento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from departamento where ID_DEPARTAMENTO='$this->ID_DEPARTAMENTO'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from departamento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update departamento set Estado='E' where ID_DEPARTAMENTO='$this->ID_DEPARTAMENTO'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update departamento set estado='A' where ID_DEPARTAMENTO='$this->ID_DEPARTAMENTO'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_departamento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update departamento set DPTO_COD='$this->DPTO_COD',NOMBRE_DPTO='$this->NOMBRE_DPTO',JEFE='$this->JEFE',PRESUPUESTO='$this->PRESUPUESTO',PRES_ACTUAL='$this->PRES_ACTUAL' where ID_DEPARTAMENTO='$this->ID_DEPARTAMENTO'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>