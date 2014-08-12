<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clscaserio extends ClsConexion {
# Método Insertar
public function Set_caserio($bean_caserio)
{
$nCasCodigo = $bean_caserio->getnCasCodigo;
$cCasDescripcion = $bean_caserio->getcCasDescripcion;
$nDisCodigo = $bean_caserio->getnDisCodigo;
$nCasEstado = $bean_caserio->getnCasEstado;

$this->query = "CALL usp_Set_caserio('$nCasCodigo','$cCasDescripcion','$nDisCodigo','$nCasEstado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
//Método Actualizar
public function Upd_caserio($bean_caserio)
{
$nCasCodigo = $bean_caserio->getnCasCodigo;
$cCasDescripcion = $bean_caserio->getcCasDescripcion;
$nDisCodigo = $bean_caserio->getnDisCodigo;
$nCasEstado = $bean_caserio->getnCasEstado;

$this->query = "CALL usp_Set_caserio('$nCasCodigo','$cCasDescripcion','$nDisCodigo','$nCasEstado')";
$this->execute_query();
$data = $this->rows ;

}
//Método Eliminar(Actualizar Estado)
public function Upd_caserio_Estado($bean_caserio)
{
$nCasCodigo = $bean_caserio->getnCasCodigo;
$nCasEstado = $bean_caserio->getnCasEstado;

$this->query = "CALL usp_Set_caserio('$nCasCodigo','$nCasEstado')";
$this->execute_query();
$data = $this->rows ;
}
//Método Buscar por ID
public function Get_caserioby_nCasCodigo($bean_caserio)
{
$nCasCodigo = $bean_caserio->getnCasCodigo;

$this->query = "CALL usp_Set_caserio('$nCasCodigo')";
$this->execute_query();
$data = $this->rows ;
}
}
?>