<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clstipopago extends ClsConexion {
# Método Insertar
public function set_tipopago($bean_tipopago)
{
$id_tipo_pago = $bean_tipopago->getId_tipo_pago();
$tipo_pago = $bean_tipopago->getTipo_pago();
$estado = $bean_tipopago->getEstado();

$this->query = "CALL usp_set_tipopago('$id_tipo_pago','$tipo_pago','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_tipopago($bean_tipopago)
{
$id_tipo_pago = $bean_tipopago->getId_tipo_pago();
$tipo_pago = $bean_tipopago->getTipo_pago();
$estado = $bean_tipopago->getEstado();

$this->query = "CALL usp_upd_tipopago('$id_tipo_pago','$tipo_pago','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_tipopago_Estado($bean_tipopago)
{
$id_tipo_pago = $bean_tipopago->getId_tipo_pago();
$estado = $bean_tipopago->getEstado();

$this->query = "CALL usp_upd_tipopago_Estado('$id_tipo_pago','$estado')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_tipopago_by_id_tipo_pago($bean_tipopago)
{
$id_tipo_pago = $bean_tipopago->getId_tipo_pago();

$this->query = "CALL usp_get_tipopago_by_id_tipo_pago('$id_tipo_pago')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>