<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docparametro{
//Constructor
public function Clase_docparametro(){}
//Atributos
private $cDocCodigo;
private $nParClase;
private $nParCodigo;
private $cDocParObservacion;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setnParClase($nParClase_){ $this->nParClase=$nParClase_;}
public function getnParClase(){ return $this->nParClase;}
public function setnParCodigo($nParCodigo_){ $this->nParCodigo=$nParCodigo_;}
public function getnParCodigo(){ return $this->nParCodigo;}
public function setcDocParObservacion($cDocParObservacion_){ $this->cDocParObservacion=$cDocParObservacion_;}
public function getcDocParObservacion(){ return $this->cDocParObservacion;}
//Métodos
//Método Insertar
public function Insertar_docparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docparametro values('$this->cDocCodigo','$this->nParClase','$this->nParCodigo','$this->cDocParObservacion')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docparametro.cDocCodigo As 'cDocCodigo',docparametro.nParClase As 'nParClase',docparametro.nParCodigo As 'nParCodigo',docparametro.cDocParObservacion As 'cDocParObservacion' from docparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docparametro WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docparametro SET docparametroEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docparametro SET docparametroEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docparametro SET nParClase='$this->nParClase',nParCodigo='$this->nParCodigo',cDocParObservacion='$this->cDocParObservacion' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>