<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_parimagen{
//Constructor
public function Clase_parimagen(){}
//Atributos
private $nParCodigo;
private $nParClase;
private $nParImgTipo;
private $cParImgRuta;
private $cParImgGlosa;
private $nParImgEstado;
//Propiedades
public function setnParCodigo($nParCodigo_){ $this->nParCodigo=$nParCodigo_;}
public function getnParCodigo(){ return $this->nParCodigo;}
public function setnParClase($nParClase_){ $this->nParClase=$nParClase_;}
public function getnParClase(){ return $this->nParClase;}
public function setnParImgTipo($nParImgTipo_){ $this->nParImgTipo=$nParImgTipo_;}
public function getnParImgTipo(){ return $this->nParImgTipo;}
public function setcParImgRuta($cParImgRuta_){ $this->cParImgRuta=$cParImgRuta_;}
public function getcParImgRuta(){ return $this->cParImgRuta;}
public function setcParImgGlosa($cParImgGlosa_){ $this->cParImgGlosa=$cParImgGlosa_;}
public function getcParImgGlosa(){ return $this->cParImgGlosa;}
public function setnParImgEstado($nParImgEstado_){ $this->nParImgEstado=$nParImgEstado_;}
public function getnParImgEstado(){ return $this->nParImgEstado;}
//Métodos
//Método Insertar
public function Insertar_parimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into parimagen values('$this->nParCodigo','$this->nParClase','$this->nParImgTipo','$this->cParImgRuta','$this->cParImgGlosa','$this->nParImgEstado')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_parimagen(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select parimagen.nParCodigo As 'nParCodigo',parimagen.nParClase As 'nParClase',parimagen.nParImgTipo As 'nParImgTipo',parimagen.cParImgRuta As 'cParImgRuta',parimagen.cParImgGlosa As 'cParImgGlosa',parimagen.nParImgEstado As 'nParImgEstado' from parimagen";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_parimagen(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parimagen WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_parimagen(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM parimagen";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_parimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parimagen SET parimagenEstado='E' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_parimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parimagen SET parimagenEstado='A' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_parimagen(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE parimagen SET nParClase='$this->nParClase',nParImgTipo='$this->nParImgTipo',cParImgRuta='$this->cParImgRuta',cParImgGlosa='$this->cParImgGlosa',nParImgEstado='$this->nParImgEstado' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>