<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_textopregunta{
//Constructor
public function Clase_textopregunta(){}
//Atributos
private $TextoPreguntaId;
private $PreguntaId;
private $TextoId;
//Propiedades
public function setTextoPreguntaId($TextoPreguntaId_){ $this->TextoPreguntaId=$TextoPreguntaId_;}
public function getTextoPreguntaId(){ return $this->TextoPreguntaId;}
public function setPreguntaId($PreguntaId_){ $this->PreguntaId=$PreguntaId_;}
public function getPreguntaId(){ return $this->PreguntaId;}
public function setTextoId($TextoId_){ $this->TextoId=$TextoId_;}
public function getTextoId(){ return $this->TextoId;}
//Métodos
//Método Insertar
public function Insertar_textopregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into textopregunta values('$this->TextoPreguntaId','$this->PreguntaId','$this->TextoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_textopregunta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select textopregunta.TextoPreguntaId As 'TextoPreguntaId',textopregunta.PreguntaId As 'PreguntaId',textopregunta.TextoId As 'TextoId' from textopregunta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_textopregunta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM textopregunta WHERE TextoPreguntaId='$this->TextoPreguntaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_textopregunta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM textopregunta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_textopregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE textopregunta SET textopreguntaEstado='E' WHERE TextoPreguntaId='$this->TextoPreguntaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_textopregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE textopregunta SET textopreguntaEstado='A' WHERE TextoPreguntaId='$this->TextoPreguntaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_textopregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE textopregunta SET PreguntaId='$this->PreguntaId',TextoId='$this->TextoId' WHERE TextoPreguntaId='$this->TextoPreguntaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>