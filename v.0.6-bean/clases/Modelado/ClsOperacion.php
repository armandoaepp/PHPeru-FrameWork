<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class ClsOperacion extends ClsConexion {
# CONSTRUCT 
public function __construct($cnx  = null)
{
$this->conn = $cnx;
}
# Método Insertar
public function set_operacion($bean_operacion)
{
$idoperacion = $bean_operacion->getIdoperacion();
$fecha = $bean_operacion->getFecha();
$fecha_transcli = $bean_operacion->getFecha_transcli();
$tipomov = $bean_operacion->getTipomov();
$monto_operacion = $bean_operacion->getMonto_operacion();
$idcuenta = $bean_operacion->getIdcuenta();
$idtipo_operacion = $bean_operacion->getIdtipo_operacion();
$estado_recarga = $bean_operacion->getEstado_recarga();
$idsolicitud = $bean_operacion->getIdsolicitud();
$idvehiculo = $bean_operacion->getIdvehiculo();
$iduser = $bean_operacion->getIduser();
$numorden = $bean_operacion->getNumorden();
$numtransac_sp = $bean_operacion->getNumtransac_sp();
$moneda = $bean_operacion->getMoneda();
$resul_transac = $bean_operacion->getResul_transac();
$cod_accion = $bean_operacion->getCod_accion();
$dato_comercio = $bean_operacion->getDato_comercio();
$mediopago = $bean_operacion->getMediopago();
$tiporesp = $bean_operacion->getTiporesp();
$cod_autoriz = $bean_operacion->getCod_autoriz();
$numrefer = $bean_operacion->getNumrefer();
$hash = $bean_operacion->getHash();
$tipoprod_sp = $bean_operacion->getTipoprod_sp();
$ntarjeta = $bean_operacion->getNtarjeta();
$tarjetahab_visa = $bean_operacion->getTarjetahab_visa();
$ipcompra = $bean_operacion->getIpcompra();

$this->query = "CALL usp_set_operacion('$idoperacion','$fecha','$fecha_transcli','$tipomov','$monto_operacion','$idcuenta','$idtipo_operacion','$estado_recarga','$idsolicitud','$idvehiculo','$iduser','$numorden','$numtransac_sp','$moneda','$resul_transac','$cod_accion','$dato_comercio','$mediopago','$tiporesp','$cod_autoriz','$numrefer','$hash','$tipoprod_sp','$ntarjeta','$tarjetahab_visa','$ipcompra')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function upd_operacion($bean_operacion)
{
$idoperacion = $bean_operacion->getIdoperacion();
$fecha = $bean_operacion->getFecha();
$fecha_transcli = $bean_operacion->getFecha_transcli();
$tipomov = $bean_operacion->getTipomov();
$monto_operacion = $bean_operacion->getMonto_operacion();
$idcuenta = $bean_operacion->getIdcuenta();
$idtipo_operacion = $bean_operacion->getIdtipo_operacion();
$estado_recarga = $bean_operacion->getEstado_recarga();
$idsolicitud = $bean_operacion->getIdsolicitud();
$idvehiculo = $bean_operacion->getIdvehiculo();
$iduser = $bean_operacion->getIduser();
$numorden = $bean_operacion->getNumorden();
$numtransac_sp = $bean_operacion->getNumtransac_sp();
$moneda = $bean_operacion->getMoneda();
$resul_transac = $bean_operacion->getResul_transac();
$cod_accion = $bean_operacion->getCod_accion();
$dato_comercio = $bean_operacion->getDato_comercio();
$mediopago = $bean_operacion->getMediopago();
$tiporesp = $bean_operacion->getTiporesp();
$cod_autoriz = $bean_operacion->getCod_autoriz();
$numrefer = $bean_operacion->getNumrefer();
$hash = $bean_operacion->getHash();
$tipoprod_sp = $bean_operacion->getTipoprod_sp();
$ntarjeta = $bean_operacion->getNtarjeta();
$tarjetahab_visa = $bean_operacion->getTarjetahab_visa();
$ipcompra = $bean_operacion->getIpcompra();

$this->query = "CALL usp_upd_operacion('$idoperacion','$fecha','$fecha_transcli','$tipomov','$monto_operacion','$idcuenta','$idtipo_operacion','$estado_recarga','$idsolicitud','$idvehiculo','$iduser','$numorden','$numtransac_sp','$moneda','$resul_transac','$cod_accion','$dato_comercio','$mediopago','$tiporesp','$cod_autoriz','$numrefer','$hash','$tipoprod_sp','$ntarjeta','$tarjetahab_visa','$ipcompra')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Eliminar(Actualizar Estado)
public function upd_operacion_estado($bean_operacion)
{
$idoperacion = $bean_operacion->getIdoperacion();
$ipcompra = $bean_operacion->getIpcompra();

$this->query = "CALL usp_upd_operacion_Estado('$idoperacion','$ipcompra')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método Buscar por ID
public function get_operacion_by_idoperacion($bean_operacion)
{
$idoperacion = $bean_operacion->getIdoperacion();

$this->query = "CALL usp_get_operacion_by_idoperacion('$idoperacion')";
$this->execute_query();
$data = $this->rows ;
return $data;
}
# Método get Seleccionar todos 
public function get_operacion()
{

$this->query = "CALL usp_get_operacion();$this->execute_query();
$data = $this->rows ;
return $data;
}
}
?>