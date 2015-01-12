<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_contrato{
//Constructor
public function Clase_contrato(){}
//Atributos
private $ContratoId;
private $ContratoNumero;
private $ContratoCantidadSacos;
private $ContratoKGxSaco;
private $ContratoPuntajeDesde;
private $ContratoPuntajeHasta;
private $ContratoFecha;
private $ContratoFechaEmbarque;
private $ContratoStatus;
private $ContratoPosicion;
private $ContratoPrecioBolsa;
private $ContratoNumeroFactura;
private $ContratoValorFod;
private $ContratoPuertoEmbarque;
private $ContratoPuertoDestino;
private $ContratoHumedad;
private $ContratoCantidadQuintales;
private $ContratoToneladas;
private $ContratoNotas;
private $ContratoEstado;
private $ClienteId;
private $TipoContratoId;
private $PeriodoId;
//Propiedades
public function setContratoId($ContratoId_){ $this->ContratoId=$ContratoId_;}
public function getContratoId(){ return $this->ContratoId;}
public function setContratoNumero($ContratoNumero_){ $this->ContratoNumero=$ContratoNumero_;}
public function getContratoNumero(){ return $this->ContratoNumero;}
public function setContratoCantidadSacos($ContratoCantidadSacos_){ $this->ContratoCantidadSacos=$ContratoCantidadSacos_;}
public function getContratoCantidadSacos(){ return $this->ContratoCantidadSacos;}
public function setContratoKGxSaco($ContratoKGxSaco_){ $this->ContratoKGxSaco=$ContratoKGxSaco_;}
public function getContratoKGxSaco(){ return $this->ContratoKGxSaco;}
public function setContratoPuntajeDesde($ContratoPuntajeDesde_){ $this->ContratoPuntajeDesde=$ContratoPuntajeDesde_;}
public function getContratoPuntajeDesde(){ return $this->ContratoPuntajeDesde;}
public function setContratoPuntajeHasta($ContratoPuntajeHasta_){ $this->ContratoPuntajeHasta=$ContratoPuntajeHasta_;}
public function getContratoPuntajeHasta(){ return $this->ContratoPuntajeHasta;}
public function setContratoFecha($ContratoFecha_){ $this->ContratoFecha=$ContratoFecha_;}
public function getContratoFecha(){ return $this->ContratoFecha;}
public function setContratoFechaEmbarque($ContratoFechaEmbarque_){ $this->ContratoFechaEmbarque=$ContratoFechaEmbarque_;}
public function getContratoFechaEmbarque(){ return $this->ContratoFechaEmbarque;}
public function setContratoStatus($ContratoStatus_){ $this->ContratoStatus=$ContratoStatus_;}
public function getContratoStatus(){ return $this->ContratoStatus;}
public function setContratoPosicion($ContratoPosicion_){ $this->ContratoPosicion=$ContratoPosicion_;}
public function getContratoPosicion(){ return $this->ContratoPosicion;}
public function setContratoPrecioBolsa($ContratoPrecioBolsa_){ $this->ContratoPrecioBolsa=$ContratoPrecioBolsa_;}
public function getContratoPrecioBolsa(){ return $this->ContratoPrecioBolsa;}
public function setContratoNumeroFactura($ContratoNumeroFactura_){ $this->ContratoNumeroFactura=$ContratoNumeroFactura_;}
public function getContratoNumeroFactura(){ return $this->ContratoNumeroFactura;}
public function setContratoValorFod($ContratoValorFod_){ $this->ContratoValorFod=$ContratoValorFod_;}
public function getContratoValorFod(){ return $this->ContratoValorFod;}
public function setContratoPuertoEmbarque($ContratoPuertoEmbarque_){ $this->ContratoPuertoEmbarque=$ContratoPuertoEmbarque_;}
public function getContratoPuertoEmbarque(){ return $this->ContratoPuertoEmbarque;}
public function setContratoPuertoDestino($ContratoPuertoDestino_){ $this->ContratoPuertoDestino=$ContratoPuertoDestino_;}
public function getContratoPuertoDestino(){ return $this->ContratoPuertoDestino;}
public function setContratoHumedad($ContratoHumedad_){ $this->ContratoHumedad=$ContratoHumedad_;}
public function getContratoHumedad(){ return $this->ContratoHumedad;}
public function setContratoCantidadQuintales($ContratoCantidadQuintales_){ $this->ContratoCantidadQuintales=$ContratoCantidadQuintales_;}
public function getContratoCantidadQuintales(){ return $this->ContratoCantidadQuintales;}
public function setContratoToneladas($ContratoToneladas_){ $this->ContratoToneladas=$ContratoToneladas_;}
public function getContratoToneladas(){ return $this->ContratoToneladas;}
public function setContratoNotas($ContratoNotas_){ $this->ContratoNotas=$ContratoNotas_;}
public function getContratoNotas(){ return $this->ContratoNotas;}
public function setContratoEstado($ContratoEstado_){ $this->ContratoEstado=$ContratoEstado_;}
public function getContratoEstado(){ return $this->ContratoEstado;}
public function setClienteId($ClienteId_){ $this->ClienteId=$ClienteId_;}
public function getClienteId(){ return $this->ClienteId;}
public function setTipoContratoId($TipoContratoId_){ $this->TipoContratoId=$TipoContratoId_;}
public function getTipoContratoId(){ return $this->TipoContratoId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}
//Métodos
//Método Insertar
public function Insertar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into contrato values('$this->ContratoId','$this->ContratoNumero','$this->ContratoCantidadSacos','$this->ContratoKGxSaco','$this->ContratoPuntajeDesde','$this->ContratoPuntajeHasta','$this->ContratoFecha','$this->ContratoFechaEmbarque','$this->ContratoStatus','$this->ContratoPosicion','$this->ContratoPrecioBolsa','$this->ContratoNumeroFactura','$this->ContratoValorFod','$this->ContratoPuertoEmbarque','$this->ContratoPuertoDestino','$this->ContratoHumedad','$this->ContratoCantidadQuintales','$this->ContratoToneladas','$this->ContratoNotas','$this->ContratoEstado','$this->ClienteId','$this->TipoContratoId','$this->PeriodoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_contrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select contrato.ContratoId As 'ContratoId',contrato.ContratoNumero As 'Numero',contrato.ContratoCantidadSacos As 'CantidadSacos',contrato.ContratoKGxSaco As 'KG x Saco',contrato.ContratoPuntajeDesde As 'Puntaje Desde',contrato.ContratoPuntajeHasta As 'Puntaje Hasta',contrato.ContratoFecha As 'Fecha',contrato.ContratoFechaEmbarque As 'Fecha Embarque',contrato.ContratoStatus As 'Status',contrato.ContratoPosicion As 'Posicion',contrato.ContratoPrecioBolsa As 'Precio Bolsa',contrato.ContratoNumeroFactura As 'NumeroFactura',contrato.ContratoValorFod As 'ValorFod',contrato.ContratoPuertoEmbarque As 'Puerto Embarque',contrato.ContratoPuertoDestino As 'Puerto Destino',contrato.ContratoHumedad As 'Humedad',contrato.ContratoCantidadQuintales As 'Cantidad Quintales',contrato.ContratoToneladas As 'Toneladas',contrato.ContratoNotas As 'Notas',contrato.ContratoEstado As 'Estado',contrato.ClienteId As 'ClienteId',contrato.TipoContratoId As 'TipoContratoId',contrato.PeriodoId As 'PeriodoId' from contrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_contrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from contrato where ContratoId='$this->ContratoId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_contrato(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from contrato";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update contrato set Estado='E' where ContratoId='$this->ContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update contrato set estado='A' where ContratoId='$this->ContratoId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_contrato(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update contrato set ContratoNumero='$this->ContratoNumero',ContratoCantidadSacos='$this->ContratoCantidadSacos',ContratoKGxSaco='$this->ContratoKGxSaco',ContratoPuntajeDesde='$this->ContratoPuntajeDesde',ContratoPuntajeHasta='$this->ContratoPuntajeHasta',ContratoFecha='$this->ContratoFecha',ContratoFechaEmbarque='$this->ContratoFechaEmbarque',ContratoStatus='$this->ContratoStatus',ContratoPosicion='$this->ContratoPosicion',ContratoPrecioBolsa='$this->ContratoPrecioBolsa',ContratoNumeroFactura='$this->ContratoNumeroFactura',ContratoValorFod='$this->ContratoValorFod',ContratoPuertoEmbarque='$this->ContratoPuertoEmbarque',ContratoPuertoDestino='$this->ContratoPuertoDestino',ContratoHumedad='$this->ContratoHumedad',ContratoCantidadQuintales='$this->ContratoCantidadQuintales',ContratoToneladas='$this->ContratoToneladas',ContratoNotas='$this->ContratoNotas',ContratoEstado='$this->ContratoEstado',ClienteId='$this->ClienteId',TipoContratoId='$this->TipoContratoId',PeriodoId='$this->PeriodoId' where ContratoId='$this->ContratoId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>