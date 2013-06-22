<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_guiaserie{
//Constructor
public function Clase_guiaserie(){}
//Atributos
private $GuiaSerieId;
private $GuiaSerieNumero;
private $GuiaSerieEstado;
private $SerieId;
//Propiedades
public function setGuiaSerieId($GuiaSerieId_){ $this->GuiaSerieId=$GuiaSerieId_;}
public function getGuiaSerieId(){ return $this->GuiaSerieId;}
public function setGuiaSerieNumero($GuiaSerieNumero_){ $this->GuiaSerieNumero=$GuiaSerieNumero_;}
public function getGuiaSerieNumero(){ return $this->GuiaSerieNumero;}
public function setGuiaSerieEstado($GuiaSerieEstado_){ $this->GuiaSerieEstado=$GuiaSerieEstado_;}
public function getGuiaSerieEstado(){ return $this->GuiaSerieEstado;}
public function setSerieId($SerieId_){ $this->SerieId=$SerieId_;}
public function getSerieId(){ return $this->SerieId;}
//Métodos
//Método Insertar
public function Insertar_guiaserie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into guiaserie values('$this->GuiaSerieId','$this->GuiaSerieNumero','$this->GuiaSerieEstado','$this->SerieId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_guiaserie(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select guiaserie.GuiaSerieId As 'GuiaSerieId',guiaserie.GuiaSerieNumero As 'GuiaSerieNumero',guiaserie.GuiaSerieEstado As 'GuiaSerieEstado',guiaserie.SerieId As 'SerieId' from guiaserie";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_guiaserie(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from guiaserie where GuiaSerieId='$this->GuiaSerieId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_guiaserie(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from guiaserie";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_guiaserie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update guiaserie set Estado='E' where GuiaSerieId='$this->GuiaSerieId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_guiaserie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update guiaserie set estado='A' where GuiaSerieId='$this->GuiaSerieId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_guiaserie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update guiaserie set GuiaSerieNumero='$this->GuiaSerieNumero',GuiaSerieEstado='$this->GuiaSerieEstado',SerieId='$this->SerieId' where GuiaSerieId='$this->GuiaSerieId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>