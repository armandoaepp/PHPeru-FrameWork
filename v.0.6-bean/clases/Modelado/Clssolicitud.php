<?php 
/* Clase Generada desde PlaneaTec-PHP - Creado por @armandaepp */
class Clssolicitud extends ClsConexion {
# Método Insertar
public function Set_solicitud($bean_solicitud)
{
$idsolicitud = $bean_solicitud->getidsolicitud();
$fecha_ini = $bean_solicitud->getfecha_ini();
$fecha_fin = $bean_solicitud->getfecha_fin();
$peso = $bean_solicitud->getpeso();
$volumen = $bean_solicitud->getvolumen();
$direccion_origen = $bean_solicitud->getdireccion_origen();
$direccion_destino = $bean_solicitud->getdireccion_destino();
$puntuacion = $bean_solicitud->getpuntuacion();
$importe = $bean_solicitud->getimporte();
$comision = $bean_solicitud->getcomision();
$estado = $bean_solicitud->getestado();
$fechareg = $bean_solicitud->getfechareg();
$idusuario = $bean_solicitud->getidusuario();
$tipopago = $bean_solicitud->gettipopago();
$tipotiempo = $bean_solicitud->gettipotiempo();
$cantiempo = $bean_solicitud->getcantiempo();
$ubigeo_origen = $bean_solicitud->getubigeo_origen();
$ubigeo_destino = $bean_solicitud->getubigeo_destino();
$idoperador = $bean_solicitud->getidoperador();
$descripcion = $bean_solicitud->getdescripcion();
$idproducto = $bean_solicitud->getidproducto();
$idvehiculo = $bean_solicitud->getidvehiculo();
$oferta_inicial = $bean_solicitud->getoferta_inicial();
$urgente = $bean_solicitud->geturgente();

$this->query = "CALL usp_Set_solicitud('$idsolicitud','$fecha_ini','$fecha_fin','$peso','$volumen','$direccion_origen','$direccion_destino','$puntuacion','$importe','$comision','$estado','$fechareg','$idusuario','$tipopago','$tipotiempo','$cantiempo','$ubigeo_origen','$ubigeo_destino','$idoperador','$descripcion','$idproducto','$idvehiculo','$oferta_inicial','$urgente')";
$this->execute_query();
$data = $this->rows ;
return $data;

}
# Método Actualizar
public function Upd_solicitud($bean_solicitud)
{
$idsolicitud = $bean_solicitud->getidsolicitud();
$fecha_ini = $bean_solicitud->getfecha_ini();
$fecha_fin = $bean_solicitud->getfecha_fin();
$peso = $bean_solicitud->getpeso();
$volumen = $bean_solicitud->getvolumen();
$direccion_origen = $bean_solicitud->getdireccion_origen();
$direccion_destino = $bean_solicitud->getdireccion_destino();
$puntuacion = $bean_solicitud->getpuntuacion();
$importe = $bean_solicitud->getimporte();
$comision = $bean_solicitud->getcomision();
$estado = $bean_solicitud->getestado();
$fechareg = $bean_solicitud->getfechareg();
$idusuario = $bean_solicitud->getidusuario();
$tipopago = $bean_solicitud->gettipopago();
$tipotiempo = $bean_solicitud->gettipotiempo();
$cantiempo = $bean_solicitud->getcantiempo();
$ubigeo_origen = $bean_solicitud->getubigeo_origen();
$ubigeo_destino = $bean_solicitud->getubigeo_destino();
$idoperador = $bean_solicitud->getidoperador();
$descripcion = $bean_solicitud->getdescripcion();
$idproducto = $bean_solicitud->getidproducto();
$idvehiculo = $bean_solicitud->getidvehiculo();
$oferta_inicial = $bean_solicitud->getoferta_inicial();
$urgente = $bean_solicitud->geturgente();

$this->query = "CALL usp_Upd_solicitud('$idsolicitud','$fecha_ini','$fecha_fin','$peso','$volumen','$direccion_origen','$direccion_destino','$puntuacion','$importe','$comision','$estado','$fechareg','$idusuario','$tipopago','$tipotiempo','$cantiempo','$ubigeo_origen','$ubigeo_destino','$idoperador','$descripcion','$idproducto','$idvehiculo','$oferta_inicial','$urgente')";
$this->execute_query();
$data = $this->rows ;

}
# Método Eliminar(Actualizar Estado)
public function Upd_solicitud_Estado($bean_solicitud)
{
$idsolicitud = $bean_solicitud->getidsolicitud();
$urgente = $bean_solicitud->geturgente();

$this->query = "CALL usp_Set_solicitud('$idsolicitud','$urgente')";
$this->execute_query();
$data = $this->rows ;
}
# Método Buscar por ID
public function Get_solicitud_by_idsolicitud($bean_solicitud)
{
$idsolicitud = $bean_solicitud->getidsolicitud();

$this->query = "CALL usp_Set_solicitud('$idsolicitud')";
$this->execute_query();
$data = $this->rows ;
}
}
?>