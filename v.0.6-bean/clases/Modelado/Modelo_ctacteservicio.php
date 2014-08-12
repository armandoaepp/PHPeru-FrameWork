<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_ctacteservicio{
//Constructor
public function Clase_ctacteservicio(){}
//Atributos
private $nSerCodigo;
private $nBieCodigo;
private $nActCodigo;
private $nSerImporte;
private $nMonCodigo;
private $nSerAfecto;
private $nSerTipo;
private $nSerModalidad;
private $fSerTasa;
private $nSerPeriodicidad;
private $nUniOrgCodigo;
private $nPrdCodigo;
//Propiedades
public function setnSerCodigo($nSerCodigo_){ $this->nSerCodigo=$nSerCodigo_;}
public function getnSerCodigo(){ return $this->nSerCodigo;}
public function setnBieCodigo($nBieCodigo_){ $this->nBieCodigo=$nBieCodigo_;}
public function getnBieCodigo(){ return $this->nBieCodigo;}
public function setnActCodigo($nActCodigo_){ $this->nActCodigo=$nActCodigo_;}
public function getnActCodigo(){ return $this->nActCodigo;}
public function setnSerImporte($nSerImporte_){ $this->nSerImporte=$nSerImporte_;}
public function getnSerImporte(){ return $this->nSerImporte;}
public function setnMonCodigo($nMonCodigo_){ $this->nMonCodigo=$nMonCodigo_;}
public function getnMonCodigo(){ return $this->nMonCodigo;}
public function setnSerAfecto($nSerAfecto_){ $this->nSerAfecto=$nSerAfecto_;}
public function getnSerAfecto(){ return $this->nSerAfecto;}
public function setnSerTipo($nSerTipo_){ $this->nSerTipo=$nSerTipo_;}
public function getnSerTipo(){ return $this->nSerTipo;}
public function setnSerModalidad($nSerModalidad_){ $this->nSerModalidad=$nSerModalidad_;}
public function getnSerModalidad(){ return $this->nSerModalidad;}
public function setfSerTasa($fSerTasa_){ $this->fSerTasa=$fSerTasa_;}
public function getfSerTasa(){ return $this->fSerTasa;}
public function setnSerPeriodicidad($nSerPeriodicidad_){ $this->nSerPeriodicidad=$nSerPeriodicidad_;}
public function getnSerPeriodicidad(){ return $this->nSerPeriodicidad;}
public function setnUniOrgCodigo($nUniOrgCodigo_){ $this->nUniOrgCodigo=$nUniOrgCodigo_;}
public function getnUniOrgCodigo(){ return $this->nUniOrgCodigo;}
public function setnPrdCodigo($nPrdCodigo_){ $this->nPrdCodigo=$nPrdCodigo_;}
public function getnPrdCodigo(){ return $this->nPrdCodigo;}
//Métodos
//Método Insertar
public function Insertar_ctacteservicio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into ctacteservicio values('$this->nSerCodigo','$this->nBieCodigo','$this->nActCodigo','$this->nSerImporte','$this->nMonCodigo','$this->nSerAfecto','$this->nSerTipo','$this->nSerModalidad','$this->fSerTasa','$this->nSerPeriodicidad','$this->nUniOrgCodigo','$this->nPrdCodigo')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_ctacteservicio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select ctacteservicio.nSerCodigo As 'nSerCodigo',ctacteservicio.nBieCodigo As 'nBieCodigo',ctacteservicio.nActCodigo As 'nActCodigo',ctacteservicio.nSerImporte As 'nSerImporte',ctacteservicio.nMonCodigo As 'nMonCodigo',ctacteservicio.nSerAfecto As 'nSerAfecto',ctacteservicio.nSerTipo As 'nSerTipo',ctacteservicio.nSerModalidad As 'nSerModalidad',ctacteservicio.fSerTasa As 'fSerTasa',ctacteservicio.nSerPeriodicidad As 'nSerPeriodicidad',ctacteservicio.nUniOrgCodigo As 'nUniOrgCodigo',ctacteservicio.nPrdCodigo As 'nPrdCodigo' from ctacteservicio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_ctacteservicio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctacteservicio WHERE nSerCodigo='$this->nSerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_ctacteservicio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctacteservicio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_ctacteservicio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctacteservicio SET ctacteservicioEstado='E' WHERE nSerCodigo='$this->nSerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_ctacteservicio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctacteservicio SET ctacteservicioEstado='A' WHERE nSerCodigo='$this->nSerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_ctacteservicio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctacteservicio SET nBieCodigo='$this->nBieCodigo',nActCodigo='$this->nActCodigo',nSerImporte='$this->nSerImporte',nMonCodigo='$this->nMonCodigo',nSerAfecto='$this->nSerAfecto',nSerTipo='$this->nSerTipo',nSerModalidad='$this->nSerModalidad',fSerTasa='$this->fSerTasa',nSerPeriodicidad='$this->nSerPeriodicidad',nUniOrgCodigo='$this->nUniOrgCodigo',nPrdCodigo='$this->nPrdCodigo' WHERE nSerCodigo='$this->nSerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>