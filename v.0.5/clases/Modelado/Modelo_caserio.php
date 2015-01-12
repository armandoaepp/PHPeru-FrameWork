<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_caserio{
//Constructor
public function Clase_caserio(){}
//Atributos
private $nCasCodigo;
private $cCasDescripcion;
private $nDisCodigo;
private $nCasEstado;
//Propiedades
public function setnCasCodigo($nCasCodigo_){ $this->nCasCodigo=$nCasCodigo_;}
public function getnCasCodigo(){ return $this->nCasCodigo;}
public function setcCasDescripcion($cCasDescripcion_){ $this->cCasDescripcion=$cCasDescripcion_;}
public function getcCasDescripcion(){ return $this->cCasDescripcion;}
public function setnDisCodigo($nDisCodigo_){ $this->nDisCodigo=$nDisCodigo_;}
public function getnDisCodigo(){ return $this->nDisCodigo;}
public function setnCasEstado($nCasEstado_){ $this->nCasEstado=$nCasEstado_;}
public function getnCasEstado(){ return $this->nCasEstado;}
//Métodos
//Método Insertar
public function Insertar_caserio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into caserio values('$this->nCasCodigo','$this->cCasDescripcion','$this->nDisCodigo','$this->nCasEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_caserio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select caserio.nCasCodigo As 'nCasCodigo',caserio.cCasDescripcion As 'cCasDescripcion',caserio.nDisCodigo As 'nDisCodigo',caserio.nCasEstado As 'nCasEstado' from caserio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_caserio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM caserio WHERE nCasCodigo='$this->nCasCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_caserio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM caserio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_caserio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE caserio SET caserioEstado='E' WHERE nCasCodigo='$this->nCasCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_caserio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE caserio SET caserioEstado='A' WHERE nCasCodigo='$this->nCasCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_caserio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE caserio SET cCasDescripcion='$this->cCasDescripcion',nDisCodigo='$this->nDisCodigo',nCasEstado='$this->nCasEstado' WHERE nCasCodigo='$this->nCasCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>