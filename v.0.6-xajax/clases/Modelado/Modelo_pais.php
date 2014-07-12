<?php 
/* Clase Generada desde Cix -PHP - Creado por @EPP */
class Clase_pais{
//Constructor
public function Clase_pais(){}
//Atributos
private $PaisId;
private $PaisNombre;
//Propiedades
public function setPaisId($PaisId_){ $this->PaisId=$PaisId_;}
public function getPaisId(){ return $this->PaisId;}
public function setPaisNombre($PaisNombre_){ $this->PaisNombre=$PaisNombre_;}
public function getPaisNombre(){ return $this->PaisNombre;}
//Métodos
//Método Listar
public function Listar_pais(){
$rpta=array();
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="Select pais.PaisId As 'PaisId',pais.PaisNombre As 'PaisNombre' from pais";
    $rpta=$con->Listar($consulta);
}catch(exception $e){
     $rpta=$e->getMessage();
}
return $rpta;
}
//Método Insertar
public function Insertar_pais(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="Insert into pais values('$this->PaisId','$this->PaisNombre')";
    $rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Actualizar
public function Actualizar_pais(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="UPDATE pais SET PaisNombre='$this->PaisNombre' WHERE PaisId='$this->PaisId'";
    $rpta=$con->MetodoRegistrar($consulta);

}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Buscar por ID
public function Buscar_pais(){
$rpta=array();
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta= "SELECT * FROM pais WHERE PaisId='$this->PaisId'";
    $rpta=$con->Listar($consulta);
}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Eliminar(Actualizar Estado)
public function Eliminar_pais(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="UPDATE pais SET paisEstado='E' WHERE PaisId='$this->PaisId'";
    $rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Recuperar
public function Recuperar_pais(){
$rpta;
try{
    include_once 'conexion.php';
    $con=new Conexion();
    $consulta="UPDATE pais SET paisEstado='A' WHERE PaisId='$this->PaisId'";
    $rpta=$con->MetodoRegistrar($consulta);
}catch(exception $e){
    $rpta=$e->getMessage();
}
return $rpta;
}
//Método Listar
public function ListadoSimple_pais(){
$rpta=array();
try{
include_once 'conexion.php';
$con=new Conexion();
    $consulta= "SELECT * FROM pais";
    $rpta=$con->Listar($consulta);
}catch(exception $e){
     $rpta=$e->getMessage();
}
return $rpta;
}
//Método Eliminar En serie (Actualizar Estado)
public function Eliminar_Serie_pais(){
$rpta;
try{
$ids=$this->getPaisId();
 if(count($ids)>0){
    include_once 'conexion.php';
    $cnx=$con->conectar();
   // Start la transaccion
    $cnx->autocommit(false);
    $consulta="UPDATE pais SET paisEstado='E' WHERE PaisId=? ; '";
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