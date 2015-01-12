<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docrefdestino{
//Constructor
public function Clase_docrefdestino(){}
//Atributos
private $cDocCodigo;
private $cLugarOrigen;
private $nOrigTipo;
private $cOrigDireccion;
private $cOrigManz;
private $cOrigLote;
private $nOrigTipoRes;
private $cOrigResidencia;
private $cLugarDestino;
private $nDestTipo;
private $cDestDireccion;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setcLugarOrigen($cLugarOrigen_){ $this->cLugarOrigen=$cLugarOrigen_;}
public function getcLugarOrigen(){ return $this->cLugarOrigen;}
public function setnOrigTipo($nOrigTipo_){ $this->nOrigTipo=$nOrigTipo_;}
public function getnOrigTipo(){ return $this->nOrigTipo;}
public function setcOrigDireccion($cOrigDireccion_){ $this->cOrigDireccion=$cOrigDireccion_;}
public function getcOrigDireccion(){ return $this->cOrigDireccion;}
public function setcOrigManz($cOrigManz_){ $this->cOrigManz=$cOrigManz_;}
public function getcOrigManz(){ return $this->cOrigManz;}
public function setcOrigLote($cOrigLote_){ $this->cOrigLote=$cOrigLote_;}
public function getcOrigLote(){ return $this->cOrigLote;}
public function setnOrigTipoRes($nOrigTipoRes_){ $this->nOrigTipoRes=$nOrigTipoRes_;}
public function getnOrigTipoRes(){ return $this->nOrigTipoRes;}
public function setcOrigResidencia($cOrigResidencia_){ $this->cOrigResidencia=$cOrigResidencia_;}
public function getcOrigResidencia(){ return $this->cOrigResidencia;}
public function setcLugarDestino($cLugarDestino_){ $this->cLugarDestino=$cLugarDestino_;}
public function getcLugarDestino(){ return $this->cLugarDestino;}
public function setnDestTipo($nDestTipo_){ $this->nDestTipo=$nDestTipo_;}
public function getnDestTipo(){ return $this->nDestTipo;}
public function setcDestDireccion($cDestDireccion_){ $this->cDestDireccion=$cDestDireccion_;}
public function getcDestDireccion(){ return $this->cDestDireccion;}
//Métodos
//Método Insertar
public function Insertar_docrefdestino(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docrefdestino values('$this->cDocCodigo','$this->cLugarOrigen','$this->nOrigTipo','$this->cOrigDireccion','$this->cOrigManz','$this->cOrigLote','$this->nOrigTipoRes','$this->cOrigResidencia','$this->cLugarDestino','$this->nDestTipo','$this->cDestDireccion')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docrefdestino(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docrefdestino.cDocCodigo As 'cDocCodigo',docrefdestino.cLugarOrigen As 'cLugarOrigen',docrefdestino.nOrigTipo As 'nOrigTipo',docrefdestino.cOrigDireccion As 'cOrigDireccion',docrefdestino.cOrigManz As 'cOrigManz',docrefdestino.cOrigLote As 'cOrigLote',docrefdestino.nOrigTipoRes As 'nOrigTipoRes',docrefdestino.cOrigResidencia As 'cOrigResidencia',docrefdestino.cLugarDestino As 'cLugarDestino',docrefdestino.nDestTipo As 'nDestTipo',docrefdestino.cDestDireccion As 'cDestDireccion' from docrefdestino";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docrefdestino(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docrefdestino WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docrefdestino(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docrefdestino";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docrefdestino(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docrefdestino SET docrefdestinoEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docrefdestino(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docrefdestino SET docrefdestinoEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docrefdestino(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docrefdestino SET cLugarOrigen='$this->cLugarOrigen',nOrigTipo='$this->nOrigTipo',cOrigDireccion='$this->cOrigDireccion',cOrigManz='$this->cOrigManz',cOrigLote='$this->cOrigLote',nOrigTipoRes='$this->nOrigTipoRes',cOrigResidencia='$this->cOrigResidencia',cLugarDestino='$this->cLugarDestino',nDestTipo='$this->nDestTipo',cDestDireccion='$this->cDestDireccion' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>