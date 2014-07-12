<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docidentifica{
//Constructor
public function Clase_docidentifica(){}
//Atributos
private $cDocCodigo;
private $nDocTipoNum;
private $cDocNDoc;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setnDocTipoNum($nDocTipoNum_){ $this->nDocTipoNum=$nDocTipoNum_;}
public function getnDocTipoNum(){ return $this->nDocTipoNum;}
public function setcDocNDoc($cDocNDoc_){ $this->cDocNDoc=$cDocNDoc_;}
public function getcDocNDoc(){ return $this->cDocNDoc;}
//Métodos
//Método Insertar
public function Insertar_docidentifica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docidentifica values('$this->cDocCodigo','$this->nDocTipoNum','$this->cDocNDoc')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docidentifica(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docidentifica.cDocCodigo As 'cDocCodigo',docidentifica.nDocTipoNum As 'nDocTipoNum',docidentifica.cDocNDoc As 'cDocNDoc' from docidentifica";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docidentifica(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docidentifica WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docidentifica(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docidentifica";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docidentifica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docidentifica SET docidentificaEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docidentifica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docidentifica SET docidentificaEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docidentifica(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docidentifica SET nDocTipoNum='$this->nDocTipoNum',cDocNDoc='$this->cDocNDoc' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>