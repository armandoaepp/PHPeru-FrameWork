<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_doccontenido{
//Constructor
public function Clase_doccontenido(){}
//Atributos
private $cDocCodigo;
private $nDocParCodigo;
private $nDocParClase;
private $cDocConContenido;
private $nDocConEstado;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setnDocParCodigo($nDocParCodigo_){ $this->nDocParCodigo=$nDocParCodigo_;}
public function getnDocParCodigo(){ return $this->nDocParCodigo;}
public function setnDocParClase($nDocParClase_){ $this->nDocParClase=$nDocParClase_;}
public function getnDocParClase(){ return $this->nDocParClase;}
public function setcDocConContenido($cDocConContenido_){ $this->cDocConContenido=$cDocConContenido_;}
public function getcDocConContenido(){ return $this->cDocConContenido;}
public function setnDocConEstado($nDocConEstado_){ $this->nDocConEstado=$nDocConEstado_;}
public function getnDocConEstado(){ return $this->nDocConEstado;}
//Métodos
//Método Insertar
public function Insertar_doccontenido(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into doccontenido values('$this->cDocCodigo','$this->nDocParCodigo','$this->nDocParClase','$this->cDocConContenido','$this->nDocConEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_doccontenido(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select doccontenido.cDocCodigo As 'cDocCodigo',doccontenido.nDocParCodigo As 'nDocParCodigo',doccontenido.nDocParClase As 'nDocParClase',doccontenido.cDocConContenido As 'cDocConContenido',doccontenido.nDocConEstado As 'nDocConEstado' from doccontenido";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_doccontenido(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM doccontenido WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_doccontenido(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM doccontenido";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_doccontenido(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE doccontenido SET doccontenidoEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_doccontenido(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE doccontenido SET doccontenidoEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_doccontenido(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE doccontenido SET nDocParCodigo='$this->nDocParCodigo',nDocParClase='$this->nDocParClase',cDocConContenido='$this->cDocConContenido',nDocConEstado='$this->nDocConEstado' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>