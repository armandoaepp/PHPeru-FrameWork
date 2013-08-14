<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_respuestausuario{
//Constructor
public function Clase_respuestausuario(){}
//Atributos
private $RespuestaUsuarioId;
private $RespuestaUsuario;
private $UsuarioId;
private $SimulacroId;
//Propiedades
public function setRespuestaUsuarioId($RespuestaUsuarioId_){ $this->RespuestaUsuarioId=$RespuestaUsuarioId_;}
public function getRespuestaUsuarioId(){ return $this->RespuestaUsuarioId;}
public function setRespuestaUsuario($RespuestaUsuario_){ $this->RespuestaUsuario=$RespuestaUsuario_;}
public function getRespuestaUsuario(){ return $this->RespuestaUsuario;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setSimulacroId($SimulacroId_){ $this->SimulacroId=$SimulacroId_;}
public function getSimulacroId(){ return $this->SimulacroId;}
//Métodos
//Método Insertar
public function Insertar_respuestausuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into respuestausuario values('$this->RespuestaUsuarioId','$this->RespuestaUsuario','$this->UsuarioId','$this->SimulacroId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_respuestausuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select respuestausuario.RespuestaUsuarioId As 'RespuestaUsuarioId',respuestausuario.RespuestaUsuario As 'RespuestaUsuario',respuestausuario.UsuarioId As 'UsuarioId',respuestausuario.SimulacroId As 'SimulacroId' from respuestausuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_respuestausuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM respuestausuario WHERE RespuestaUsuarioId='$this->RespuestaUsuarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_respuestausuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM respuestausuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_respuestausuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE respuestausuario SET respuestausuarioEstado='E' WHERE RespuestaUsuarioId='$this->RespuestaUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_respuestausuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE respuestausuario SET respuestausuarioEstado='A' WHERE RespuestaUsuarioId='$this->RespuestaUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_respuestausuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE respuestausuario SET RespuestaUsuario='$this->RespuestaUsuario',UsuarioId='$this->UsuarioId',SimulacroId='$this->SimulacroId' WHERE RespuestaUsuarioId='$this->RespuestaUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>