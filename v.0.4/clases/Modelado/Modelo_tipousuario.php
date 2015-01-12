<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_tipousuario{
//Constructor
public function Clase_tipousuario(){}
//Atributos
private $TipoUsuarioId;
private $TipoUsuario;
private $TipoUsuarioEstado;
//Propiedades
public function setTipoUsuarioId($TipoUsuarioId_){ $this->TipoUsuarioId=$TipoUsuarioId_;}
public function getTipoUsuarioId(){ return $this->TipoUsuarioId;}
public function setTipoUsuario($TipoUsuario_){ $this->TipoUsuario=$TipoUsuario_;}
public function getTipoUsuario(){ return $this->TipoUsuario;}
public function setTipoUsuarioEstado($TipoUsuarioEstado_){ $this->TipoUsuarioEstado=$TipoUsuarioEstado_;}
public function getTipoUsuarioEstado(){ return $this->TipoUsuarioEstado;}
//Métodos
//Método Insertar
public function Insertar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into tipousuario values('$this->TipoUsuarioId','$this->TipoUsuario','$this->TipoUsuarioEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_tipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select tipousuario.TipoUsuarioId As 'TipoUsuarioId',tipousuario.TipoUsuario As 'TipoUsuario',tipousuario.TipoUsuarioEstado As 'TipoUsuarioEstado' from tipousuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_tipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM tipousuario WHERE TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_tipousuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM tipousuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE tipousuario SET tipousuarioEstado='E' WHERE TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE tipousuario SET tipousuarioEstado='A' WHERE TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_tipousuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE tipousuario SET TipoUsuario='$this->TipoUsuario',TipoUsuarioEstado='$this->TipoUsuarioEstado' WHERE TipoUsuarioId='$this->TipoUsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>