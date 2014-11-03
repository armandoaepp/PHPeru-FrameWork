<?php
include_once "../../Modelado/Modelo_operacion.php"; 
include_once "../validacion.php"; 
function CRegistrar_operacion(){
$enoperacion=new Clase_operacion();
$enoperacion->setidoperacion(validar($_POST["idoperacion_"]));
$enoperacion->setfecha(validar($_POST["fecha_"]));
$enoperacion->setfecha_transcli(validar($_POST["fecha_transcli_"]));
$enoperacion->settipomov(validar($_POST["tipomov_"]));
$enoperacion->setmonto_operacion(validar($_POST["monto_operacion_"]));
$enoperacion->setidcuenta(validar($_POST["idcuenta_"]));
$enoperacion->setidtipo_operacion(validar($_POST["idtipo_operacion_"]));
$enoperacion->setestado_recarga(validar($_POST["estado_recarga_"]));
$enoperacion->setidsolicitud(validar($_POST["idsolicitud_"]));
$enoperacion->setidvehiculo(validar($_POST["idvehiculo_"]));
$enoperacion->setiduser(validar($_POST["iduser_"]));
$enoperacion->setnumorden(validar($_POST["numorden_"]));
$enoperacion->setnumtransac_sp(validar($_POST["numtransac_sp_"]));
$enoperacion->setmoneda(validar($_POST["moneda_"]));
$enoperacion->setresul_transac(validar($_POST["resul_transac_"]));
$enoperacion->setcod_accion(validar($_POST["cod_accion_"]));
$enoperacion->setdato_comercio(validar($_POST["dato_comercio_"]));
$enoperacion->setmediopago(validar($_POST["mediopago_"]));
$enoperacion->settiporesp(validar($_POST["tiporesp_"]));
$enoperacion->setcod_autoriz(validar($_POST["cod_autoriz_"]));
$enoperacion->setnumrefer(validar($_POST["numrefer_"]));
$enoperacion->sethash(validar($_POST["hash_"]));
$enoperacion->settipoprod_sp(validar($_POST["tipoprod_sp_"]));
$enoperacion->setntarjeta(validar($_POST["ntarjeta_"]));
$enoperacion->settarjetahab_visa(validar($_POST["tarjetahab_visa_"]));
$enoperacion->setipcompra(validar($_POST["ipcompra_"]));
$rpta=$enoperacion->Insertar_operacion();
return $rpta;
}

function CActualizar_operacion(){
$enoperacion=new Clase_operacion();
$enoperacion->setidoperacion(validar($_POST["idoperacion_"]));
$enoperacion->setfecha(validar($_POST["fecha_"]));
$enoperacion->setfecha_transcli(validar($_POST["fecha_transcli_"]));
$enoperacion->settipomov(validar($_POST["tipomov_"]));
$enoperacion->setmonto_operacion(validar($_POST["monto_operacion_"]));
$enoperacion->setidcuenta(validar($_POST["idcuenta_"]));
$enoperacion->setidtipo_operacion(validar($_POST["idtipo_operacion_"]));
$enoperacion->setestado_recarga(validar($_POST["estado_recarga_"]));
$enoperacion->setidsolicitud(validar($_POST["idsolicitud_"]));
$enoperacion->setidvehiculo(validar($_POST["idvehiculo_"]));
$enoperacion->setiduser(validar($_POST["iduser_"]));
$enoperacion->setnumorden(validar($_POST["numorden_"]));
$enoperacion->setnumtransac_sp(validar($_POST["numtransac_sp_"]));
$enoperacion->setmoneda(validar($_POST["moneda_"]));
$enoperacion->setresul_transac(validar($_POST["resul_transac_"]));
$enoperacion->setcod_accion(validar($_POST["cod_accion_"]));
$enoperacion->setdato_comercio(validar($_POST["dato_comercio_"]));
$enoperacion->setmediopago(validar($_POST["mediopago_"]));
$enoperacion->settiporesp(validar($_POST["tiporesp_"]));
$enoperacion->setcod_autoriz(validar($_POST["cod_autoriz_"]));
$enoperacion->setnumrefer(validar($_POST["numrefer_"]));
$enoperacion->sethash(validar($_POST["hash_"]));
$enoperacion->settipoprod_sp(validar($_POST["tipoprod_sp_"]));
$enoperacion->setntarjeta(validar($_POST["ntarjeta_"]));
$enoperacion->settarjetahab_visa(validar($_POST["tarjetahab_visa_"]));
$enoperacion->setipcompra(validar($_POST["ipcompra_"]));
$rpta=$enoperacion->Actualizar_operacion();
return $rpta;
}

function CEliminar_operacion(){
$enoperacion=new Clase_operacion();
$enoperacion->setidoperacion($_GET["id"]);
$rpta=$enoperacion->Eliminar_operacion();
return $rpta;
}

function CRecuperar_operacion(){
$enoperacion=new Clase_operacion();
$enoperacion->setidoperacion($_GET["id"]);
$rpta=$enoperacion->Recuperar_operacion();
return $rpta;
}

function CListar_operacion(){
$enoperacion=new Clase_operacion();
$rpta=$enoperacion->Listar_operacion();
return $rpta;
}

function CListadoSimple_operacion(){
$enoperacion=new Clase_operacion();
$rpta=$enoperacion->ListadoSimple_operacion();
return $rpta;
}

function CBuscar_operacion($id){
$enoperacion=new Clase_operacion();
$enoperacion->setidoperacion($id);
$rpta=$enoperacion->Buscar_operacion();
return $rpta;}
?>