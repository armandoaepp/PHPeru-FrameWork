<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_puntaje{
//Constructor
public function Clase_puntaje(){}
//Atributos
private $PuntajeId;
private $PuntajeTotal;
private $SimulacroId;
private $UsuarioId;
//Propiedades
public function setPuntajeId($PuntajeId_){ $this->PuntajeId=$PuntajeId_;}
public function getPuntajeId(){ return $this->PuntajeId;}
public function setPuntajeTotal($PuntajeTotal_){ $this->PuntajeTotal=$PuntajeTotal_;}
public function getPuntajeTotal(){ return $this->PuntajeTotal;}
public function setSimulacroId($SimulacroId_){ $this->SimulacroId=$SimulacroId_;}
public function getSimulacroId(){ return $this->SimulacroId;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
//Métodos
//Método Insertar
public function Insertar_puntaje(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into puntaje values('$this->PuntajeId','$this->PuntajeTotal','$this->SimulacroId','$this->UsuarioId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_puntaje(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select puntaje.PuntajeId As 'PuntajeId',puntaje.PuntajeTotal As 'Puntaje Total',puntaje.SimulacroId As 'SimulacroId',puntaje.UsuarioId As 'UsuarioId' from puntaje";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_puntaje(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM puntaje WHERE PuntajeId='$this->PuntajeId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_puntaje(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM puntaje";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_puntaje(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE puntaje SET puntajeEstado='E' WHERE PuntajeId='$this->PuntajeId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_puntaje(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE puntaje SET puntajeEstado='A' WHERE PuntajeId='$this->PuntajeId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_puntaje(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE puntaje SET PuntajeTotal='$this->PuntajeTotal',SimulacroId='$this->SimulacroId',UsuarioId='$this->UsuarioId' WHERE PuntajeId='$this->PuntajeId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>