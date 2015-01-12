<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docvigencia{
//Constructor
public function Clase_docvigencia(){}
//Atributos
private $cDocCodigo;
private $dFecha;
private $dFechaFin;
private $dHora;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setdFecha($dFecha_){ $this->dFecha=$dFecha_;}
public function getdFecha(){ return $this->dFecha;}
public function setdFechaFin($dFechaFin_){ $this->dFechaFin=$dFechaFin_;}
public function getdFechaFin(){ return $this->dFechaFin;}
public function setdHora($dHora_){ $this->dHora=$dHora_;}
public function getdHora(){ return $this->dHora;}
//Métodos
//Método Insertar
public function Insertar_docvigencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docvigencia values('$this->cDocCodigo','$this->dFecha','$this->dFechaFin','$this->dHora')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docvigencia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docvigencia.cDocCodigo As 'cDocCodigo',docvigencia.dFecha As 'dFecha',docvigencia.dFechaFin As 'dFechaFin',docvigencia.dHora As 'dHora' from docvigencia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docvigencia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docvigencia WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docvigencia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docvigencia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docvigencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docvigencia SET docvigenciaEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docvigencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docvigencia SET docvigenciaEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docvigencia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docvigencia SET dFecha='$this->dFecha',dFechaFin='$this->dFechaFin',dHora='$this->dHora' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>