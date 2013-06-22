<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_historial_laboral{
//Constructor
public function Clase_historial_laboral(){}
//Atributos
private $ID_HISTORIAL_LABORAL;
private $EMPLEADO_DNI;
private $TRAB_COD;
private $FECHA_INICIO;
private $FECHA_FIN;
private $DPTO_COD;
private $SUPERVISOR_DNI;
//Propiedades
public function setID_HISTORIAL_LABORAL($ID_HISTORIAL_LABORAL_){ $this->ID_HISTORIAL_LABORAL=$ID_HISTORIAL_LABORAL_;}
public function getID_HISTORIAL_LABORAL(){ return $this->ID_HISTORIAL_LABORAL;}
public function setEMPLEADO_DNI($EMPLEADO_DNI_){ $this->EMPLEADO_DNI=$EMPLEADO_DNI_;}
public function getEMPLEADO_DNI(){ return $this->EMPLEADO_DNI;}
public function setTRAB_COD($TRAB_COD_){ $this->TRAB_COD=$TRAB_COD_;}
public function getTRAB_COD(){ return $this->TRAB_COD;}
public function setFECHA_INICIO($FECHA_INICIO_){ $this->FECHA_INICIO=$FECHA_INICIO_;}
public function getFECHA_INICIO(){ return $this->FECHA_INICIO;}
public function setFECHA_FIN($FECHA_FIN_){ $this->FECHA_FIN=$FECHA_FIN_;}
public function getFECHA_FIN(){ return $this->FECHA_FIN;}
public function setDPTO_COD($DPTO_COD_){ $this->DPTO_COD=$DPTO_COD_;}
public function getDPTO_COD(){ return $this->DPTO_COD;}
public function setSUPERVISOR_DNI($SUPERVISOR_DNI_){ $this->SUPERVISOR_DNI=$SUPERVISOR_DNI_;}
public function getSUPERVISOR_DNI(){ return $this->SUPERVISOR_DNI;}
//Métodos
//Método Insertar
public function Insertar_historial_laboral(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into historial_laboral values('$this->ID_HISTORIAL_LABORAL','$this->EMPLEADO_DNI','$this->TRAB_COD','$this->FECHA_INICIO','$this->FECHA_FIN','$this->DPTO_COD','$this->SUPERVISOR_DNI')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_historial_laboral(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select historial_laboral.ID_HISTORIAL_LABORAL As 'ID_HISTORIAL_LABORAL',historial_laboral.EMPLEADO_DNI As 'EMPLEADO_DNI',historial_laboral.TRAB_COD As 'TRAB_COD',historial_laboral.FECHA_INICIO As 'FECHA_INICIO',historial_laboral.FECHA_FIN As 'FECHA_FIN',historial_laboral.DPTO_COD As 'DPTO_COD',historial_laboral.SUPERVISOR_DNI As 'SUPERVISOR_DNI' from historial_laboral";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_historial_laboral(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from historial_laboral where ID_HISTORIAL_LABORAL='$this->ID_HISTORIAL_LABORAL'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_historial_laboral(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from historial_laboral";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_historial_laboral(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update historial_laboral set Estado='E' where ID_HISTORIAL_LABORAL='$this->ID_HISTORIAL_LABORAL'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_historial_laboral(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update historial_laboral set estado='A' where ID_HISTORIAL_LABORAL='$this->ID_HISTORIAL_LABORAL'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_historial_laboral(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update historial_laboral set EMPLEADO_DNI='$this->EMPLEADO_DNI',TRAB_COD='$this->TRAB_COD',FECHA_INICIO='$this->FECHA_INICIO',FECHA_FIN='$this->FECHA_FIN',DPTO_COD='$this->DPTO_COD',SUPERVISOR_DNI='$this->SUPERVISOR_DNI' where ID_HISTORIAL_LABORAL='$this->ID_HISTORIAL_LABORAL'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>