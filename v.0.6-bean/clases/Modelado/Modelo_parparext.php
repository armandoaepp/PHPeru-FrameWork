<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_parparext{
//Constructor
public function Clase_parparext(){}
//Atributos
private $nIntSrcCodigo;
private $nIntSrcClase;
private $nIntDstCodigo;
private $nIntDstClase;
private $nObjCodigo;
private $nObjTipo;
private $cValor;
//Propiedades
public function setnIntSrcCodigo($nIntSrcCodigo_){ $this->nIntSrcCodigo=$nIntSrcCodigo_;}
public function getnIntSrcCodigo(){ return $this->nIntSrcCodigo;}
public function setnIntSrcClase($nIntSrcClase_){ $this->nIntSrcClase=$nIntSrcClase_;}
public function getnIntSrcClase(){ return $this->nIntSrcClase;}
public function setnIntDstCodigo($nIntDstCodigo_){ $this->nIntDstCodigo=$nIntDstCodigo_;}
public function getnIntDstCodigo(){ return $this->nIntDstCodigo;}
public function setnIntDstClase($nIntDstClase_){ $this->nIntDstClase=$nIntDstClase_;}
public function getnIntDstClase(){ return $this->nIntDstClase;}
public function setnObjCodigo($nObjCodigo_){ $this->nObjCodigo=$nObjCodigo_;}
public function getnObjCodigo(){ return $this->nObjCodigo;}
public function setnObjTipo($nObjTipo_){ $this->nObjTipo=$nObjTipo_;}
public function getnObjTipo(){ return $this->nObjTipo;}
public function setcValor($cValor_){ $this->cValor=$cValor_;}
public function getcValor(){ return $this->cValor;}
//Métodos
//Método Insertar
public function Insertar_parparext(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into parparext values('$this->nIntSrcCodigo','$this->nIntSrcClase','$this->nIntDstCodigo','$this->nIntDstClase','$this->nObjCodigo','$this->nObjTipo','$this->cValor')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parparext(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parparext.nIntSrcCodigo As 'nIntSrcCodigo',parparext.nIntSrcClase As 'nIntSrcClase',parparext.nIntDstCodigo As 'nIntDstCodigo',parparext.nIntDstClase As 'nIntDstClase',parparext.nObjCodigo As 'nObjCodigo',parparext.nObjTipo As 'nObjTipo',parparext.cValor As 'cValor' from parparext";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parparext(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parparext WHERE nIntSrcCodigo='$this->nIntSrcCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_parparext(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parparext";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parparext(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parparext SET parparextEstado='E' WHERE nIntSrcCodigo='$this->nIntSrcCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_parparext(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parparext SET parparextEstado='A' WHERE nIntSrcCodigo='$this->nIntSrcCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parparext(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parparext SET nIntSrcClase='$this->nIntSrcClase',nIntDstCodigo='$this->nIntDstCodigo',nIntDstClase='$this->nIntDstClase',nObjCodigo='$this->nObjCodigo',nObjTipo='$this->nObjTipo',cValor='$this->cValor' WHERE nIntSrcCodigo='$this->nIntSrcCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>