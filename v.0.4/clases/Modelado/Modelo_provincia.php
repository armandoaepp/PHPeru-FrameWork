<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_provincia{
//Constructor
public function Clase_provincia(){}
//Atributos
private $ProvinciaId;
private $ProvinciaNombre;
private $DepartamentoId;
private $ubigeoProv;
//Propiedades
public function setProvinciaId($ProvinciaId_){ $this->ProvinciaId=$ProvinciaId_;}
public function getProvinciaId(){ return $this->ProvinciaId;}
public function setProvinciaNombre($ProvinciaNombre_){ $this->ProvinciaNombre=$ProvinciaNombre_;}
public function getProvinciaNombre(){ return $this->ProvinciaNombre;}
public function setDepartamentoId($DepartamentoId_){ $this->DepartamentoId=$DepartamentoId_;}
public function getDepartamentoId(){ return $this->DepartamentoId;}
public function setubigeoProv($ubigeoProv_){ $this->ubigeoProv=$ubigeoProv_;}
public function getubigeoProv(){ return $this->ubigeoProv;}
//Métodos
//Método Insertar
public function Insertar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into provincia values('$this->ProvinciaId','$this->ProvinciaNombre','$this->DepartamentoId','$this->ubigeoProv')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_provincia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select provincia.ProvinciaId As 'ProvinciaId',provincia.ProvinciaNombre As 'ProvinciaNombre',provincia.DepartamentoId As 'DepartamentoId',provincia.ubigeoProv As 'ubigeoProv' from provincia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_provincia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM provincia WHERE ProvinciaId='$this->ProvinciaId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_provincia(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM provincia";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE provincia SET provinciaEstado='E' WHERE ProvinciaId='$this->ProvinciaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE provincia SET provinciaEstado='A' WHERE ProvinciaId='$this->ProvinciaId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_provincia(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE provincia SET ProvinciaNombre='$this->ProvinciaNombre',DepartamentoId='$this->DepartamentoId',ubigeoProv='$this->ubigeoProv' WHERE ProvinciaId='$this->ProvinciaId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>