<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docperparametro{
//Constructor
public function Clase_docperparametro(){}
//Atributos
private $cDocCodigo;
private $cPerCodigo;
private $nParCodigo;
private $nParClase;
private $cDocPerParValor;
private $cDocPerParGlosa;
private $nDocPerParEstado;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnParCodigo($nParCodigo_){ $this->nParCodigo=$nParCodigo_;}
public function getnParCodigo(){ return $this->nParCodigo;}
public function setnParClase($nParClase_){ $this->nParClase=$nParClase_;}
public function getnParClase(){ return $this->nParClase;}
public function setcDocPerParValor($cDocPerParValor_){ $this->cDocPerParValor=$cDocPerParValor_;}
public function getcDocPerParValor(){ return $this->cDocPerParValor;}
public function setcDocPerParGlosa($cDocPerParGlosa_){ $this->cDocPerParGlosa=$cDocPerParGlosa_;}
public function getcDocPerParGlosa(){ return $this->cDocPerParGlosa;}
public function setnDocPerParEstado($nDocPerParEstado_){ $this->nDocPerParEstado=$nDocPerParEstado_;}
public function getnDocPerParEstado(){ return $this->nDocPerParEstado;}
//Métodos
//Método Insertar
public function Insertar_docperparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docperparametro values('$this->cDocCodigo','$this->cPerCodigo','$this->nParCodigo','$this->nParClase','$this->cDocPerParValor','$this->cDocPerParGlosa','$this->nDocPerParEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docperparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docperparametro.cDocCodigo As 'cDocCodigo',docperparametro.cPerCodigo As 'cPerCodigo',docperparametro.nParCodigo As 'nParCodigo',docperparametro.nParClase As 'nParClase',docperparametro.cDocPerParValor As 'cDocPerParValor',docperparametro.cDocPerParGlosa As 'cDocPerParGlosa',docperparametro.nDocPerParEstado As 'nDocPerParEstado' from docperparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docperparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docperparametro WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docperparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docperparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docperparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docperparametro SET docperparametroEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docperparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docperparametro SET docperparametroEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docperparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docperparametro SET cPerCodigo='$this->cPerCodigo',nParCodigo='$this->nParCodigo',nParClase='$this->nParClase',cDocPerParValor='$this->cDocPerParValor',cDocPerParGlosa='$this->cDocPerParGlosa',nDocPerParEstado='$this->nDocPerParEstado' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>