<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clspercuenta extends ClsConexion {
# Método Insertar
public function Set_percuenta($bean_percuenta)
{
$nPerCtaCodigo = $bean_percuenta->getnPerCtaCodigo();
$cPerCodigo = $bean_percuenta->getcPerCodigo();
$cNroCuenta = $bean_percuenta->getcNroCuenta();
$nPerCtaTipo = $bean_percuenta->getnPerCtaTipo();
$cPerJurCodigo = $bean_percuenta->getcPerJurCodigo();
$nMonCodigo = $bean_percuenta->getnMonCodigo();
$nPerCtaEstado = $bean_percuenta->getnPerCtaEstado();

$this->query = "CALL usp_Set_percuenta('$nPerCtaCodigo','$cPerCodigo','$cNroCuenta','$nPerCtaTipo','$cPerJurCodigo','$nMonCodigo','$nPerCtaEstado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
//Método Actualizar
public function Upd_percuenta($bean_percuenta)
{
$nPerCtaCodigo = $bean_percuenta->getnPerCtaCodigo();
$cPerCodigo = $bean_percuenta->getcPerCodigo();
$cNroCuenta = $bean_percuenta->getcNroCuenta();
$nPerCtaTipo = $bean_percuenta->getnPerCtaTipo();
$cPerJurCodigo = $bean_percuenta->getcPerJurCodigo();
$nMonCodigo = $bean_percuenta->getnMonCodigo();
$nPerCtaEstado = $bean_percuenta->getnPerCtaEstado();

$this->query = "CALL usp_Upd_percuenta('$nPerCtaCodigo','$cPerCodigo','$cNroCuenta','$nPerCtaTipo','$cPerJurCodigo','$nMonCodigo','$nPerCtaEstado')";
$this->execute_query();
$data = $this->rows ;

}
//Método Eliminar(Actualizar Estado)
public function Upd_percuenta_Estado($bean_percuenta)
{
$nPerCtaCodigo = $bean_percuenta->getnPerCtaCodigo();
$nPerCtaEstado = $bean_percuenta->getnPerCtaEstado();

$this->query = "CALL usp_Set_percuenta('$nPerCtaCodigo','$nPerCtaEstado')";
$this->execute_query();
$data = $this->rows ;
}
//Método Buscar por ID
public function Get_percuenta_by_nPerCtaCodigo($bean_percuenta)
{
$nPerCtaCodigo = $bean_percuenta->getnPerCtaCodigo();

$this->query = "CALL usp_Set_percuenta('$nPerCtaCodigo')";
$this->execute_query();
$data = $this->rows ;
}
}
?>