<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perrelacion{
//Constructor
public function Clase_perrelacion(){}
//Atributos
private $cPerCodigo;
private $nPerRelTipo;
private $cPerJuridica;
private $dPerRelacion;
private $cPerObservacion;
private $nPerRelEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerRelTipo($nPerRelTipo_){ $this->nPerRelTipo=$nPerRelTipo_;}
public function getnPerRelTipo(){ return $this->nPerRelTipo;}
public function setcPerJuridica($cPerJuridica_){ $this->cPerJuridica=$cPerJuridica_;}
public function getcPerJuridica(){ return $this->cPerJuridica;}
public function setdPerRelacion($dPerRelacion_){ $this->dPerRelacion=$dPerRelacion_;}
public function getdPerRelacion(){ return $this->dPerRelacion;}
public function setcPerObservacion($cPerObservacion_){ $this->cPerObservacion=$cPerObservacion_;}
public function getcPerObservacion(){ return $this->cPerObservacion;}
public function setnPerRelEstado($nPerRelEstado_){ $this->nPerRelEstado=$nPerRelEstado_;}
public function getnPerRelEstado(){ return $this->nPerRelEstado;}
//Métodos
//Método Insertar
public function Insertar_perrelacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perrelacion values('$this->cPerCodigo','$this->nPerRelTipo','$this->cPerJuridica','$this->dPerRelacion','$this->cPerObservacion','$this->nPerRelEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perrelacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perrelacion.cPerCodigo As 'cPerCodigo',perrelacion.nPerRelTipo As 'nPerRelTipo',perrelacion.cPerJuridica As 'cPerJuridica',perrelacion.dPerRelacion As 'dPerRelacion',perrelacion.cPerObservacion As 'cPerObservacion',perrelacion.nPerRelEstado As 'nPerRelEstado' from perrelacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perrelacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perrelacion WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perrelacion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perrelacion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perrelacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perrelacion SET perrelacionEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perrelacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perrelacion SET perrelacionEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perrelacion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perrelacion SET nPerRelTipo='$this->nPerRelTipo',cPerJuridica='$this->cPerJuridica',dPerRelacion='$this->dPerRelacion',cPerObservacion='$this->cPerObservacion',nPerRelEstado='$this->nPerRelEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>