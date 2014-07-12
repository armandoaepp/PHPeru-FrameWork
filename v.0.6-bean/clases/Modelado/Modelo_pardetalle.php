<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_pardetalle{
//Constructor
public function Clase_pardetalle(){}
//Atributos
private $nParCodigo;
private $nParClase;
private $nParItem;
private $nParItemS;
private $cParDetValor;
private $cParDetGlosa;
//Propiedades
public function setnParCodigo($nParCodigo_){ $this->nParCodigo=$nParCodigo_;}
public function getnParCodigo(){ return $this->nParCodigo;}
public function setnParClase($nParClase_){ $this->nParClase=$nParClase_;}
public function getnParClase(){ return $this->nParClase;}
public function setnParItem($nParItem_){ $this->nParItem=$nParItem_;}
public function getnParItem(){ return $this->nParItem;}
public function setnParItemS($nParItemS_){ $this->nParItemS=$nParItemS_;}
public function getnParItemS(){ return $this->nParItemS;}
public function setcParDetValor($cParDetValor_){ $this->cParDetValor=$cParDetValor_;}
public function getcParDetValor(){ return $this->cParDetValor;}
public function setcParDetGlosa($cParDetGlosa_){ $this->cParDetGlosa=$cParDetGlosa_;}
public function getcParDetGlosa(){ return $this->cParDetGlosa;}
//Métodos
//Método Insertar
public function Insertar_pardetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into pardetalle values('$this->nParCodigo','$this->nParClase','$this->nParItem','$this->nParItemS','$this->cParDetValor','$this->cParDetGlosa')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_pardetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select pardetalle.nParCodigo As 'nParCodigo',pardetalle.nParClase As 'nParClase',pardetalle.nParItem As 'nParItem',pardetalle.nParItemS As 'nParItemS',pardetalle.cParDetValor As 'cParDetValor',pardetalle.cParDetGlosa As 'cParDetGlosa' from pardetalle";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pardetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pardetalle WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_pardetalle(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM pardetalle";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pardetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pardetalle SET pardetalleEstado='E' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_pardetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pardetalle SET pardetalleEstado='A' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_pardetalle(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE pardetalle SET nParClase='$this->nParClase',nParItem='$this->nParItem',nParItemS='$this->nParItemS',cParDetValor='$this->cParDetValor',cParDetGlosa='$this->cParDetGlosa' WHERE nParCodigo='$this->nParCodigo'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>