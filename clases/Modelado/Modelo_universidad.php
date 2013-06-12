<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_universidad{
//Constructor
public function Clase_universidad(){}
//Atributos
private $ID_UNIVERSIDAD;
private $UNIV_COD;
private $NOMBRE_UNIV;
private $CIUDAD;
private $MUNICIPIO;
private $COD_POSTAL;
//Propiedades
public function setID_UNIVERSIDAD($ID_UNIVERSIDAD_){ $this->ID_UNIVERSIDAD=$ID_UNIVERSIDAD_;}
public function getID_UNIVERSIDAD(){ return $this->ID_UNIVERSIDAD;}
public function setUNIV_COD($UNIV_COD_){ $this->UNIV_COD=$UNIV_COD_;}
public function getUNIV_COD(){ return $this->UNIV_COD;}
public function setNOMBRE_UNIV($NOMBRE_UNIV_){ $this->NOMBRE_UNIV=$NOMBRE_UNIV_;}
public function getNOMBRE_UNIV(){ return $this->NOMBRE_UNIV;}
public function setCIUDAD($CIUDAD_){ $this->CIUDAD=$CIUDAD_;}
public function getCIUDAD(){ return $this->CIUDAD;}
public function setMUNICIPIO($MUNICIPIO_){ $this->MUNICIPIO=$MUNICIPIO_;}
public function getMUNICIPIO(){ return $this->MUNICIPIO;}
public function setCOD_POSTAL($COD_POSTAL_){ $this->COD_POSTAL=$COD_POSTAL_;}
public function getCOD_POSTAL(){ return $this->COD_POSTAL;}
//Métodos
//Método Insertar
public function Insertar_universidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into universidad values('$this->ID_UNIVERSIDAD','$this->UNIV_COD','$this->NOMBRE_UNIV','$this->CIUDAD','$this->MUNICIPIO','$this->COD_POSTAL')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_universidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select universidad.ID_UNIVERSIDAD As 'ID_UNIVERSIDAD',universidad.UNIV_COD As 'UNIV_COD',universidad.NOMBRE_UNIV As 'NOMBRE_UNIV',universidad.CIUDAD As 'CIUDAD',universidad.MUNICIPIO As 'MUNICIPIO',universidad.COD_POSTAL As 'COD_POSTAL' from universidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_universidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from universidad where ID_UNIVERSIDAD='$this->ID_UNIVERSIDAD'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_universidad(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from universidad";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_universidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update universidad set Estado='E' where ID_UNIVERSIDAD='$this->ID_UNIVERSIDAD'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_universidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update universidad set estado='A' where ID_UNIVERSIDAD='$this->ID_UNIVERSIDAD'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_universidad(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update universidad set UNIV_COD='$this->UNIV_COD',NOMBRE_UNIV='$this->NOMBRE_UNIV',CIUDAD='$this->CIUDAD',MUNICIPIO='$this->MUNICIPIO',COD_POSTAL='$this->COD_POSTAL' where ID_UNIVERSIDAD='$this->ID_UNIVERSIDAD'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>