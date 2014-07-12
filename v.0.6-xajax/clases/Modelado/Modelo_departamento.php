<?php 
/* Clase Generada desde Cix -PHP - Creado por @EPP */
class Clase_departamento{
//Constructor
public function Clase_departamento(){}
//Atributos
private $DepartamentoId;
private $DepartamentoNombre;
private $PaisId;
private $UbigeoDepa;
//Propiedades
public function setDepartamentoId($DepartamentoId_){ $this->DepartamentoId=$DepartamentoId_;}
public function getDepartamentoId(){ return $this->DepartamentoId;}
public function setDepartamentoNombre($DepartamentoNombre_){ $this->DepartamentoNombre=$DepartamentoNombre_;}
public function getDepartamentoNombre(){ return $this->DepartamentoNombre;}
public function setPaisId($PaisId_){ $this->PaisId=$PaisId_;}
public function getPaisId(){ return $this->PaisId;}
public function setUbigeoDepa($UbigeoDepa_){ $this->UbigeoDepa=$UbigeoDepa_;}
public function getUbigeoDepa(){ return $this->UbigeoDepa;}
//Métodos
//Método Listar
public function Listar_departamento(){
$rpta=array();
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="Select departamento.DepartamentoId As 'DepartamentoId',departamento.DepartamentoNombre As 'DepartamentoNombre',departamento.PaisId As 'PaisId',departamento.UbigeoDepa As 'UbigeoDepa' from departamento";
    $rpta=$con->Listar($consulta);
}catch(exception $e){
     $rpta=$e->getMessage();
}
return $rpta;
}
//Método Insertar
public function Insertar_departamento(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="Insert into departamento values('$this->DepartamentoId','$this->DepartamentoNombre','$this->PaisId','$this->UbigeoDepa')";
    $rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Actualizar
public function Actualizar_departamento(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="UPDATE departamento SET DepartamentoNombre='$this->DepartamentoNombre',PaisId='$this->PaisId',UbigeoDepa='$this->UbigeoDepa' WHERE DepartamentoId='$this->DepartamentoId'";
    $rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Buscar por ID
public function Buscar_departamento(){
$rpta=array();
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta= "SELECT * FROM departamento WHERE DepartamentoId='$this->DepartamentoId'";
    $rpta=$con->Listar($consulta);
}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_departamento(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="UPDATE departamento SET departamentoEstado='E' WHERE DepartamentoId='$this->DepartamentoId'";
    $rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Recuperar
public function Recuperar_departamento(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="UPDATE departamento SET departamentoEstado='A' WHERE DepartamentoId='$this->DepartamentoId'";
    $rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Listar
public function ListadoSimple_departamento(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
    $consulta= "SELECT * FROM departamento";
    $rpta=$con->Listar($consulta);
}catch(exception $e){
     $rpta=$e->getMessage();
}
return $rpta;
}
//Método Eliminar En serie (Actualizar Estado)
public function Eliminar_Serie_departamento(){
$rpta;
try{
$ids=$this->getDepartamentoId();
 if(count($ids)>0){
    include_once 'conexion.php';
    $cnx=$con->conectar();
   // Start la transaccion
    $cnx->autocommit(false);
    $consulta="UPDATE departamento SET departamentoEstado='E' WHERE DepartamentoId=? ; ";
    $preparesql = $cnx->prepare($consulta);
    foreach($ids as $indice => $valor){
        $preparesql->bind_param("i", $valor);
         $preparesql->execute();
    }
    // ejecutamos la transaccion
    $cnx->commit();
    // numero de filas afectadas
    $rpta=$cnx->affected_rows;
    $cnx->close();
 }
}catch(exception $e){
    // si hay algun error deshacemos la transaccion
    $con->rollback();
    $con->close();
    $rpta=$e->getMessage();
}
return $rpta;
}

}
?>