<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_percosecha{
//Constructor
public function Clase_percosecha(){}
//Atributos
private $nPerCosCodigo;
private $cPerCodigo;
private $nParcCodigo;
private $nParcClase;
private $nProdCodigo;
private $nProdClase;
private $nPrdCodigo;
private $cCosCodigo;
private $fHectareas;
private $fQuintales;
private $fKilogramos;
private $cGlosa;
private $nPerCosEstado;
//Propiedades
public function setnPerCosCodigo($nPerCosCodigo_){ $this->nPerCosCodigo=$nPerCosCodigo_;}
public function getnPerCosCodigo(){ return $this->nPerCosCodigo;}
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnParcCodigo($nParcCodigo_){ $this->nParcCodigo=$nParcCodigo_;}
public function getnParcCodigo(){ return $this->nParcCodigo;}
public function setnParcClase($nParcClase_){ $this->nParcClase=$nParcClase_;}
public function getnParcClase(){ return $this->nParcClase;}
public function setnProdCodigo($nProdCodigo_){ $this->nProdCodigo=$nProdCodigo_;}
public function getnProdCodigo(){ return $this->nProdCodigo;}
public function setnProdClase($nProdClase_){ $this->nProdClase=$nProdClase_;}
public function getnProdClase(){ return $this->nProdClase;}
public function setnPrdCodigo($nPrdCodigo_){ $this->nPrdCodigo=$nPrdCodigo_;}
public function getnPrdCodigo(){ return $this->nPrdCodigo;}
public function setcCosCodigo($cCosCodigo_){ $this->cCosCodigo=$cCosCodigo_;}
public function getcCosCodigo(){ return $this->cCosCodigo;}
public function setfHectareas($fHectareas_){ $this->fHectareas=$fHectareas_;}
public function getfHectareas(){ return $this->fHectareas;}
public function setfQuintales($fQuintales_){ $this->fQuintales=$fQuintales_;}
public function getfQuintales(){ return $this->fQuintales;}
public function setfKilogramos($fKilogramos_){ $this->fKilogramos=$fKilogramos_;}
public function getfKilogramos(){ return $this->fKilogramos;}
public function setcGlosa($cGlosa_){ $this->cGlosa=$cGlosa_;}
public function getcGlosa(){ return $this->cGlosa;}
public function setnPerCosEstado($nPerCosEstado_){ $this->nPerCosEstado=$nPerCosEstado_;}
public function getnPerCosEstado(){ return $this->nPerCosEstado;}
//Métodos
//Método Insertar
public function Insertar_percosecha(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into percosecha values('$this->nPerCosCodigo','$this->cPerCodigo','$this->nParcCodigo','$this->nParcClase','$this->nProdCodigo','$this->nProdClase','$this->nPrdCodigo','$this->cCosCodigo','$this->fHectareas','$this->fQuintales','$this->fKilogramos','$this->cGlosa','$this->nPerCosEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_percosecha(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select percosecha.nPerCosCodigo As 'nPerCosCodigo',percosecha.cPerCodigo As 'cPerCodigo',percosecha.nParcCodigo As 'nParcCodigo',percosecha.nParcClase As 'nParcClase',percosecha.nProdCodigo As 'nProdCodigo',percosecha.nProdClase As 'nProdClase',percosecha.nPrdCodigo As 'nPrdCodigo',percosecha.cCosCodigo As 'cCosCodigo',percosecha.fHectareas As 'fHectareas',percosecha.fQuintales As 'fQuintales',percosecha.fKilogramos As 'fKilogramos',percosecha.cGlosa As 'cGlosa',percosecha.nPerCosEstado As 'nPerCosEstado' from percosecha";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_percosecha(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM percosecha WHERE nPerCosCodigo='$this->nPerCosCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_percosecha(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM percosecha";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_percosecha(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE percosecha SET percosechaEstado='E' WHERE nPerCosCodigo='$this->nPerCosCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_percosecha(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE percosecha SET percosechaEstado='A' WHERE nPerCosCodigo='$this->nPerCosCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_percosecha(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE percosecha SET cPerCodigo='$this->cPerCodigo',nParcCodigo='$this->nParcCodigo',nParcClase='$this->nParcClase',nProdCodigo='$this->nProdCodigo',nProdClase='$this->nProdClase',nPrdCodigo='$this->nPrdCodigo',cCosCodigo='$this->cCosCodigo',fHectareas='$this->fHectareas',fQuintales='$this->fQuintales',fKilogramos='$this->fKilogramos',cGlosa='$this->cGlosa',nPerCosEstado='$this->nPerCosEstado' WHERE nPerCosCodigo='$this->nPerCosCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>