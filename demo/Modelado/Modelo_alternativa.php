<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
include_once("Modelo_pregunta.php");
class Clase_alternativa extends Clase_Pregunta{
//Constructor
public function Clase_alternativa(){}
//Atributos
private $AlternativaId;
private $AlternativaA;
private $AlternativaB;
private $AlternativaC;
private $AlternativaD;
private $AlternativaE;
private $PreguntaId;
//Propiedades
public function setAlternativaId($AlternativaId_){ $this->AlternativaId=$AlternativaId_;}
public function getAlternativaId(){ return $this->AlternativaId;}
public function setAlternativaA($AlternativaA_){ $this->AlternativaA=$AlternativaA_;}
public function getAlternativaA(){ return $this->AlternativaA;}
public function setAlternativaB($AlternativaB_){ $this->AlternativaB=$AlternativaB_;}
public function getAlternativaB(){ return $this->AlternativaB;}
public function setAlternativaC($AlternativaC_){ $this->AlternativaC=$AlternativaC_;}
public function getAlternativaC(){ return $this->AlternativaC;}
public function setAlternativaD($AlternativaD_){ $this->AlternativaD=$AlternativaD_;}
public function getAlternativaD(){ return $this->AlternativaD;}
public function setAlternativaE($AlternativaE_){ $this->AlternativaE=$AlternativaE_;}
public function getAlternativaE(){ return $this->AlternativaE;}
public function setPreguntaId($PreguntaId_){ $this->PreguntaId=$PreguntaId_;}
public function getPreguntaId(){ return $this->PreguntaId;}
//Métodos
//Método Insertar
public function Insertar_alternativa(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();

// llamamos al metodo rgistra y q devuelva el ID de altermativa
// $PreguntaId_=$this->Insertar_pregunta_ID();

$consulta="Insert into alternativa values('$this->AlternativaId','$this->AlternativaA','$this->AlternativaB','$this->AlternativaC','$this->AlternativaD','$this->AlternativaE','$this->PreguntaId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_alternativa(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select alternativa.AlternativaId As 'AlternativaId',alternativa.AlternativaA As 'A',alternativa.AlternativaB As 'B',alternativa.AlternativaC As 'C',alternativa.AlternativaD As 'D',alternativa.AlternativaE As 'E',alternativa.PreguntaId As 'PreguntaId' from alternativa";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_alternativa(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM alternativa WHERE AlternativaId='$this->AlternativaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_alternativa(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM alternativa";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_alternativa(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE alternativa SET alternativaEstado='E' WHERE AlternativaId='$this->AlternativaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_alternativa(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE alternativa SET alternativaEstado='A' WHERE AlternativaId='$this->AlternativaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_alternativa(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE alternativa SET AlternativaA='$this->AlternativaA',AlternativaB='$this->AlternativaB',AlternativaC='$this->AlternativaC',AlternativaD='$this->AlternativaD',AlternativaE='$this->AlternativaE',PreguntaId='$this->PreguntaId' WHERE AlternativaId='$this->AlternativaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>