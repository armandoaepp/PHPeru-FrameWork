<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_proyecto{
//Constructor
public function Clase_proyecto(){}
//Atributos
private $Proyectoid;
private $ProyectoNombre;
private $ProyectoDescripcion;
private $ProyectoFechaInicio;
private $ProyectoDuracion;
private $ProyectoFechaTermino;
private $ProyectoCoordinador;
private $ProyectoNombreArchivo;
private $ProyectoOrgFinancia;
private $ProyectoMonto;
private $ProyectoEstado;
//Propiedades
public function setProyectoid($Proyectoid_){ $this->Proyectoid=$Proyectoid_;}
public function getProyectoid(){ return $this->Proyectoid;}
public function setProyectoNombre($ProyectoNombre_){ $this->ProyectoNombre=$ProyectoNombre_;}
public function getProyectoNombre(){ return $this->ProyectoNombre;}
public function setProyectoDescripcion($ProyectoDescripcion_){ $this->ProyectoDescripcion=$ProyectoDescripcion_;}
public function getProyectoDescripcion(){ return $this->ProyectoDescripcion;}
public function setProyectoFechaInicio($ProyectoFechaInicio_){ $this->ProyectoFechaInicio=$ProyectoFechaInicio_;}
public function getProyectoFechaInicio(){ return $this->ProyectoFechaInicio;}
public function setProyectoDuracion($ProyectoDuracion_){ $this->ProyectoDuracion=$ProyectoDuracion_;}
public function getProyectoDuracion(){ return $this->ProyectoDuracion;}
public function setProyectoFechaTermino($ProyectoFechaTermino_){ $this->ProyectoFechaTermino=$ProyectoFechaTermino_;}
public function getProyectoFechaTermino(){ return $this->ProyectoFechaTermino;}
public function setProyectoCoordinador($ProyectoCoordinador_){ $this->ProyectoCoordinador=$ProyectoCoordinador_;}
public function getProyectoCoordinador(){ return $this->ProyectoCoordinador;}
public function setProyectoNombreArchivo($ProyectoNombreArchivo_){ $this->ProyectoNombreArchivo=$ProyectoNombreArchivo_;}
public function getProyectoNombreArchivo(){ return $this->ProyectoNombreArchivo;}
public function setProyectoOrgFinancia($ProyectoOrgFinancia_){ $this->ProyectoOrgFinancia=$ProyectoOrgFinancia_;}
public function getProyectoOrgFinancia(){ return $this->ProyectoOrgFinancia;}
public function setProyectoMonto($ProyectoMonto_){ $this->ProyectoMonto=$ProyectoMonto_;}
public function getProyectoMonto(){ return $this->ProyectoMonto;}
public function setProyectoEstado($ProyectoEstado_){ $this->ProyectoEstado=$ProyectoEstado_;}
public function getProyectoEstado(){ return $this->ProyectoEstado;}
//Métodos
//Método Insertar
/*
Pasos
	1. conectar
	2. crear sql (consulta)
	3. ejectar sql
	4. devolver respuesta (datos )
 */
public function Insertar_proyecto(){
$rpta;
try{
// incluimos la conexion
include_once 'conexion.php';
// instanciar la conecion 
$con=new Conexion(); // variable que contiene el objeto conexion
// crear la consulta SQL
$consulta="Insert into proyecto values('$this->Proyectoid','$this->ProyectoNombre','$this->ProyectoDescripcion','$this->ProyectoFechaInicio','$this->ProyectoDuracion','$this->ProyectoFechaTermino','$this->ProyectoCoordinador','$this->ProyectoNombreArchivo','$this->ProyectoOrgFinancia','$this->ProyectoMonto','$this->ProyectoEstado')";
$rpta=$con->MetodoRegistrar($consulta);
// ejecutar la consulta
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
 // devolver la respuesta
return $rpta;
}
//Método Listar
public function Listar_proyecto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select proyecto.Proyectoid As 'Proyectoid',proyecto.ProyectoNombre As 'Nombre',proyecto.ProyectoDescripcion As 'Descripcion',proyecto.ProyectoFechaInicio As 'FechaInicio',proyecto.ProyectoDuracion As 'Duracion',proyecto.ProyectoFechaTermino As 'Fecha Termino',proyecto.ProyectoCoordinador As 'Coordinador',proyecto.ProyectoNombreArchivo As 'Nombre Archivo',proyecto.ProyectoOrgFinancia As 'Org. Financia',proyecto.ProyectoMonto As 'Monto' from proyecto where proyecto.ProyectoEstado='A'  ";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_proyecto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from proyecto where Proyectoid='$this->Proyectoid'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_proyecto(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "select * from proyecto";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_proyecto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update proyecto set ProyectoEstado='E' where Proyectoid='$this->Proyectoid'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_proyecto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update proyecto set estado='A' where Proyectoid='$this->Proyectoid'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_proyecto(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Update proyecto set ProyectoNombre='$this->ProyectoNombre',ProyectoDescripcion='$this->ProyectoDescripcion',ProyectoFechaInicio='$this->ProyectoFechaInicio',ProyectoDuracion='$this->ProyectoDuracion',ProyectoFechaTermino='$this->ProyectoFechaTermino',ProyectoCoordinador='$this->ProyectoCoordinador',ProyectoNombreArchivo='$this->ProyectoNombreArchivo',ProyectoOrgFinancia='$this->ProyectoOrgFinancia',ProyectoMonto='$this->ProyectoMonto',ProyectoEstado='$this->ProyectoEstado' where Proyectoid='$this->Proyectoid'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>