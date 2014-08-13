<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clsctactepago extends ClsConexion {
# Método Insertar
public function Set_ctactepago($bean_ctactepago)
{
$cCtaCteRecibo = $bean_ctactepago->getcCtaCteRecibo();
$nCtaCtePagCodigo = $bean_ctactepago->getnCtaCtePagCodigo();
$cPerCodigo = $bean_ctactepago->getcPerCodigo();
$nPerCtaCodigo = $bean_ctactepago->getnPerCtaCodigo();
$nTurno = $bean_ctactepago->getnTurno();
$nForPago = $bean_ctactepago->getnForPago();
$nTipPago = $bean_ctactepago->getnTipPago();
$cCtaCtePagNroOperacion = $bean_ctactepago->getcCtaCtePagNroOperacion();
$dCtaCtePagfecha = $bean_ctactepago->getdCtaCtePagfecha();
$CtaCtePagGlosa = $bean_ctactepago->getCtaCtePagGlosa();
$fCtaCtePagImporte = $bean_ctactepago->getfCtaCtePagImporte();

$this->query = "CALL usp_Set_ctactepago('$cCtaCteRecibo','$nCtaCtePagCodigo','$cPerCodigo','$nPerCtaCodigo','$nTurno','$nForPago','$nTipPago','$cCtaCtePagNroOperacion','$dCtaCtePagfecha','$CtaCtePagGlosa','$fCtaCtePagImporte')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
//Método Actualizar
public function Upd_ctactepago($bean_ctactepago)
{
$cCtaCteRecibo = $bean_ctactepago->getcCtaCteRecibo();
$nCtaCtePagCodigo = $bean_ctactepago->getnCtaCtePagCodigo();
$cPerCodigo = $bean_ctactepago->getcPerCodigo();
$nPerCtaCodigo = $bean_ctactepago->getnPerCtaCodigo();
$nTurno = $bean_ctactepago->getnTurno();
$nForPago = $bean_ctactepago->getnForPago();
$nTipPago = $bean_ctactepago->getnTipPago();
$cCtaCtePagNroOperacion = $bean_ctactepago->getcCtaCtePagNroOperacion();
$dCtaCtePagfecha = $bean_ctactepago->getdCtaCtePagfecha();
$CtaCtePagGlosa = $bean_ctactepago->getCtaCtePagGlosa();
$fCtaCtePagImporte = $bean_ctactepago->getfCtaCtePagImporte();

$this->query = "CALL usp_Upd_ctactepago('$cCtaCteRecibo','$nCtaCtePagCodigo','$cPerCodigo','$nPerCtaCodigo','$nTurno','$nForPago','$nTipPago','$cCtaCtePagNroOperacion','$dCtaCtePagfecha','$CtaCtePagGlosa','$fCtaCtePagImporte')";
$this->execute_query();
$data = $this->rows ;

}
//Método Eliminar(Actualizar Estado)
public function Upd_ctactepago_Estado($bean_ctactepago)
{
$cCtaCteRecibo = $bean_ctactepago->getcCtaCteRecibo();
$fCtaCtePagImporte = $bean_ctactepago->getfCtaCtePagImporte();

$this->query = "CALL usp_Set_ctactepago('$cCtaCteRecibo','$fCtaCtePagImporte')";
$this->execute_query();
$data = $this->rows ;
}
//Método Buscar por ID
public function Get_ctactepago_by_cCtaCteRecibo($bean_ctactepago)
{
$cCtaCteRecibo = $bean_ctactepago->getcCtaCteRecibo();

$this->query = "CALL usp_Set_ctactepago('$cCtaCteRecibo')";
$this->execute_query();
$data = $this->rows ;
}
}
?>