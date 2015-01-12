<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_transaccion{
//Constructor
public function Clase_transaccion(){}
//Atributos
private $cTraCodigo;
private $nOpeCodigo;
private $cPerCodigo;
private $dTraFecha;
private $cComputer;
private $cTraDescripcion;
//Propiedades
public function setcTraCodigo($cTraCodigo_){ $this->cTraCodigo=$cTraCodigo_;}
public function getcTraCodigo(){ return $this->cTraCodigo;}
public function setnOpeCodigo($nOpeCodigo_){ $this->nOpeCodigo=$nOpeCodigo_;}
public function getnOpeCodigo(){ return $this->nOpeCodigo;}
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setdTraFecha($dTraFecha_){ $this->dTraFecha=$dTraFecha_;}
public function getdTraFecha(){ return $this->dTraFecha;}
public function setcComputer($cComputer_){ $this->cComputer=$cComputer_;}
public function getcComputer(){ return $this->cComputer;}
public function setcTraDescripcion($cTraDescripcion_){ $this->cTraDescripcion=$cTraDescripcion_;}
public function getcTraDescripcion(){ return $this->cTraDescripcion;}
//Métodos
//Método Insertar
public function Insertar_transaccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into transaccion values('$this->cTraCodigo','$this->nOpeCodigo','$this->cPerCodigo','$this->dTraFecha','$this->cComputer','$this->cTraDescripcion')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_transaccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select transaccion.cTraCodigo As 'cTraCodigo',transaccion.nOpeCodigo As 'nOpeCodigo',transaccion.cPerCodigo As 'cPerCodigo',transaccion.dTraFecha As 'dTraFecha',transaccion.cComputer As 'cComputer',transaccion.cTraDescripcion As 'cTraDescripcion' from transaccion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_transaccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM transaccion WHERE cTraCodigo='$this->cTraCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_transaccion(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM transaccion";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_transaccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE transaccion SET transaccionEstado='E' WHERE cTraCodigo='$this->cTraCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_transaccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE transaccion SET transaccionEstado='A' WHERE cTraCodigo='$this->cTraCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_transaccion(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE transaccion SET nOpeCodigo='$this->nOpeCodigo',cPerCodigo='$this->cPerCodigo',dTraFecha='$this->dTraFecha',cComputer='$this->cComputer',cTraDescripcion='$this->cTraDescripcion' WHERE cTraCodigo='$this->cTraCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>