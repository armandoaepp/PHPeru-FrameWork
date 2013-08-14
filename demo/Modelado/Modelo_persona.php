<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_persona{
//Constructor
public function Clase_persona(){}
//Atributos
private $PersonaId;
private $PersonaApellido;
private $PersonaNombre;
private $PersonaEmail;
private $PersonaTelefono;
//Propiedades
public function setPersonaId($PersonaId_){ $this->PersonaId=$PersonaId_;}
public function getPersonaId(){ return $this->PersonaId;}
public function setPersonaApellido($PersonaApellido_){ $this->PersonaApellido=$PersonaApellido_;}
public function getPersonaApellido(){ return $this->PersonaApellido;}
public function setPersonaNombre($PersonaNombre_){ $this->PersonaNombre=$PersonaNombre_;}
public function getPersonaNombre(){ return $this->PersonaNombre;}
public function setPersonaEmail($PersonaEmail_){ $this->PersonaEmail=$PersonaEmail_;}
public function getPersonaEmail(){ return $this->PersonaEmail;}
public function setPersonaTelefono($PersonaTelefono_){ $this->PersonaTelefono=$PersonaTelefono_;}
public function getPersonaTelefono(){ return $this->PersonaTelefono;}
//Métodos
//Método Insertar
public function Insertar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into persona values('$this->PersonaId','$this->PersonaApellido','$this->PersonaNombre','$this->PersonaEmail','$this->PersonaTelefono')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_persona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select persona.PersonaId As 'PersonaId',persona.PersonaApellido As 'Apellidos',persona.PersonaNombre As 'Nombres',persona.PersonaEmail As 'PersonaEmail',persona.PersonaTelefono As 'Telefono' from persona";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_persona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM persona WHERE PersonaId='$this->PersonaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_persona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM persona";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE persona SET personaEstado='E' WHERE PersonaId='$this->PersonaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE persona SET personaEstado='A' WHERE PersonaId='$this->PersonaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_persona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE persona SET PersonaApellido='$this->PersonaApellido',PersonaNombre='$this->PersonaNombre',PersonaEmail='$this->PersonaEmail',PersonaTelefono='$this->PersonaTelefono' WHERE PersonaId='$this->PersonaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>