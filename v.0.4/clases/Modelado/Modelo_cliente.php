<?php 
/* Clase Generada desde Cix-PHP - Creado por @EPP */
class Clase_cliente{
//Constructor
public function Clase_cliente(){}
//Atributos
private $ClienteId;
private $ClienteNombre;
private $ClienteRepresentante;
private $ClienteEmail;
private $ClienteFax;
private $ClienteDireccion;
private $ClienteCodigoPostal;
private $ClienteNota;
private $ClienteTelefono;
private $ClienteMovil;
private $PaisId;
//Propiedades
public function setClienteId($ClienteId_){ $this->ClienteId=$ClienteId_;}
public function getClienteId(){ return $this->ClienteId;}
public function setClienteNombre($ClienteNombre_){ $this->ClienteNombre=$ClienteNombre_;}
public function getClienteNombre(){ return $this->ClienteNombre;}
public function setClienteRepresentante($ClienteRepresentante_){ $this->ClienteRepresentante=$ClienteRepresentante_;}
public function getClienteRepresentante(){ return $this->ClienteRepresentante;}
public function setClienteEmail($ClienteEmail_){ $this->ClienteEmail=$ClienteEmail_;}
public function getClienteEmail(){ return $this->ClienteEmail;}
public function setClienteFax($ClienteFax_){ $this->ClienteFax=$ClienteFax_;}
public function getClienteFax(){ return $this->ClienteFax;}
public function setClienteDireccion($ClienteDireccion_){ $this->ClienteDireccion=$ClienteDireccion_;}
public function getClienteDireccion(){ return $this->ClienteDireccion;}
public function setClienteCodigoPostal($ClienteCodigoPostal_){ $this->ClienteCodigoPostal=$ClienteCodigoPostal_;}
public function getClienteCodigoPostal(){ return $this->ClienteCodigoPostal;}
public function setClienteNota($ClienteNota_){ $this->ClienteNota=$ClienteNota_;}
public function getClienteNota(){ return $this->ClienteNota;}
public function setClienteTelefono($ClienteTelefono_){ $this->ClienteTelefono=$ClienteTelefono_;}
public function getClienteTelefono(){ return $this->ClienteTelefono;}
public function setClienteMovil($ClienteMovil_){ $this->ClienteMovil=$ClienteMovil_;}
public function getClienteMovil(){ return $this->ClienteMovil;}
public function setPaisId($PaisId_){ $this->PaisId=$PaisId_;}
public function getPaisId(){ return $this->PaisId;}
//Métodos
//Método Insertar
public function Insertar_cliente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Insert into cliente values('$this->ClienteId','$this->ClienteNombre','$this->ClienteRepresentante','$this->ClienteEmail','$this->ClienteFax','$this->ClienteDireccion','$this->ClienteCodigoPostal','$this->ClienteNota','$this->ClienteTelefono','$this->ClienteMovil','$this->PaisId')";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function Listar_cliente(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="Select cliente.ClienteId As 'ClienteId',cliente.ClienteNombre As 'ClienteNombre',cliente.ClienteRepresentante As 'ClienteRepresentante',cliente.ClienteEmail As 'ClienteEmail',cliente.ClienteFax As 'ClienteFax',cliente.ClienteDireccion As 'ClienteDireccion',cliente.ClienteCodigoPostal As 'ClienteCodigoPostal',cliente.ClienteNota As 'ClienteNota',cliente.ClienteTelefono As 'ClienteTelefono',cliente.ClienteMovil As 'ClienteMovil',cliente.PaisId As 'PaisId' from cliente";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Buscar por ID
public function Buscar_cliente(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM cliente WHERE ClienteId='$this->ClienteId'";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Listar
public function ListadoSimple_cliente(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta= "SELECT * FROM cliente";
$rpta=$con->Listar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_cliente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE cliente SET clienteEstado='E' WHERE ClienteId='$this->ClienteId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Recuperar
public function Recuperar_cliente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE cliente SET clienteEstado='A' WHERE ClienteId='$this->ClienteId'";
$rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
//Método Actualizar
public function Actualizar_cliente(){
$rpta;
try{
include_once 'conexion.php';
$con=new Conexion();
$consulta="UPDATE cliente SET ClienteNombre='$this->ClienteNombre',ClienteRepresentante='$this->ClienteRepresentante',ClienteEmail='$this->ClienteEmail',ClienteFax='$this->ClienteFax',ClienteDireccion='$this->ClienteDireccion',ClienteCodigoPostal='$this->ClienteCodigoPostal',ClienteNota='$this->ClienteNota',ClienteTelefono='$this->ClienteTelefono',ClienteMovil='$this->ClienteMovil',PaisId='$this->PaisId' WHERE ClienteId='$this->ClienteId'";
$rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
 $rpta=$e->getMessage();}
return $rpta;
}
}
?>