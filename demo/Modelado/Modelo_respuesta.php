<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_respuesta{
//Constructor
public function Clase_respuesta(){}
//Atributos
private $RespuestaId;
private $Respuesta;
private $PreguntaId;
private $RespuestaPuntaje;
//Propiedades
public function setRespuestaId($RespuestaId_){ $this->RespuestaId=$RespuestaId_;}
public function getRespuestaId(){ return $this->RespuestaId;}
public function setRespuesta($Respuesta_){ $this->Respuesta=$Respuesta_;}
public function getRespuesta(){ return $this->Respuesta;}
public function setPreguntaId($PreguntaId_){ $this->PreguntaId=$PreguntaId_;}
public function getPreguntaId(){ return $this->PreguntaId;}
public function setRespuestaPuntaje($RespuestaPuntaje_){ $this->RespuestaPuntaje=$RespuestaPuntaje_;}
public function getRespuestaPuntaje(){ return $this->RespuestaPuntaje;}
//Métodos
//Método Insertar
public function Insertar_respuesta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into respuesta values('$this->RespuestaId','$this->Respuesta','$this->PreguntaId','$this->RespuestaPuntaje')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_respuesta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select respuesta.RespuestaId As 'RespuestaId',respuesta.Respuesta As 'Respuesta',respuesta.PreguntaId As 'PreguntaId',respuesta.RespuestaPuntaje As 'Puntaje' from respuesta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_respuesta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM respuesta WHERE RespuestaId='$this->RespuestaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_respuesta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM respuesta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_respuesta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE respuesta SET respuestaEstado='E' WHERE RespuestaId='$this->RespuestaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_respuesta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE respuesta SET respuestaEstado='A' WHERE RespuestaId='$this->RespuestaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_respuesta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE respuesta SET Respuesta='$this->Respuesta',PreguntaId='$this->PreguntaId',RespuestaPuntaje='$this->RespuestaPuntaje' WHERE RespuestaId='$this->RespuestaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>