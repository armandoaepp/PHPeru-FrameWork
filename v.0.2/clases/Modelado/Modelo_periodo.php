<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_periodo{
//Constructor
public function Clase_periodo(){}
//Atributos
private $PeriodoId;
private $PeriodoAño;
private $PeriodoFechaInicio;
private $PeriodoFechaCierre;
private $PeriodoEstado;
//Propiedades
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}
public function setPeriodoAño($PeriodoAño_){ $this->PeriodoAño=$PeriodoAño_;}
public function getPeriodoAño(){ return $this->PeriodoAño;}
public function setPeriodoFechaInicio($PeriodoFechaInicio_){ $this->PeriodoFechaInicio=$PeriodoFechaInicio_;}
public function getPeriodoFechaInicio(){ return $this->PeriodoFechaInicio;}
public function setPeriodoFechaCierre($PeriodoFechaCierre_){ $this->PeriodoFechaCierre=$PeriodoFechaCierre_;}
public function getPeriodoFechaCierre(){ return $this->PeriodoFechaCierre;}
public function setPeriodoEstado($PeriodoEstado_){ $this->PeriodoEstado=$PeriodoEstado_;}
public function getPeriodoEstado(){ return $this->PeriodoEstado;}
//Métodos
//Método Insertar
public function Insertar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into periodo values('$this->PeriodoId','$this->PeriodoAño','$this->PeriodoFechaInicio','$this->PeriodoFechaCierre','$this->PeriodoEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_periodo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select periodo.PeriodoId As 'PeriodoId',periodo.PeriodoAño As 'Periodo Año',periodo.PeriodoFechaInicio As 'Fecha Inicio',periodo.PeriodoFechaCierre As 'Fecha Cierre',periodo.PeriodoEstado As 'Estado' from periodo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_periodo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from periodo where PeriodoId='$this->PeriodoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_periodo(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from periodo";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update periodo set Estado='E' where PeriodoId='$this->PeriodoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update periodo set estado='A' where PeriodoId='$this->PeriodoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_periodo(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update periodo set PeriodoAño='$this->PeriodoAño',PeriodoFechaInicio='$this->PeriodoFechaInicio',PeriodoFechaCierre='$this->PeriodoFechaCierre',PeriodoEstado='$this->PeriodoEstado' where PeriodoId='$this->PeriodoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>