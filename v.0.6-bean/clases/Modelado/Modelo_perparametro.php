<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_perparametro{
//Constructor
public function Clase_perparametro(){}
//Atributos
private $cPerCodigo;
private $nParCodigo;
private $nParClase;
private $nPerParValor;
private $cPerParGlosa;
private $nPerParEstado;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnParCodigo($nParCodigo_){ $this->nParCodigo=$nParCodigo_;}
public function getnParCodigo(){ return $this->nParCodigo;}
public function setnParClase($nParClase_){ $this->nParClase=$nParClase_;}
public function getnParClase(){ return $this->nParClase;}
public function setnPerParValor($nPerParValor_){ $this->nPerParValor=$nPerParValor_;}
public function getnPerParValor(){ return $this->nPerParValor;}
public function setcPerParGlosa($cPerParGlosa_){ $this->cPerParGlosa=$cPerParGlosa_;}
public function getcPerParGlosa(){ return $this->cPerParGlosa;}
public function setnPerParEstado($nPerParEstado_){ $this->nPerParEstado=$nPerParEstado_;}
public function getnPerParEstado(){ return $this->nPerParEstado;}
//Métodos
//Método Insertar
public function Insertar_perparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into perparametro values('$this->cPerCodigo','$this->nParCodigo','$this->nParClase','$this->nPerParValor','$this->cPerParGlosa','$this->nPerParEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_perparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select perparametro.cPerCodigo As 'cPerCodigo',perparametro.nParCodigo As 'nParCodigo',perparametro.nParClase As 'nParClase',perparametro.nPerParValor As 'nPerParValor',perparametro.cPerParGlosa As 'cPerParGlosa',perparametro.nPerParEstado As 'nPerParEstado' from perparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_perparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perparametro WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_perparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM perparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_perparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perparametro SET perparametroEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_perparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perparametro SET perparametroEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_perparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE perparametro SET nParCodigo='$this->nParCodigo',nParClase='$this->nParClase',nPerParValor='$this->nPerParValor',cPerParGlosa='$this->cPerParGlosa',nPerParEstado='$this->nPerParEstado' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>