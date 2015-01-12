<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_simulacro{
//Constructor
public function Clase_simulacro(){}
//Atributos
private $SimulacroId;
private $SimulacroNumero;
private $SimulacroNombre;
private $SimulacroEstado;
//Propiedades
public function setSimulacroId($SimulacroId_){ $this->SimulacroId=$SimulacroId_;}
public function getSimulacroId(){ return $this->SimulacroId;}
public function setSimulacroNumero($SimulacroNumero_){ $this->SimulacroNumero=$SimulacroNumero_;}
public function getSimulacroNumero(){ return $this->SimulacroNumero;}
public function setSimulacroNombre($SimulacroNombre_){ $this->SimulacroNombre=$SimulacroNombre_;}
public function getSimulacroNombre(){ return $this->SimulacroNombre;}
public function setSimulacroEstado($SimulacroEstado_){ $this->SimulacroEstado=$SimulacroEstado_;}
public function getSimulacroEstado(){ return $this->SimulacroEstado;}
//Métodos
//Método Insertar
public function Insertar_simulacro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into simulacro values('$this->SimulacroId','$this->SimulacroNumero','$this->SimulacroNombre','$this->SimulacroEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_simulacro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select simulacro.SimulacroId As 'SimulacroId',simulacro.SimulacroNumero As 'Numero',simulacro.SimulacroNombre As 'Nombre',simulacro.SimulacroEstado As 'Estado' from simulacro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_simulacro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM simulacro WHERE SimulacroId='$this->SimulacroId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_simulacro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM simulacro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_simulacro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE simulacro SET simulacroEstado='E' WHERE SimulacroId='$this->SimulacroId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_simulacro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE simulacro SET simulacroEstado='A' WHERE SimulacroId='$this->SimulacroId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_simulacro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE simulacro SET SimulacroNumero='$this->SimulacroNumero',SimulacroNombre='$this->SimulacroNombre',SimulacroEstado='$this->SimulacroEstado' WHERE SimulacroId='$this->SimulacroId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>