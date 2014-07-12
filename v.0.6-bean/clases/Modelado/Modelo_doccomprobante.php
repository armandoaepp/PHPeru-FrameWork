<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_doccomprobante{
//Constructor
public function Clase_doccomprobante(){}
//Atributos
private $cDocCodigo;
private $nTipo;
private $nMoneda;
private $fmonto;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setnTipo($nTipo_){ $this->nTipo=$nTipo_;}
public function getnTipo(){ return $this->nTipo;}
public function setnMoneda($nMoneda_){ $this->nMoneda=$nMoneda_;}
public function getnMoneda(){ return $this->nMoneda;}
public function setfmonto($fmonto_){ $this->fmonto=$fmonto_;}
public function getfmonto(){ return $this->fmonto;}
//Métodos
//Método Insertar
public function Insertar_doccomprobante(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into doccomprobante values('$this->cDocCodigo','$this->nTipo','$this->nMoneda','$this->fmonto')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_doccomprobante(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select doccomprobante.cDocCodigo As 'cDocCodigo',doccomprobante.nTipo As 'nTipo',doccomprobante.nMoneda As 'nMoneda',doccomprobante.fmonto As 'fmonto' from doccomprobante";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_doccomprobante(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM doccomprobante WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_doccomprobante(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM doccomprobante";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_doccomprobante(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE doccomprobante SET doccomprobanteEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_doccomprobante(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE doccomprobante SET doccomprobanteEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_doccomprobante(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE doccomprobante SET nTipo='$this->nTipo',nMoneda='$this->nMoneda',fmonto='$this->fmonto' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>