<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_parametro{
//Constructor
public function Clase_parametro(){}
//Atributos
private $ParametroId;
private $ParametroGanulometria17;
private $ParametroGanulometria15;
private $ParametroGanulometriaTotal;
private $ParametroDefectosPrimarios;
private $ParametroDefectosSecundario;
private $ParametroMuestraExportable;
private $ParametroMuestraDescarte;
private $ParametroMuestraImpureza;
private $AcopioId;
//Propiedades
public function setParametroId($ParametroId_){ $this->ParametroId=$ParametroId_;}
public function getParametroId(){ return $this->ParametroId;}
public function setParametroGanulometria17($ParametroGanulometria17_){ $this->ParametroGanulometria17=$ParametroGanulometria17_;}
public function getParametroGanulometria17(){ return $this->ParametroGanulometria17;}
public function setParametroGanulometria15($ParametroGanulometria15_){ $this->ParametroGanulometria15=$ParametroGanulometria15_;}
public function getParametroGanulometria15(){ return $this->ParametroGanulometria15;}
public function setParametroGanulometriaTotal($ParametroGanulometriaTotal_){ $this->ParametroGanulometriaTotal=$ParametroGanulometriaTotal_;}
public function getParametroGanulometriaTotal(){ return $this->ParametroGanulometriaTotal;}
public function setParametroDefectosPrimarios($ParametroDefectosPrimarios_){ $this->ParametroDefectosPrimarios=$ParametroDefectosPrimarios_;}
public function getParametroDefectosPrimarios(){ return $this->ParametroDefectosPrimarios;}
public function setParametroDefectosSecundario($ParametroDefectosSecundario_){ $this->ParametroDefectosSecundario=$ParametroDefectosSecundario_;}
public function getParametroDefectosSecundario(){ return $this->ParametroDefectosSecundario;}
public function setParametroMuestraExportable($ParametroMuestraExportable_){ $this->ParametroMuestraExportable=$ParametroMuestraExportable_;}
public function getParametroMuestraExportable(){ return $this->ParametroMuestraExportable;}
public function setParametroMuestraDescarte($ParametroMuestraDescarte_){ $this->ParametroMuestraDescarte=$ParametroMuestraDescarte_;}
public function getParametroMuestraDescarte(){ return $this->ParametroMuestraDescarte;}
public function setParametroMuestraImpureza($ParametroMuestraImpureza_){ $this->ParametroMuestraImpureza=$ParametroMuestraImpureza_;}
public function getParametroMuestraImpureza(){ return $this->ParametroMuestraImpureza;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into parametro values('$this->ParametroId','$this->ParametroGanulometria17','$this->ParametroGanulometria15','$this->ParametroGanulometriaTotal','$this->ParametroDefectosPrimarios','$this->ParametroDefectosSecundario','$this->ParametroMuestraExportable','$this->ParametroMuestraDescarte','$this->ParametroMuestraImpureza','$this->AcopioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parametro.ParametroId As 'ParametroId',parametro.ParametroGanulometria17 As 'Ganulometria17',parametro.ParametroGanulometria15 As 'Ganulometria15',parametro.ParametroGanulometriaTotal As 'GanulometriaTotal',parametro.ParametroDefectosPrimarios As 'DefectosPrimarios',parametro.ParametroDefectosSecundario As 'DefectosSecundario',parametro.ParametroMuestraExportable As 'MuestraExportable',parametro.ParametroMuestraDescarte As 'MuestraDescarte',parametro.ParametroMuestraImpureza As 'MuestraImpureza',parametro.AcopioId As 'AcopioId' from parametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from parametro where ParametroId='$this->ParametroId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_parametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from parametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update parametro set Estado='E' where ParametroId='$this->ParametroId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update parametro set estado='A' where ParametroId='$this->ParametroId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update parametro set ParametroGanulometria17='$this->ParametroGanulometria17',ParametroGanulometria15='$this->ParametroGanulometria15',ParametroGanulometriaTotal='$this->ParametroGanulometriaTotal',ParametroDefectosPrimarios='$this->ParametroDefectosPrimarios',ParametroDefectosSecundario='$this->ParametroDefectosSecundario',ParametroMuestraExportable='$this->ParametroMuestraExportable',ParametroMuestraDescarte='$this->ParametroMuestraDescarte',ParametroMuestraImpureza='$this->ParametroMuestraImpureza',AcopioId='$this->AcopioId' where ParametroId='$this->ParametroId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>