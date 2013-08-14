<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_usuario{
//Constructor
public function Clase_usuario(){}
//Atributos
private $UsuarioId;
private $UsuarioNick;
private $UsuarioPassword;
private $PersonaId;
//Propiedades
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setUsuarioNick($UsuarioNick_){ $this->UsuarioNick=$UsuarioNick_;}
public function getUsuarioNick(){ return $this->UsuarioNick;}
public function setUsuarioPassword($UsuarioPassword_){ $this->UsuarioPassword=$UsuarioPassword_;}
public function getUsuarioPassword(){ return $this->UsuarioPassword;}
public function setPersonaId($PersonaId_){ $this->PersonaId=$PersonaId_;}
public function getPersonaId(){ return $this->PersonaId;}
//Métodos
//Método Insertar
public function Insertar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into usuario values('$this->UsuarioId','$this->UsuarioNick','$this->UsuarioPassword','$this->PersonaId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_usuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select usuario.UsuarioId As 'UsuarioId',usuario.UsuarioNick As 'Nick',usuario.UsuarioPassword As 'Password',usuario.PersonaId As 'PersonaId' from usuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_usuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM usuario WHERE UsuarioId='$this->UsuarioId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_usuario(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM usuario";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE usuario SET usuarioEstado='E' WHERE UsuarioId='$this->UsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE usuario SET usuarioEstado='A' WHERE UsuarioId='$this->UsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_usuario(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE usuario SET UsuarioNick='$this->UsuarioNick',UsuarioPassword='$this->UsuarioPassword',PersonaId='$this->PersonaId' WHERE UsuarioId='$this->UsuarioId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>