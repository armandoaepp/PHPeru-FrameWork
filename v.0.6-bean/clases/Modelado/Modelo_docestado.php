<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docestado{
//Constructor
public function Clase_docestado(){}
//Atributos
private $cDocCodigo;
private $nDocParCodigo;
private $nDocParClase;
private $dDocEstFecha;
private $cDocEstGlosa;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setnDocParCodigo($nDocParCodigo_){ $this->nDocParCodigo=$nDocParCodigo_;}
public function getnDocParCodigo(){ return $this->nDocParCodigo;}
public function setnDocParClase($nDocParClase_){ $this->nDocParClase=$nDocParClase_;}
public function getnDocParClase(){ return $this->nDocParClase;}
public function setdDocEstFecha($dDocEstFecha_){ $this->dDocEstFecha=$dDocEstFecha_;}
public function getdDocEstFecha(){ return $this->dDocEstFecha;}
public function setcDocEstGlosa($cDocEstGlosa_){ $this->cDocEstGlosa=$cDocEstGlosa_;}
public function getcDocEstGlosa(){ return $this->cDocEstGlosa;}
//Métodos
//Método Insertar
public function Insertar_docestado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docestado values('$this->cDocCodigo','$this->nDocParCodigo','$this->nDocParClase','$this->dDocEstFecha','$this->cDocEstGlosa')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docestado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docestado.cDocCodigo As 'cDocCodigo',docestado.nDocParCodigo As 'nDocParCodigo',docestado.nDocParClase As 'nDocParClase',docestado.dDocEstFecha As 'dDocEstFecha',docestado.cDocEstGlosa As 'cDocEstGlosa' from docestado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docestado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docestado WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docestado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docestado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docestado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docestado SET docestadoEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docestado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docestado SET docestadoEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docestado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docestado SET nDocParCodigo='$this->nDocParCodigo',nDocParClase='$this->nDocParClase',dDocEstFecha='$this->dDocEstFecha',cDocEstGlosa='$this->cDocEstGlosa' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>