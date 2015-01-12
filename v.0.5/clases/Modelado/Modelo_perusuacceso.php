<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perusuacceso{
//Constructor
public function Clase_perusuacceso(){}
//Atributos
private $cPerCodigo;
private $nPerUsuAccGrupo;
private $nPerUsuAccTipo;
private $nPerUsuAccObjCodigo;
private $nPerUsuAccCodigo;
private $nPerUsuAccPrdCodigo;
private $nPerUsuAccEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnPerUsuAccGrupo($nPerUsuAccGrupo_){ $this->nPerUsuAccGrupo=$nPerUsuAccGrupo_;}
public function getnPerUsuAccGrupo(){ return $this->nPerUsuAccGrupo;}
public function setnPerUsuAccTipo($nPerUsuAccTipo_){ $this->nPerUsuAccTipo=$nPerUsuAccTipo_;}
public function getnPerUsuAccTipo(){ return $this->nPerUsuAccTipo;}
public function setnPerUsuAccObjCodigo($nPerUsuAccObjCodigo_){ $this->nPerUsuAccObjCodigo=$nPerUsuAccObjCodigo_;}
public function getnPerUsuAccObjCodigo(){ return $this->nPerUsuAccObjCodigo;}
public function setnPerUsuAccCodigo($nPerUsuAccCodigo_){ $this->nPerUsuAccCodigo=$nPerUsuAccCodigo_;}
public function getnPerUsuAccCodigo(){ return $this->nPerUsuAccCodigo;}
public function setnPerUsuAccPrdCodigo($nPerUsuAccPrdCodigo_){ $this->nPerUsuAccPrdCodigo=$nPerUsuAccPrdCodigo_;}
public function getnPerUsuAccPrdCodigo(){ return $this->nPerUsuAccPrdCodigo;}
public function setnPerUsuAccEstado($nPerUsuAccEstado_){ $this->nPerUsuAccEstado=$nPerUsuAccEstado_;}
public function getnPerUsuAccEstado(){ return $this->nPerUsuAccEstado;}
//Métodos
//Método Insertar
public function Insertar_perusuacceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perusuacceso values('$this->cPerCodigo','$this->nPerUsuAccGrupo','$this->nPerUsuAccTipo','$this->nPerUsuAccObjCodigo','$this->nPerUsuAccCodigo','$this->nPerUsuAccPrdCodigo','$this->nPerUsuAccEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perusuacceso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perusuacceso.cPerCodigo As 'cPerCodigo',perusuacceso.nPerUsuAccGrupo As 'nPerUsuAccGrupo',perusuacceso.nPerUsuAccTipo As 'nPerUsuAccTipo',perusuacceso.nPerUsuAccObjCodigo As 'nPerUsuAccObjCodigo',perusuacceso.nPerUsuAccCodigo As 'nPerUsuAccCodigo',perusuacceso.nPerUsuAccPrdCodigo As 'nPerUsuAccPrdCodigo',perusuacceso.nPerUsuAccEstado As 'nPerUsuAccEstado' from perusuacceso";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perusuacceso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perusuacceso WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perusuacceso(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perusuacceso";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perusuacceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perusuacceso SET perusuaccesoEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perusuacceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perusuacceso SET perusuaccesoEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perusuacceso(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perusuacceso SET nPerUsuAccGrupo='$this->nPerUsuAccGrupo',nPerUsuAccTipo='$this->nPerUsuAccTipo',nPerUsuAccObjCodigo='$this->nPerUsuAccObjCodigo',nPerUsuAccCodigo='$this->nPerUsuAccCodigo',nPerUsuAccPrdCodigo='$this->nPerUsuAccPrdCodigo',nPerUsuAccEstado='$this->nPerUsuAccEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>