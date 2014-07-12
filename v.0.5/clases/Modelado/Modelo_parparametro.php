<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_parparametro{
//Constructor
public function Clase_parparametro(){}
//Atributos
private $nParSrcCodigo;
private $nParSrcClase;
private $nParDstCodigo;
private $nParDstClase;
private $cValor;
private $nParParEstado;
//Propiedades
public function setnParSrcCodigo($nParSrcCodigo_){ $this->nParSrcCodigo=$nParSrcCodigo_;}
public function getnParSrcCodigo(){ return $this->nParSrcCodigo;}
public function setnParSrcClase($nParSrcClase_){ $this->nParSrcClase=$nParSrcClase_;}
public function getnParSrcClase(){ return $this->nParSrcClase;}
public function setnParDstCodigo($nParDstCodigo_){ $this->nParDstCodigo=$nParDstCodigo_;}
public function getnParDstCodigo(){ return $this->nParDstCodigo;}
public function setnParDstClase($nParDstClase_){ $this->nParDstClase=$nParDstClase_;}
public function getnParDstClase(){ return $this->nParDstClase;}
public function setcValor($cValor_){ $this->cValor=$cValor_;}
public function getcValor(){ return $this->cValor;}
public function setnParParEstado($nParParEstado_){ $this->nParParEstado=$nParParEstado_;}
public function getnParParEstado(){ return $this->nParParEstado;}
//Métodos
//Método Insertar
public function Insertar_parparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into parparametro values('$this->nParSrcCodigo','$this->nParSrcClase','$this->nParDstCodigo','$this->nParDstClase','$this->cValor','$this->nParParEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parparametro.nParSrcCodigo As 'nParSrcCodigo',parparametro.nParSrcClase As 'nParSrcClase',parparametro.nParDstCodigo As 'nParDstCodigo',parparametro.nParDstClase As 'nParDstClase',parparametro.cValor As 'cValor',parparametro.nParParEstado As 'nParParEstado' from parparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parparametro WHERE nParSrcCodigo='$this->nParSrcCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_parparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parparametro SET parparametroEstado='E' WHERE nParSrcCodigo='$this->nParSrcCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_parparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parparametro SET parparametroEstado='A' WHERE nParSrcCodigo='$this->nParSrcCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parparametro SET nParSrcClase='$this->nParSrcClase',nParDstCodigo='$this->nParDstCodigo',nParDstClase='$this->nParDstClase',cValor='$this->cValor',nParParEstado='$this->nParParEstado' WHERE nParSrcCodigo='$this->nParSrcCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>