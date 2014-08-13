<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clscuentacorriente extends ClsConexion {
# Método Insertar
public function Set_cuentacorriente($bean_cuentacorriente)
{
$cCtaCteRecibo = $bean_cuentacorriente->getcCtaCteRecibo();
$nPerCtaCodigo = $bean_cuentacorriente->getnPerCtaCodigo();
$nCtaCteTipo = $bean_cuentacorriente->getnCtaCteTipo();
$nCtaCteItem = $bean_cuentacorriente->getnCtaCteItem();
$fCtaCteImporte = $bean_cuentacorriente->getfCtaCteImporte();
$nCtaCteCuota = $bean_cuentacorriente->getnCtaCteCuota();
$nCtaCteEstado = $bean_cuentacorriente->getnCtaCteEstado();
$dCtaCteFecVence = $bean_cuentacorriente->getdCtaCteFecVence();
$dCtaCteFecPago = $bean_cuentacorriente->getdCtaCteFecPago();
$dCtaCteFecEmis = $bean_cuentacorriente->getdCtaCteFecEmis();
$dCtaCteFecRegistro = $bean_cuentacorriente->getdCtaCteFecRegistro();
$cCtaCteGlosa = $bean_cuentacorriente->getcCtaCteGlosa();
$nPrdCodigo = $bean_cuentacorriente->getnPrdCodigo();
$nMonCodigo = $bean_cuentacorriente->getnMonCodigo();

$this->query = "CALL usp_Set_cuentacorriente('$cCtaCteRecibo','$nPerCtaCodigo','$nCtaCteTipo','$nCtaCteItem','$fCtaCteImporte','$nCtaCteCuota','$nCtaCteEstado','$dCtaCteFecVence','$dCtaCteFecPago','$dCtaCteFecEmis','$dCtaCteFecRegistro','$cCtaCteGlosa','$nPrdCodigo','$nMonCodigo')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
//Método Actualizar
public function Upd_cuentacorriente($bean_cuentacorriente)
{
$cCtaCteRecibo = $bean_cuentacorriente->getcCtaCteRecibo();
$nPerCtaCodigo = $bean_cuentacorriente->getnPerCtaCodigo();
$nCtaCteTipo = $bean_cuentacorriente->getnCtaCteTipo();
$nCtaCteItem = $bean_cuentacorriente->getnCtaCteItem();
$fCtaCteImporte = $bean_cuentacorriente->getfCtaCteImporte();
$nCtaCteCuota = $bean_cuentacorriente->getnCtaCteCuota();
$nCtaCteEstado = $bean_cuentacorriente->getnCtaCteEstado();
$dCtaCteFecVence = $bean_cuentacorriente->getdCtaCteFecVence();
$dCtaCteFecPago = $bean_cuentacorriente->getdCtaCteFecPago();
$dCtaCteFecEmis = $bean_cuentacorriente->getdCtaCteFecEmis();
$dCtaCteFecRegistro = $bean_cuentacorriente->getdCtaCteFecRegistro();
$cCtaCteGlosa = $bean_cuentacorriente->getcCtaCteGlosa();
$nPrdCodigo = $bean_cuentacorriente->getnPrdCodigo();
$nMonCodigo = $bean_cuentacorriente->getnMonCodigo();

$this->query = "CALL usp_Upd_cuentacorriente('$cCtaCteRecibo','$nPerCtaCodigo','$nCtaCteTipo','$nCtaCteItem','$fCtaCteImporte','$nCtaCteCuota','$nCtaCteEstado','$dCtaCteFecVence','$dCtaCteFecPago','$dCtaCteFecEmis','$dCtaCteFecRegistro','$cCtaCteGlosa','$nPrdCodigo','$nMonCodigo')";
$this->execute_query();
$data = $this->rows ;

}
//Método Eliminar(Actualizar Estado)
public function Upd_cuentacorriente_Estado($bean_cuentacorriente)
{
$cCtaCteRecibo = $bean_cuentacorriente->getcCtaCteRecibo();
$nMonCodigo = $bean_cuentacorriente->getnMonCodigo();

$this->query = "CALL usp_Set_cuentacorriente('$cCtaCteRecibo','$nMonCodigo')";
$this->execute_query();
$data = $this->rows ;
}
//Método Buscar por ID
public function Get_cuentacorriente_by_cCtaCteRecibo($bean_cuentacorriente)
{
$cCtaCteRecibo = $bean_cuentacorriente->getcCtaCteRecibo();

$this->query = "CALL usp_Set_cuentacorriente('$cCtaCteRecibo')";
$this->execute_query();
$data = $this->rows ;
}
}
?>