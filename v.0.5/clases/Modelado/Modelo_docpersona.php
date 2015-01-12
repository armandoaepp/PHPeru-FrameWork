<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docpersona{
//Constructor
public function Clase_docpersona(){}
//Atributos
private $cDocCodigo;
private $nDocPerTipo;
private $cPerCodigo;
private $nPerRelacion;
private $nDocTipo;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setnDocPerTipo($nDocPerTipo_){ $this->nDocPerTipo=$nDocPerTipo_;}
public function getnDocPerTipo(){ return $this->nDocPerTipo;}
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerRelacion($nPerRelacion_){ $this->nPerRelacion=$nPerRelacion_;}
public function getnPerRelacion(){ return $this->nPerRelacion;}
public function setnDocTipo($nDocTipo_){ $this->nDocTipo=$nDocTipo_;}
public function getnDocTipo(){ return $this->nDocTipo;}
//Métodos
//Método Insertar
public function Insertar_docpersona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docpersona values('$this->cDocCodigo','$this->nDocPerTipo','$this->cPerCodigo','$this->nPerRelacion','$this->nDocTipo')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docpersona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docpersona.cDocCodigo As 'cDocCodigo',docpersona.nDocPerTipo As 'nDocPerTipo',docpersona.cPerCodigo As 'cPerCodigo',docpersona.nPerRelacion As 'nPerRelacion',docpersona.nDocTipo As 'nDocTipo' from docpersona";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docpersona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docpersona WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docpersona(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docpersona";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docpersona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docpersona SET docpersonaEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docpersona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docpersona SET docpersonaEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docpersona(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docpersona SET nDocPerTipo='$this->nDocPerTipo',cPerCodigo='$this->cPerCodigo',nPerRelacion='$this->nPerRelacion',nDocTipo='$this->nDocTipo' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>