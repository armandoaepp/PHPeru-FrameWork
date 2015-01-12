<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_texto{
//Constructor
public function Clase_texto(){}
//Atributos
private $TextoId;
private $TextoTitulo;
private $Texto;
private $SimulacroId;
private $TextoEstado;
//Propiedades
public function setTextoId($TextoId_){ $this->TextoId=$TextoId_;}
public function getTextoId(){ return $this->TextoId;}
public function setTextoTitulo($TextoTitulo_){ $this->TextoTitulo=$TextoTitulo_;}
public function getTextoTitulo(){ return $this->TextoTitulo;}
public function setTexto($Texto_){ $this->Texto=$Texto_;}
public function getTexto(){ return $this->Texto;}
public function setSimulacroId($SimulacroId_){ $this->SimulacroId=$SimulacroId_;}
public function getSimulacroId(){ return $this->SimulacroId;}
public function setTextoEstado($TextoEstado_){ $this->TextoEstado=$TextoEstado_;}
public function getTextoEstado(){ return $this->TextoEstado;}
//Métodos
//Método Insertar
public function Insertar_texto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into texto values('$this->TextoId','$this->TextoTitulo','$this->Texto','$this->SimulacroId','$this->TextoEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_texto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select texto.TextoId As 'TextoId',texto.TextoTitulo As 'Titulo',texto.Texto As 'Texto',texto.SimulacroId As 'Simulacro',texto.TextoEstado As 'Estado' from texto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_texto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM texto WHERE TextoId='$this->TextoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_texto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM texto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_texto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE texto SET textoEstado='E' WHERE TextoId='$this->TextoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_texto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE texto SET textoEstado='A' WHERE TextoId='$this->TextoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_texto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE texto SET TextoTitulo='$this->TextoTitulo',Texto='$this->Texto',SimulacroId='$this->SimulacroId',TextoEstado='$this->TextoEstado' WHERE TextoId='$this->TextoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>