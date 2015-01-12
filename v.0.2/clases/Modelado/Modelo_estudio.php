<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_estudio{
//Constructor
public function Clase_estudio(){}
//Atributos
private $ID_ESTUDIO;
private $EMPLEADO_DNI;
private $UNIVERSIDAD;
private $AÑO;
private $GRADO;
private $ESPECIALIDAD;
//Propiedades
public function setID_ESTUDIO($ID_ESTUDIO_){ $this->ID_ESTUDIO=$ID_ESTUDIO_;}
public function getID_ESTUDIO(){ return $this->ID_ESTUDIO;}
public function setEMPLEADO_DNI($EMPLEADO_DNI_){ $this->EMPLEADO_DNI=$EMPLEADO_DNI_;}
public function getEMPLEADO_DNI(){ return $this->EMPLEADO_DNI;}
public function setUNIVERSIDAD($UNIVERSIDAD_){ $this->UNIVERSIDAD=$UNIVERSIDAD_;}
public function getUNIVERSIDAD(){ return $this->UNIVERSIDAD;}
public function setAÑO($AÑO_){ $this->AÑO=$AÑO_;}
public function getAÑO(){ return $this->AÑO;}
public function setGRADO($GRADO_){ $this->GRADO=$GRADO_;}
public function getGRADO(){ return $this->GRADO;}
public function setESPECIALIDAD($ESPECIALIDAD_){ $this->ESPECIALIDAD=$ESPECIALIDAD_;}
public function getESPECIALIDAD(){ return $this->ESPECIALIDAD;}
//Métodos
//Método Insertar
public function Insertar_estudio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into estudio values('$this->ID_ESTUDIO','$this->EMPLEADO_DNI','$this->UNIVERSIDAD','$this->AÑO','$this->GRADO','$this->ESPECIALIDAD')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_estudio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select estudio.ID_ESTUDIO As 'ID_ESTUDIO',estudio.EMPLEADO_DNI As 'EMPLEADO_DNI',estudio.UNIVERSIDAD As 'UNIVERSIDAD',estudio.AÑO As 'AÑO',estudio.GRADO As 'GRADO',estudio.ESPECIALIDAD As 'ESPECIALIDAD' from estudio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_estudio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from estudio where ID_ESTUDIO='$this->ID_ESTUDIO'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_estudio(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from estudio";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_estudio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update estudio set Estado='E' where ID_ESTUDIO='$this->ID_ESTUDIO'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_estudio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update estudio set estado='A' where ID_ESTUDIO='$this->ID_ESTUDIO'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_estudio(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update estudio set EMPLEADO_DNI='$this->EMPLEADO_DNI',UNIVERSIDAD='$this->UNIVERSIDAD',AÑO='$this->AÑO',GRADO='$this->GRADO',ESPECIALIDAD='$this->ESPECIALIDAD' where ID_ESTUDIO='$this->ID_ESTUDIO'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>