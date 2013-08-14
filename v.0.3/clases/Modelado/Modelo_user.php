<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_user{
//Constructor
public function Clase_user(){}
//Atributos
private $UserId;
private $UsueNombre;
private $UserEmail;
//Propiedades
public function setUserId($UserId_){ $this->UserId=$UserId_;}
public function getUserId(){ return $this->UserId;}
public function setUsueNombre($UsueNombre_){ $this->UsueNombre=$UsueNombre_;}
public function getUsueNombre(){ return $this->UsueNombre;}
public function setUserEmail($UserEmail_){ $this->UserEmail=$UserEmail_;}
public function getUserEmail(){ return $this->UserEmail;}
//Métodos
//Método Insertar
public function Insertar_user(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into user values('$this->UserId','$this->UsueNombre','$this->UserEmail')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_user(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select user.UserId As 'Id',user.UsueNombre As 'Usuario',user.UserEmail As 'Email' from user";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_user(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM user WHERE UserId='$this->UserId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_user(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM user";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_user(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE user SET userEstado='E' WHERE UserId='$this->UserId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_user(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE user SET userEstado='A' WHERE UserId='$this->UserId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_user(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE user SET UsueNombre='$this->UsueNombre',UserEmail='$this->UserEmail' WHERE UserId='$this->UserId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>