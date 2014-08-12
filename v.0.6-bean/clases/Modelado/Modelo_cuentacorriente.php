<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_cuentacorriente{
//Constructor
public function Clase_cuentacorriente(){}
//Atributos
private $cCtaCteRecibo;
private $nPerCtaCodigo;
private $nCtaCteTipo;
private $nCtaCteItem;
private $fCtaCteImporte;
private $nCtaCteCuota;
private $nCtaCteEstado;
private $dCtaCteFecVence;
private $dCtaCteFecPago;
private $dCtaCteFecEmis;
private $dCtaCteFecRegistro;
private $cCtaCteGlosa;
private $nPrdCodigo;
private $nMonCodigo;
//Propiedades
public function setcCtaCteRecibo($cCtaCteRecibo_){ $this->cCtaCteRecibo=$cCtaCteRecibo_;}
public function getcCtaCteRecibo(){ return $this->cCtaCteRecibo;}
public function setnPerCtaCodigo($nPerCtaCodigo_){ $this->nPerCtaCodigo=$nPerCtaCodigo_;}
public function getnPerCtaCodigo(){ return $this->nPerCtaCodigo;}
public function setnCtaCteTipo($nCtaCteTipo_){ $this->nCtaCteTipo=$nCtaCteTipo_;}
public function getnCtaCteTipo(){ return $this->nCtaCteTipo;}
public function setnCtaCteItem($nCtaCteItem_){ $this->nCtaCteItem=$nCtaCteItem_;}
public function getnCtaCteItem(){ return $this->nCtaCteItem;}
public function setfCtaCteImporte($fCtaCteImporte_){ $this->fCtaCteImporte=$fCtaCteImporte_;}
public function getfCtaCteImporte(){ return $this->fCtaCteImporte;}
public function setnCtaCteCuota($nCtaCteCuota_){ $this->nCtaCteCuota=$nCtaCteCuota_;}
public function getnCtaCteCuota(){ return $this->nCtaCteCuota;}
public function setnCtaCteEstado($nCtaCteEstado_){ $this->nCtaCteEstado=$nCtaCteEstado_;}
public function getnCtaCteEstado(){ return $this->nCtaCteEstado;}
public function setdCtaCteFecVence($dCtaCteFecVence_){ $this->dCtaCteFecVence=$dCtaCteFecVence_;}
public function getdCtaCteFecVence(){ return $this->dCtaCteFecVence;}
public function setdCtaCteFecPago($dCtaCteFecPago_){ $this->dCtaCteFecPago=$dCtaCteFecPago_;}
public function getdCtaCteFecPago(){ return $this->dCtaCteFecPago;}
public function setdCtaCteFecEmis($dCtaCteFecEmis_){ $this->dCtaCteFecEmis=$dCtaCteFecEmis_;}
public function getdCtaCteFecEmis(){ return $this->dCtaCteFecEmis;}
public function setdCtaCteFecRegistro($dCtaCteFecRegistro_){ $this->dCtaCteFecRegistro=$dCtaCteFecRegistro_;}
public function getdCtaCteFecRegistro(){ return $this->dCtaCteFecRegistro;}
public function setcCtaCteGlosa($cCtaCteGlosa_){ $this->cCtaCteGlosa=$cCtaCteGlosa_;}
public function getcCtaCteGlosa(){ return $this->cCtaCteGlosa;}
public function setnPrdCodigo($nPrdCodigo_){ $this->nPrdCodigo=$nPrdCodigo_;}
public function getnPrdCodigo(){ return $this->nPrdCodigo;}
public function setnMonCodigo($nMonCodigo_){ $this->nMonCodigo=$nMonCodigo_;}
public function getnMonCodigo(){ return $this->nMonCodigo;}
//Métodos
//Método Insertar
public function Insertar_cuentacorriente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into cuentacorriente values('$this->cCtaCteRecibo','$this->nPerCtaCodigo','$this->nCtaCteTipo','$this->nCtaCteItem','$this->fCtaCteImporte','$this->nCtaCteCuota','$this->nCtaCteEstado','$this->dCtaCteFecVence','$this->dCtaCteFecPago','$this->dCtaCteFecEmis','$this->dCtaCteFecRegistro','$this->cCtaCteGlosa','$this->nPrdCodigo','$this->nMonCodigo')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_cuentacorriente(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select cuentacorriente.cCtaCteRecibo As 'cCtaCteRecibo',cuentacorriente.nPerCtaCodigo As 'nPerCtaCodigo',cuentacorriente.nCtaCteTipo As 'nCtaCteTipo',cuentacorriente.nCtaCteItem As 'nCtaCteItem',cuentacorriente.fCtaCteImporte As 'fCtaCteImporte',cuentacorriente.nCtaCteCuota As 'nCtaCteCuota',cuentacorriente.nCtaCteEstado As 'nCtaCteEstado',cuentacorriente.dCtaCteFecVence As 'dCtaCteFecVence',cuentacorriente.dCtaCteFecPago As 'dCtaCteFecPago',cuentacorriente.dCtaCteFecEmis As 'dCtaCteFecEmis',cuentacorriente.dCtaCteFecRegistro As 'dCtaCteFecRegistro',cuentacorriente.cCtaCteGlosa As 'cCtaCteGlosa',cuentacorriente.nPrdCodigo As 'nPrdCodigo',cuentacorriente.nMonCodigo As 'nMonCodigo' from cuentacorriente";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_cuentacorriente(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM cuentacorriente WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_cuentacorriente(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM cuentacorriente";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_cuentacorriente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE cuentacorriente SET cuentacorrienteEstado='E' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_cuentacorriente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE cuentacorriente SET cuentacorrienteEstado='A' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_cuentacorriente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE cuentacorriente SET nPerCtaCodigo='$this->nPerCtaCodigo',nCtaCteTipo='$this->nCtaCteTipo',nCtaCteItem='$this->nCtaCteItem',fCtaCteImporte='$this->fCtaCteImporte',nCtaCteCuota='$this->nCtaCteCuota',nCtaCteEstado='$this->nCtaCteEstado',dCtaCteFecVence='$this->dCtaCteFecVence',dCtaCteFecPago='$this->dCtaCteFecPago',dCtaCteFecEmis='$this->dCtaCteFecEmis',dCtaCteFecRegistro='$this->dCtaCteFecRegistro',cCtaCteGlosa='$this->cCtaCteGlosa',nPrdCodigo='$this->nPrdCodigo',nMonCodigo='$this->nMonCodigo' WHERE cCtaCteRecibo='$this->cCtaCteRecibo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>