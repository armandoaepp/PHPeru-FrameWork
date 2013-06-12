<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_empleado{
//Constructor
public function Clase_empleado(){}
//Atributos
private $ID_EMPLEADOS;
private $DNI;
private $NOMBRE;
private $APELLIDO1;
private $APELLIDO2;
private $DIRECC1;
private $DIRECC2;
private $CIUDAD;
private $MUNICIPIO;
private $COD_POSTAL;
private $SEXO;
private $FECHA_NAC;
//Propiedades
public function setID_EMPLEADOS($ID_EMPLEADOS_){ $this->ID_EMPLEADOS=$ID_EMPLEADOS_;}
public function getID_EMPLEADOS(){ return $this->ID_EMPLEADOS;}
public function setDNI($DNI_){ $this->DNI=$DNI_;}
public function getDNI(){ return $this->DNI;}
public function setNOMBRE($NOMBRE_){ $this->NOMBRE=$NOMBRE_;}
public function getNOMBRE(){ return $this->NOMBRE;}
public function setAPELLIDO1($APELLIDO1_){ $this->APELLIDO1=$APELLIDO1_;}
public function getAPELLIDO1(){ return $this->APELLIDO1;}
public function setAPELLIDO2($APELLIDO2_){ $this->APELLIDO2=$APELLIDO2_;}
public function getAPELLIDO2(){ return $this->APELLIDO2;}
public function setDIRECC1($DIRECC1_){ $this->DIRECC1=$DIRECC1_;}
public function getDIRECC1(){ return $this->DIRECC1;}
public function setDIRECC2($DIRECC2_){ $this->DIRECC2=$DIRECC2_;}
public function getDIRECC2(){ return $this->DIRECC2;}
public function setCIUDAD($CIUDAD_){ $this->CIUDAD=$CIUDAD_;}
public function getCIUDAD(){ return $this->CIUDAD;}
public function setMUNICIPIO($MUNICIPIO_){ $this->MUNICIPIO=$MUNICIPIO_;}
public function getMUNICIPIO(){ return $this->MUNICIPIO;}
public function setCOD_POSTAL($COD_POSTAL_){ $this->COD_POSTAL=$COD_POSTAL_;}
public function getCOD_POSTAL(){ return $this->COD_POSTAL;}
public function setSEXO($SEXO_){ $this->SEXO=$SEXO_;}
public function getSEXO(){ return $this->SEXO;}
public function setFECHA_NAC($FECHA_NAC_){ $this->FECHA_NAC=$FECHA_NAC_;}
public function getFECHA_NAC(){ return $this->FECHA_NAC;}
//Métodos
//Método Insertar
public function Insertar_empleado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into empleado values('$this->ID_EMPLEADOS','$this->DNI','$this->NOMBRE','$this->APELLIDO1','$this->APELLIDO2','$this->DIRECC1','$this->DIRECC2','$this->CIUDAD','$this->MUNICIPIO','$this->COD_POSTAL','$this->SEXO','$this->FECHA_NAC')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_empleado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select empleado.ID_EMPLEADOS As 'ID_EMPLEADOS',empleado.DNI As 'DNI',empleado.NOMBRE As 'NOMBRE',empleado.APELLIDO1 As 'APELLIDO1',empleado.APELLIDO2 As 'APELLIDO2',empleado.DIRECC1 As 'DIRECC1',empleado.DIRECC2 As 'DIRECC2',empleado.CIUDAD As 'CIUDAD',empleado.MUNICIPIO As 'MUNICIPIO',empleado.COD_POSTAL As 'COD_POSTAL',empleado.SEXO As 'SEXO',empleado.FECHA_NAC As 'FECHA_NAC' from empleado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_empleado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from empleado where ID_EMPLEADOS='$this->ID_EMPLEADOS'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_empleado(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from empleado";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_empleado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update empleado set Estado='E' where ID_EMPLEADOS='$this->ID_EMPLEADOS'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_empleado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update empleado set estado='A' where ID_EMPLEADOS='$this->ID_EMPLEADOS'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_empleado(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update empleado set DNI='$this->DNI',NOMBRE='$this->NOMBRE',APELLIDO1='$this->APELLIDO1',APELLIDO2='$this->APELLIDO2',DIRECC1='$this->DIRECC1',DIRECC2='$this->DIRECC2',CIUDAD='$this->CIUDAD',MUNICIPIO='$this->MUNICIPIO',COD_POSTAL='$this->COD_POSTAL',SEXO='$this->SEXO',FECHA_NAC='$this->FECHA_NAC' where ID_EMPLEADOS='$this->ID_EMPLEADOS'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>