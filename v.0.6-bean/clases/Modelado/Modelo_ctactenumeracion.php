<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_ctactenumeracion{
//Constructor
public function Clase_ctactenumeracion(){}
//Atributos
private $cPerJuridica;
private $nComTipo;
private $nSerie;
private $Numero;
//Propiedades
public function setcPerJuridica($cPerJuridica_){ $this->cPerJuridica=$cPerJuridica_;}
public function getcPerJuridica(){ return $this->cPerJuridica;}
public function setnComTipo($nComTipo_){ $this->nComTipo=$nComTipo_;}
public function getnComTipo(){ return $this->nComTipo;}
public function setnSerie($nSerie_){ $this->nSerie=$nSerie_;}
public function getnSerie(){ return $this->nSerie;}
public function setNumero($Numero_){ $this->Numero=$Numero_;}
public function getNumero(){ return $this->Numero;}
//Métodos
//Método Insertar
public function Insertar_ctactenumeracion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into ctactenumeracion values('$this->cPerJuridica','$this->nComTipo','$this->nSerie','$this->Numero')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_ctactenumeracion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select ctactenumeracion.cPerJuridica As 'cPerJuridica',ctactenumeracion.nComTipo As 'nComTipo',ctactenumeracion.nSerie As 'nSerie',ctactenumeracion.Numero As 'Numero' from ctactenumeracion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_ctactenumeracion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctactenumeracion WHERE cPerJuridica='$this->cPerJuridica'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_ctactenumeracion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctactenumeracion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_ctactenumeracion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactenumeracion SET ctactenumeracionEstado='E' WHERE cPerJuridica='$this->cPerJuridica'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_ctactenumeracion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactenumeracion SET ctactenumeracionEstado='A' WHERE cPerJuridica='$this->cPerJuridica'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_ctactenumeracion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactenumeracion SET nComTipo='$this->nComTipo',nSerie='$this->nSerie',Numero='$this->Numero' WHERE cPerJuridica='$this->cPerJuridica'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>