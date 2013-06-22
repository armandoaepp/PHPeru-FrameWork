<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_certificadocalidad{
//Constructor
public function Clase_certificadocalidad(){}
//Atributos
private $CertificadoCalidadId;
private $CertificadoCalidadVariedadTipica;
private $CertificadoCalidadVariedadCaturra;
private $CertificadoCalidadVariedadBourbon;
private $CertificadoCalidadVariedadCatimoro;
private $CertificadoCalidadVariedadTotal;
private $CertificadoCalidadTipoSecadoAlSol;
private $CertificadoCalidadTipoSecadoMecanico;
private $CertificadoCalidadTipoSecadoTotal;
private $CertificadoCalidadAltitud;
private $CertificadoCalidadBajoSombra;
private $AcopioId;
//Propiedades
public function setCertificadoCalidadId($CertificadoCalidadId_){ $this->CertificadoCalidadId=$CertificadoCalidadId_;}
public function getCertificadoCalidadId(){ return $this->CertificadoCalidadId;}
public function setCertificadoCalidadVariedadTipica($CertificadoCalidadVariedadTipica_){ $this->CertificadoCalidadVariedadTipica=$CertificadoCalidadVariedadTipica_;}
public function getCertificadoCalidadVariedadTipica(){ return $this->CertificadoCalidadVariedadTipica;}
public function setCertificadoCalidadVariedadCaturra($CertificadoCalidadVariedadCaturra_){ $this->CertificadoCalidadVariedadCaturra=$CertificadoCalidadVariedadCaturra_;}
public function getCertificadoCalidadVariedadCaturra(){ return $this->CertificadoCalidadVariedadCaturra;}
public function setCertificadoCalidadVariedadBourbon($CertificadoCalidadVariedadBourbon_){ $this->CertificadoCalidadVariedadBourbon=$CertificadoCalidadVariedadBourbon_;}
public function getCertificadoCalidadVariedadBourbon(){ return $this->CertificadoCalidadVariedadBourbon;}
public function setCertificadoCalidadVariedadCatimoro($CertificadoCalidadVariedadCatimoro_){ $this->CertificadoCalidadVariedadCatimoro=$CertificadoCalidadVariedadCatimoro_;}
public function getCertificadoCalidadVariedadCatimoro(){ return $this->CertificadoCalidadVariedadCatimoro;}
public function setCertificadoCalidadVariedadTotal($CertificadoCalidadVariedadTotal_){ $this->CertificadoCalidadVariedadTotal=$CertificadoCalidadVariedadTotal_;}
public function getCertificadoCalidadVariedadTotal(){ return $this->CertificadoCalidadVariedadTotal;}
public function setCertificadoCalidadTipoSecadoAlSol($CertificadoCalidadTipoSecadoAlSol_){ $this->CertificadoCalidadTipoSecadoAlSol=$CertificadoCalidadTipoSecadoAlSol_;}
public function getCertificadoCalidadTipoSecadoAlSol(){ return $this->CertificadoCalidadTipoSecadoAlSol;}
public function setCertificadoCalidadTipoSecadoMecanico($CertificadoCalidadTipoSecadoMecanico_){ $this->CertificadoCalidadTipoSecadoMecanico=$CertificadoCalidadTipoSecadoMecanico_;}
public function getCertificadoCalidadTipoSecadoMecanico(){ return $this->CertificadoCalidadTipoSecadoMecanico;}
public function setCertificadoCalidadTipoSecadoTotal($CertificadoCalidadTipoSecadoTotal_){ $this->CertificadoCalidadTipoSecadoTotal=$CertificadoCalidadTipoSecadoTotal_;}
public function getCertificadoCalidadTipoSecadoTotal(){ return $this->CertificadoCalidadTipoSecadoTotal;}
public function setCertificadoCalidadAltitud($CertificadoCalidadAltitud_){ $this->CertificadoCalidadAltitud=$CertificadoCalidadAltitud_;}
public function getCertificadoCalidadAltitud(){ return $this->CertificadoCalidadAltitud;}
public function setCertificadoCalidadBajoSombra($CertificadoCalidadBajoSombra_){ $this->CertificadoCalidadBajoSombra=$CertificadoCalidadBajoSombra_;}
public function getCertificadoCalidadBajoSombra(){ return $this->CertificadoCalidadBajoSombra;}
public function setAcopioId($AcopioId_){ $this->AcopioId=$AcopioId_;}
public function getAcopioId(){ return $this->AcopioId;}
//Métodos
//Método Insertar
public function Insertar_certificadocalidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into certificadocalidad values('$this->CertificadoCalidadId','$this->CertificadoCalidadVariedadTipica','$this->CertificadoCalidadVariedadCaturra','$this->CertificadoCalidadVariedadBourbon','$this->CertificadoCalidadVariedadCatimoro','$this->CertificadoCalidadVariedadTotal','$this->CertificadoCalidadTipoSecadoAlSol','$this->CertificadoCalidadTipoSecadoMecanico','$this->CertificadoCalidadTipoSecadoTotal','$this->CertificadoCalidadAltitud','$this->CertificadoCalidadBajoSombra','$this->AcopioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_certificadocalidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select certificadocalidad.CertificadoCalidadId As 'CertificadoCalidadId',certificadocalidad.CertificadoCalidadVariedadTipica As 'Tipica',certificadocalidad.CertificadoCalidadVariedadCaturra As 'Caturra',certificadocalidad.CertificadoCalidadVariedadBourbon As 'Bourbon',certificadocalidad.CertificadoCalidadVariedadCatimoro As 'Catimoro',certificadocalidad.CertificadoCalidadVariedadTotal As ' Variedad Total',certificadocalidad.CertificadoCalidadTipoSecadoAlSol As 'Secado Al Sol',certificadocalidad.CertificadoCalidadTipoSecadoMecanico As 'Secado Mecanico',certificadocalidad.CertificadoCalidadTipoSecadoTotal As 'Secado Total',certificadocalidad.CertificadoCalidadAltitud As 'Altitud',certificadocalidad.CertificadoCalidadBajoSombra As 'Bajo Sombra',certificadocalidad.AcopioId As 'AcopioId' from certificadocalidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_certificadocalidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from certificadocalidad where CertificadoCalidadId='$this->CertificadoCalidadId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_certificadocalidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from certificadocalidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_certificadocalidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificadocalidad set Estado='E' where CertificadoCalidadId='$this->CertificadoCalidadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_certificadocalidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificadocalidad set estado='A' where CertificadoCalidadId='$this->CertificadoCalidadId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_certificadocalidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update certificadocalidad set CertificadoCalidadVariedadTipica='$this->CertificadoCalidadVariedadTipica',CertificadoCalidadVariedadCaturra='$this->CertificadoCalidadVariedadCaturra',CertificadoCalidadVariedadBourbon='$this->CertificadoCalidadVariedadBourbon',CertificadoCalidadVariedadCatimoro='$this->CertificadoCalidadVariedadCatimoro',CertificadoCalidadVariedadTotal='$this->CertificadoCalidadVariedadTotal',CertificadoCalidadTipoSecadoAlSol='$this->CertificadoCalidadTipoSecadoAlSol',CertificadoCalidadTipoSecadoMecanico='$this->CertificadoCalidadTipoSecadoMecanico',CertificadoCalidadTipoSecadoTotal='$this->CertificadoCalidadTipoSecadoTotal',CertificadoCalidadAltitud='$this->CertificadoCalidadAltitud',CertificadoCalidadBajoSombra='$this->CertificadoCalidadBajoSombra',AcopioId='$this->AcopioId' where CertificadoCalidadId='$this->CertificadoCalidadId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>