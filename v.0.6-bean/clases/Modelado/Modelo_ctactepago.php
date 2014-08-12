<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_ctactepago{
//Constructor
public function Clase_ctactepago(){}
//Atributos
private $cCtaCteRecibo;
private $nCtaCtePagCodigo;
private $cPerCodigo;
private $nPerCtaCodigo;
private $nTurno;
private $nForPago;
private $nTipPago;
private $cCtaCtePagNroOperacion;
private $dCtaCtePagfecha;
private $CtaCtePagGlosa;
private $fCtaCtePagImporte;
//Propiedades
public function setcCtaCteRecibo($cCtaCteRecibo_){ $this->cCtaCteRecibo=$cCtaCteRecibo_;}
public function getcCtaCteRecibo(){ return $this->cCtaCteRecibo;}
public function setnCtaCtePagCodigo($nCtaCtePagCodigo_){ $this->nCtaCtePagCodigo=$nCtaCtePagCodigo_;}
public function getnCtaCtePagCodigo(){ return $this->nCtaCtePagCodigo;}
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerCtaCodigo($nPerCtaCodigo_){ $this->nPerCtaCodigo=$nPerCtaCodigo_;}
public function getnPerCtaCodigo(){ return $this->nPerCtaCodigo;}
public function setnTurno($nTurno_){ $this->nTurno=$nTurno_;}
public function getnTurno(){ return $this->nTurno;}
public function setnForPago($nForPago_){ $this->nForPago=$nForPago_;}
public function getnForPago(){ return $this->nForPago;}
public function setnTipPago($nTipPago_){ $this->nTipPago=$nTipPago_;}
public function getnTipPago(){ return $this->nTipPago;}
public function setcCtaCtePagNroOperacion($cCtaCtePagNroOperacion_){ $this->cCtaCtePagNroOperacion=$cCtaCtePagNroOperacion_;}
public function getcCtaCtePagNroOperacion(){ return $this->cCtaCtePagNroOperacion;}
public function setdCtaCtePagfecha($dCtaCtePagfecha_){ $this->dCtaCtePagfecha=$dCtaCtePagfecha_;}
public function getdCtaCtePagfecha(){ return $this->dCtaCtePagfecha;}
public function setCtaCtePagGlosa($CtaCtePagGlosa_){ $this->CtaCtePagGlosa=$CtaCtePagGlosa_;}
public function getCtaCtePagGlosa(){ return $this->CtaCtePagGlosa;}
public function setfCtaCtePagImporte($fCtaCtePagImporte_){ $this->fCtaCtePagImporte=$fCtaCtePagImporte_;}
public function getfCtaCtePagImporte(){ return $this->fCtaCtePagImporte;}
//Métodos
//Método Insertar
public function Insertar_ctactepago(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into ctactepago values('$this->cCtaCteRecibo','$this->nCtaCtePagCodigo','$this->cPerCodigo','$this->nPerCtaCodigo','$this->nTurno','$this->nForPago','$this->nTipPago','$this->cCtaCtePagNroOperacion','$this->dCtaCtePagfecha','$this->CtaCtePagGlosa','$this->fCtaCtePagImporte')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_ctactepago(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select ctactepago.cCtaCteRecibo As 'cCtaCteRecibo',ctactepago.nCtaCtePagCodigo As 'nCtaCtePagCodigo',ctactepago.cPerCodigo As 'cPerCodigo',ctactepago.nPerCtaCodigo As 'nPerCtaCodigo',ctactepago.nTurno As 'nTurno',ctactepago.nForPago As 'nForPago',ctactepago.nTipPago As 'nTipPago',ctactepago.cCtaCtePagNroOperacion As 'cCtaCtePagNroOperacion',ctactepago.dCtaCtePagfecha As 'dCtaCtePagfecha',ctactepago.CtaCtePagGlosa As 'CtaCtePagGlosa',ctactepago.fCtaCtePagImporte As 'fCtaCtePagImporte' from ctactepago";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_ctactepago(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctactepago WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_ctactepago(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM ctactepago";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_ctactepago(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactepago SET ctactepagoEstado='E' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_ctactepago(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactepago SET ctactepagoEstado='A' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_ctactepago(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE ctactepago SET nCtaCtePagCodigo='$this->nCtaCtePagCodigo',cPerCodigo='$this->cPerCodigo',nPerCtaCodigo='$this->nPerCtaCodigo',nTurno='$this->nTurno',nForPago='$this->nForPago',nTipPago='$this->nTipPago',cCtaCtePagNroOperacion='$this->cCtaCtePagNroOperacion',dCtaCtePagfecha='$this->dCtaCtePagfecha',CtaCtePagGlosa='$this->CtaCtePagGlosa',fCtaCtePagImporte='$this->fCtaCtePagImporte' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>