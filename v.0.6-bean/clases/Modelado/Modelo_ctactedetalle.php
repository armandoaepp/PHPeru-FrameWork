<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_ctactedetalle{
//Constructor
public function Clase_ctactedetalle(){}
//Atributos
private $cCtaCteRecibo;
private $Item;
private $nSerCodigo;
private $nCtaCteCantidad;
private $nMoneda;
private $fCtaCteTC;
private $fCtaCteIGV;
private $fCtaCteDetimporte;
private $dCtaCteDetRegistro;
private $nBieRegCodigo;
private $nCtaCtedetEstado;
//Propiedades
public function setcCtaCteRecibo($cCtaCteRecibo_){ $this->cCtaCteRecibo=$cCtaCteRecibo_;}
public function getcCtaCteRecibo(){ return $this->cCtaCteRecibo;}
public function setItem($Item_){ $this->Item=$Item_;}
public function getItem(){ return $this->Item;}
public function setnSerCodigo($nSerCodigo_){ $this->nSerCodigo=$nSerCodigo_;}
public function getnSerCodigo(){ return $this->nSerCodigo;}
public function setnCtaCteCantidad($nCtaCteCantidad_){ $this->nCtaCteCantidad=$nCtaCteCantidad_;}
public function getnCtaCteCantidad(){ return $this->nCtaCteCantidad;}
public function setnMoneda($nMoneda_){ $this->nMoneda=$nMoneda_;}
public function getnMoneda(){ return $this->nMoneda;}
public function setfCtaCteTC($fCtaCteTC_){ $this->fCtaCteTC=$fCtaCteTC_;}
public function getfCtaCteTC(){ return $this->fCtaCteTC;}
public function setfCtaCteIGV($fCtaCteIGV_){ $this->fCtaCteIGV=$fCtaCteIGV_;}
public function getfCtaCteIGV(){ return $this->fCtaCteIGV;}
public function setfCtaCteDetimporte($fCtaCteDetimporte_){ $this->fCtaCteDetimporte=$fCtaCteDetimporte_;}
public function getfCtaCteDetimporte(){ return $this->fCtaCteDetimporte;}
public function setdCtaCteDetRegistro($dCtaCteDetRegistro_){ $this->dCtaCteDetRegistro=$dCtaCteDetRegistro_;}
public function getdCtaCteDetRegistro(){ return $this->dCtaCteDetRegistro;}
public function setnBieRegCodigo($nBieRegCodigo_){ $this->nBieRegCodigo=$nBieRegCodigo_;}
public function getnBieRegCodigo(){ return $this->nBieRegCodigo;}
public function setnCtaCtedetEstado($nCtaCtedetEstado_){ $this->nCtaCtedetEstado=$nCtaCtedetEstado_;}
public function getnCtaCtedetEstado(){ return $this->nCtaCtedetEstado;}
//Métodos
//Método Insertar
public function Insertar_ctactedetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into ctactedetalle values('$this->cCtaCteRecibo','$this->Item','$this->nSerCodigo','$this->nCtaCteCantidad','$this->nMoneda','$this->fCtaCteTC','$this->fCtaCteIGV','$this->fCtaCteDetimporte','$this->dCtaCteDetRegistro','$this->nBieRegCodigo','$this->nCtaCtedetEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_ctactedetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select ctactedetalle.cCtaCteRecibo As 'cCtaCteRecibo',ctactedetalle.Item As 'Item',ctactedetalle.nSerCodigo As 'nSerCodigo',ctactedetalle.nCtaCteCantidad As 'nCtaCteCantidad',ctactedetalle.nMoneda As 'nMoneda',ctactedetalle.fCtaCteTC As 'fCtaCteTC',ctactedetalle.fCtaCteIGV As 'fCtaCteIGV',ctactedetalle.fCtaCteDetimporte As 'fCtaCteDetimporte',ctactedetalle.dCtaCteDetRegistro As 'dCtaCteDetRegistro',ctactedetalle.nBieRegCodigo As 'nBieRegCodigo',ctactedetalle.nCtaCtedetEstado As 'nCtaCtedetEstado' from ctactedetalle";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_ctactedetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctactedetalle WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_ctactedetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctactedetalle";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_ctactedetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactedetalle SET ctactedetalleEstado='E' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_ctactedetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactedetalle SET ctactedetalleEstado='A' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_ctactedetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactedetalle SET Item='$this->Item',nSerCodigo='$this->nSerCodigo',nCtaCteCantidad='$this->nCtaCteCantidad',nMoneda='$this->nMoneda',fCtaCteTC='$this->fCtaCteTC',fCtaCteIGV='$this->fCtaCteIGV',fCtaCteDetimporte='$this->fCtaCteDetimporte',dCtaCteDetRegistro='$this->dCtaCteDetRegistro',nBieRegCodigo='$this->nBieRegCodigo',nCtaCtedetEstado='$this->nCtaCtedetEstado' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>