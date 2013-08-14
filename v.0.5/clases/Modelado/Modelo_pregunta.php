<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pregunta{
//Constructor
public function Clase_pregunta(){}
//Atributos
private $PreguntaId;
private $PreguntaNumero;
private $Pregunta;
private $SimulacroId;
//Propiedades
public function setPreguntaId($PreguntaId_){ $this->PreguntaId=$PreguntaId_;}
public function getPreguntaId(){ return $this->PreguntaId;}
public function setPreguntaNumero($PreguntaNumero_){ $this->PreguntaNumero=$PreguntaNumero_;}
public function getPreguntaNumero(){ return $this->PreguntaNumero;}
public function setPregunta($Pregunta_){ $this->Pregunta=$Pregunta_;}
public function getPregunta(){ return $this->Pregunta;}
public function setSimulacroId($SimulacroId_){ $this->SimulacroId=$SimulacroId_;}
public function getSimulacroId(){ return $this->SimulacroId;}
//Métodos
//Método Insertar
public function Insertar_pregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pregunta values('$this->PreguntaId','$this->PreguntaNumero','$this->Pregunta','$this->SimulacroId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Insertar ID
public function Insertar_pregunta_ID(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pregunta values('$this->PreguntaId','$this->PreguntaNumero','$this->Pregunta','$this->SimulacroId')";
$rpta=$con->MetodoReg_Output_ID($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_pregunta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select pregunta.PreguntaId As 'PreguntaId',pregunta.PreguntaNumero As 'Numero',pregunta.Pregunta As 'Pregunta',pregunta.SimulacroId As 'SimulacroId' from pregunta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pregunta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pregunta WHERE PreguntaId='$this->PreguntaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_pregunta(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pregunta";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pregunta SET preguntaEstado='E' WHERE PreguntaId='$this->PreguntaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_pregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pregunta SET preguntaEstado='A' WHERE PreguntaId='$this->PreguntaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_pregunta(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pregunta SET PreguntaNumero='$this->PreguntaNumero',Pregunta='$this->Pregunta',SimulacroId='$this->SimulacroId' WHERE PreguntaId='$this->PreguntaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>