<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_historial_salarial{
//Constructor
public function Clase_historial_salarial(){}
//Atributos
private $ID_HISTORIAL_SALARIAL;
private $EMPLEADO_DNI;
private $SALARIO;
private $FECHA_COMIENZO;
private $FECHA_FIN;
//Propiedades
public function setID_HISTORIAL_SALARIAL($ID_HISTORIAL_SALARIAL_){ $this->ID_HISTORIAL_SALARIAL=$ID_HISTORIAL_SALARIAL_;}
public function getID_HISTORIAL_SALARIAL(){ return $this->ID_HISTORIAL_SALARIAL;}
public function setEMPLEADO_DNI($EMPLEADO_DNI_){ $this->EMPLEADO_DNI=$EMPLEADO_DNI_;}
public function getEMPLEADO_DNI(){ return $this->EMPLEADO_DNI;}
public function setSALARIO($SALARIO_){ $this->SALARIO=$SALARIO_;}
public function getSALARIO(){ return $this->SALARIO;}
public function setFECHA_COMIENZO($FECHA_COMIENZO_){ $this->FECHA_COMIENZO=$FECHA_COMIENZO_;}
public function getFECHA_COMIENZO(){ return $this->FECHA_COMIENZO;}
public function setFECHA_FIN($FECHA_FIN_){ $this->FECHA_FIN=$FECHA_FIN_;}
public function getFECHA_FIN(){ return $this->FECHA_FIN;}
//Métodos
//Método Insertar
public function Insertar_historial_salarial(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into historial_salarial values('$this->ID_HISTORIAL_SALARIAL','$this->EMPLEADO_DNI','$this->SALARIO','$this->FECHA_COMIENZO','$this->FECHA_FIN')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_historial_salarial(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select historial_salarial.ID_HISTORIAL_SALARIAL As 'ID_HISTORIAL_SALARIAL',historial_salarial.EMPLEADO_DNI As 'EMPLEADO_DNI',historial_salarial.SALARIO As 'SALARIO',historial_salarial.FECHA_COMIENZO As 'FECHA_COMIENZO',historial_salarial.FECHA_FIN As 'FECHA_FIN' from historial_salarial";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_historial_salarial(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from historial_salarial where ID_HISTORIAL_SALARIAL='$this->ID_HISTORIAL_SALARIAL'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_historial_salarial(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from historial_salarial";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_historial_salarial(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update historial_salarial set Estado='E' where ID_HISTORIAL_SALARIAL='$this->ID_HISTORIAL_SALARIAL'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_historial_salarial(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update historial_salarial set estado='A' where ID_HISTORIAL_SALARIAL='$this->ID_HISTORIAL_SALARIAL'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_historial_salarial(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update historial_salarial set EMPLEADO_DNI='$this->EMPLEADO_DNI',SALARIO='$this->SALARIO',FECHA_COMIENZO='$this->FECHA_COMIENZO',FECHA_FIN='$this->FECHA_FIN' where ID_HISTORIAL_SALARIAL='$this->ID_HISTORIAL_SALARIAL'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>