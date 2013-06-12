<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_serie{
//Constructor
public function Clase_serie(){}
//Atributos
private $SerieId;
private $SerieNumero;
private $SerieInicio;
private $SerieFin;
private $SerieFechaReg;
private $SerieEstado;
private $UsuarioId;
private $PeriodoId;
//Propiedades
public function setSerieId($SerieId_){ $this->SerieId=$SerieId_;}
public function getSerieId(){ return $this->SerieId;}
public function setSerieNumero($SerieNumero_){ $this->SerieNumero=$SerieNumero_;}
public function getSerieNumero(){ return $this->SerieNumero;}
public function setSerieInicio($SerieInicio_){ $this->SerieInicio=$SerieInicio_;}
public function getSerieInicio(){ return $this->SerieInicio;}
public function setSerieFin($SerieFin_){ $this->SerieFin=$SerieFin_;}
public function getSerieFin(){ return $this->SerieFin;}
public function setSerieFechaReg($SerieFechaReg_){ $this->SerieFechaReg=$SerieFechaReg_;}
public function getSerieFechaReg(){ return $this->SerieFechaReg;}
public function setSerieEstado($SerieEstado_){ $this->SerieEstado=$SerieEstado_;}
public function getSerieEstado(){ return $this->SerieEstado;}
public function setUsuarioId($UsuarioId_){ $this->UsuarioId=$UsuarioId_;}
public function getUsuarioId(){ return $this->UsuarioId;}
public function setPeriodoId($PeriodoId_){ $this->PeriodoId=$PeriodoId_;}
public function getPeriodoId(){ return $this->PeriodoId;}
//Métodos
//Método Insertar
public function Insertar_serie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into serie values('$this->SerieId','$this->SerieNumero','$this->SerieInicio','$this->SerieFin','$this->SerieFechaReg','$this->SerieEstado','$this->UsuarioId','$this->PeriodoId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_serie(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select serie.SerieId As 'SerieId',serie.SerieNumero As 'Numero Serie',serie.SerieInicio As 'Serie Inicio',serie.SerieFin As 'Serie Fin',serie.SerieFechaReg As 'Serie FechaReg',serie.SerieEstado As 'Estado',serie.UsuarioId As 'UsuarioId',serie.PeriodoId As 'PeriodoId' from serie";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_serie(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from serie where SerieId='$this->SerieId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_serie(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from serie";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_serie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update serie set Estado='E' where SerieId='$this->SerieId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_serie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update serie set estado='A' where SerieId='$this->SerieId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_serie(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update serie set SerieNumero='$this->SerieNumero',SerieInicio='$this->SerieInicio',SerieFin='$this->SerieFin',SerieFechaReg='$this->SerieFechaReg',SerieEstado='$this->SerieEstado',UsuarioId='$this->UsuarioId',PeriodoId='$this->PeriodoId' where SerieId='$this->SerieId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>