<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_producto{
//Constructor
public function Clase_producto(){}
//Atributos
private $ProductoId;
private $ProductoVariedad;
private $ProductoArea;
private $ProductoProduccionAnual;
private $ProductoMesAfloracion;
private $ProductoMesCosecha;
private $ProductoDescripcion;
private $TipoProductoId;
private $PeriodoId;
private $ProductoEstado;
//Propiedades
public function setProductoId($ProductoId_){ $this->ProductoId=$ProductoId_;}
public function getProductoId(){ return $this->ProductoId;}
public function setProductoVariedad($ProductoVariedad_){ $this->ProductoVariedad=$ProductoVariedad_;}
public function getProductoVariedad(){ return $this->ProductoVariedad;}
public function setProductoArea($ProductoArea_){ $this->ProductoArea=$ProductoArea_;}
public function getProductoArea(){ return $this->ProductoArea;}
public function setProductoProduccionAnual($ProductoProduccionAnual_){ $this->ProductoProduccionAnual=$ProductoProduccionAnual_;}
public function getProductoProduccionAnual(){ return $this->ProductoProduccionAnual;}
public function setProductoMesAfloracion($ProductoMesAfloracion_){ $this->ProductoMesAfloracion=$ProductoMesAfloracion_;}
public function getProductoMesAfloracion(){ return $this->ProductoMesAfloracion;}
public function setProductoMesCosecha($ProductoMesCosecha_){ $this->ProductoMesCosecha=$ProductoMesCosecha_;}
public function getProductoMesCosecha(){ return $this->ProductoMesCosecha;}
public function setProductoDescripcion($ProductoDescripcion_){ $this->ProductoDescripcion=$ProductoDescripcion_;}
public function getProductoDescripcion(){ return $this->ProductoDescripcion;}
public function setTipoProductoId($TipoProductoId_){ $this->TipoProductoId=$TipoProductoId_;}
public function getTipoProductoId(){ return $this->TipoProductoId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}
public function setProductoEstado($ProductoEstado_){ $this->ProductoEstado=$ProductoEstado_;}
public function getProductoEstado(){ return $this->ProductoEstado;}
//Métodos
//Método Insertar
public function Insertar_producto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into producto values('$this->ProductoId','$this->ProductoVariedad','$this->ProductoArea','$this->ProductoProduccionAnual','$this->ProductoMesAfloracion','$this->ProductoMesCosecha','$this->ProductoDescripcion','$this->TipoProductoId','$this->PeriodoId','$this->ProductoEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_producto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select producto.ProductoId As 'ProductoId',producto.ProductoVariedad As 'Variedad',producto.ProductoArea As 'Area',producto.ProductoProduccionAnual As 'Produccion Anual',producto.ProductoMesAfloracion As 'Mes Afloracion',producto.ProductoMesCosecha As 'Mes Cosecha',producto.ProductoDescripcion As 'Descripcion',producto.TipoProductoId As 'TipoProductoId',producto.PeriodoId As 'PeriodoId',producto.ProductoEstado As 'Estado' from producto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_producto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from producto where ProductoId='$this->ProductoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_producto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from producto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_producto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update producto set Estado='E' where ProductoId='$this->ProductoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_producto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update producto set estado='A' where ProductoId='$this->ProductoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_producto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update producto set ProductoVariedad='$this->ProductoVariedad',ProductoArea='$this->ProductoArea',ProductoProduccionAnual='$this->ProductoProduccionAnual',ProductoMesAfloracion='$this->ProductoMesAfloracion',ProductoMesCosecha='$this->ProductoMesCosecha',ProductoDescripcion='$this->ProductoDescripcion',TipoProductoId='$this->TipoProductoId',PeriodoId='$this->PeriodoId',ProductoEstado='$this->ProductoEstado' where ProductoId='$this->ProductoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>