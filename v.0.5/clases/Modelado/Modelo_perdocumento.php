<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perdocumento{
//Constructor
public function Clase_perdocumento(){}
//Atributos
private $cPerCodigo;
private $nPerDocTipo;
private $cPerDocNumero;
private $dPerDocCaducidad;
private $nPerDocCategoria;
private $nPerDocEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerDocTipo($nPerDocTipo_){ $this->nPerDocTipo=$nPerDocTipo_;}
public function getnPerDocTipo(){ return $this->nPerDocTipo;}
public function setcPerDocNumero($cPerDocNumero_){ $this->cPerDocNumero=$cPerDocNumero_;}
public function getcPerDocNumero(){ return $this->cPerDocNumero;}
public function setdPerDocCaducidad($dPerDocCaducidad_){ $this->dPerDocCaducidad=$dPerDocCaducidad_;}
public function getdPerDocCaducidad(){ return $this->dPerDocCaducidad;}
public function setnPerDocCategoria($nPerDocCategoria_){ $this->nPerDocCategoria=$nPerDocCategoria_;}
public function getnPerDocCategoria(){ return $this->nPerDocCategoria;}
public function setnPerDocEstado($nPerDocEstado_){ $this->nPerDocEstado=$nPerDocEstado_;}
public function getnPerDocEstado(){ return $this->nPerDocEstado;}
//Métodos
//Método Insertar
public function Insertar_perdocumento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perdocumento values('$this->cPerCodigo','$this->nPerDocTipo','$this->cPerDocNumero','$this->dPerDocCaducidad','$this->nPerDocCategoria','$this->nPerDocEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perdocumento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perdocumento.cPerCodigo As 'cPerCodigo',perdocumento.nPerDocTipo As 'nPerDocTipo',perdocumento.cPerDocNumero As 'cPerDocNumero',perdocumento.dPerDocCaducidad As 'dPerDocCaducidad',perdocumento.nPerDocCategoria As 'nPerDocCategoria',perdocumento.nPerDocEstado As 'nPerDocEstado' from perdocumento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perdocumento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perdocumento WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perdocumento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perdocumento";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perdocumento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perdocumento SET perdocumentoEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perdocumento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perdocumento SET perdocumentoEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perdocumento(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perdocumento SET nPerDocTipo='$this->nPerDocTipo',cPerDocNumero='$this->cPerDocNumero',dPerDocCaducidad='$this->dPerDocCaducidad',nPerDocCategoria='$this->nPerDocCategoria',nPerDocEstado='$this->nPerDocEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>