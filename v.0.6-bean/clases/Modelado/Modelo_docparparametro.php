<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_docparparametro{
//Constructor
public function Clase_docparparametro(){}
//Atributos
private $cDocCodigo;
private $nParSrcCodigo;
private $nParSrcClase;
private $nParDstCodigo;
private $nParDstClase;
private $cParParValor;
private $cParParGlosa;
//Propiedades
public function setcDocCodigo($cDocCodigo_){ $this->cDocCodigo=$cDocCodigo_;}
public function getcDocCodigo(){ return $this->cDocCodigo;}
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
public function Insertar_docparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into docparparametro values('$this->cDocCodigo','$this->nParSrcCodigo','$this->nParSrcClase','$this->nParDstCodigo','$this->nParDstClase','$this->cParParValor','$this->cParParGlosa')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_docparparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select docparparametro.cDocCodigo As 'cDocCodigo',docparparametro.nParSrcCodigo As 'nParSrcCodigo',docparparametro.nParSrcClase As 'nParSrcClase',docparparametro.nParDstCodigo As 'nParDstCodigo',docparparametro.nParDstClase As 'nParDstClase',docparparametro.cParParValor As 'cParParValor',docparparametro.cParParGlosa As 'cParParGlosa' from docparparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_docparparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docparparametro WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_docparparametro(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM docparparametro";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_docparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docparparametro SET docparparametroEstado='E' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_docparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docparparametro SET docparparametroEstado='A' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_docparparametro(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE docparparametro SET nParSrcCodigo='$this->nParSrcCodigo',nParSrcClase='$this->nParSrcClase',nParDstCodigo='$this->nParDstCodigo',nParDstClase='$this->nParDstClase',cParParValor='$this->cParParValor',cParParGlosa='$this->cParParGlosa' WHERE cDocCodigo='$this->cDocCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>