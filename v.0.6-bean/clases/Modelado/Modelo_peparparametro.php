<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_peparparametro{
//Constructor
public function Clase_peparparametro(){}
//Atributos
private $cPerCodigo;
private $nParSrcCodigo;
private $nParSrcClase;
private $nParDstCodigo;
private $nParDstClase;
private $cParParValor;
private $cParParGlosa;
//Propiedades
public function setcPerCodigo($cPerCodigo_){ $this->cPerCodigo=$cPerCodigo_;}
public function getcPerCodigo(){ return $this->cPerCodigo;}
public function setnParSrcCodigo($nParSrcCodigo_){ $this->nParSrcCodigo=$nParSrcCodigo_;}
public function getnParSrcCodigo(){ return $this->nParSrcCodigo;}
public function setnParSrcClase($nParSrcClase_){ $this->nParSrcClase=$nParSrcClase_;}
public function getnParSrcClase(){ return $this->nParSrcClase;}
public function setnParDstCodigo($nParDstCodigo_){ $this->nParDstCodigo=$nParDstCodigo_;}
public function getnParDstCodigo(){ return $this->nParDstCodigo;}
public function setnParDstClase($nParDstClase_){ $this->nParDstClase=$nParDstClase_;}
public function getnParDstClase(){ return $this->nParDstClase;}
public function setcParParValor($cParParValor_){ $this->cParParValor=$cParParValor_;}
public function getcParParValor(){ return $this->cParParValor;}
public function setcParParGlosa($cParParGlosa_){ $this->cParParGlosa=$cParParGlosa_;}
public function getcParParGlosa(){ return $this->cParParGlosa;}
//Métodos
//Método Insertar
public function Insertar_peparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into peparparametro values('$this->cPerCodigo','$this->nParSrcCodigo','$this->nParSrcClase','$this->nParDstCodigo','$this->nParDstClase','$this->cParParValor','$this->cParParGlosa')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_peparparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select peparparametro.cPerCodigo As 'cPerCodigo',peparparametro.nParSrcCodigo As 'nParSrcCodigo',peparparametro.nParSrcClase As 'nParSrcClase',peparparametro.nParDstCodigo As 'nParDstCodigo',peparparametro.nParDstClase As 'nParDstClase',peparparametro.cParParValor As 'cParParValor',peparparametro.cParParGlosa As 'cParParGlosa' from peparparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_peparparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM peparparametro WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_peparparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM peparparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_peparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE peparparametro SET peparparametroEstado='E' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_peparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE peparparametro SET peparparametroEstado='A' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_peparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE peparparametro SET nParSrcCodigo='$this->nParSrcCodigo',nParSrcClase='$this->nParSrcClase',nParDstCodigo='$this->nParDstCodigo',nParDstClase='$this->nParDstClase',cParParValor='$this->cParParValor',cParParGlosa='$this->cParParGlosa' WHERE cPerCodigo='$this->cPerCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>