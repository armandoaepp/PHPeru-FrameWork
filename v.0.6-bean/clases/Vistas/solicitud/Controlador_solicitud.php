<?php
include_once "../../Modelado/Modelo_solicitud.php"; 
include_once "../validacion.php"; 
function CRegistrar_solicitud(){
$ensolicitud=new Clase_solicitud();
$ensolicitud->setidsolicitud(validar($_POST["idsolicitud_"]));
$ensolicitud->setfecha_ini(validar($_POST["fecha_ini_"]));
$ensolicitud->setfecha_fin(validar($_POST["fecha_fin_"]));
$ensolicitud->setpeso(validar($_POST["peso_"]));
$ensolicitud->setvolumen(validar($_POST["volumen_"]));
$ensolicitud->setdireccion_origen(validar($_POST["direccion_origen_"]));
$ensolicitud->setdireccion_destino(validar($_POST["direccion_destino_"]));
$ensolicitud->setpuntuacion(validar($_POST["puntuacion_"]));
$ensolicitud->setimporte(validar($_POST["importe_"]));
$ensolicitud->setcomision(validar($_POST["comision_"]));
$ensolicitud->setestado("A");
$ensolicitud->setfechareg(validar($_POST["fechareg_"]));
$ensolicitud->setidusuario(validar($_POST["idusuario_"]));
$ensolicitud->settipopago(validar($_POST["tipopago_"]));
$ensolicitud->settipotiempo(validar($_POST["tipotiempo_"]));
$ensolicitud->setcantiempo(validar($_POST["cantiempo_"]));
$ensolicitud->setubigeo_origen(validar($_POST["ubigeo_origen_"]));
$ensolicitud->setubigeo_destino(validar($_POST["ubigeo_destino_"]));
$ensolicitud->setidoperador(validar($_POST["idoperador_"]));
$ensolicitud->setdescripcion(validar($_POST["descripcion_"]));
$ensolicitud->setidproducto(validar($_POST["idproducto_"]));
$ensolicitud->setidvehiculo(validar($_POST["idvehiculo_"]));
$ensolicitud->setoferta_inicial(validar($_POST["oferta_inicial_"]));
$ensolicitud->seturgente(validar($_POST["urgente_"]));
$rpta=$ensolicitud->Insertar_solicitud();
return $rpta;
}

function CActualizar_solicitud(){
$ensolicitud=new Clase_solicitud();
$ensolicitud->setidsolicitud(validar($_POST["idsolicitud_"]));
$ensolicitud->setfecha_ini(validar($_POST["fecha_ini_"]));
$ensolicitud->setfecha_fin(validar($_POST["fecha_fin_"]));
$ensolicitud->setpeso(validar($_POST["peso_"]));
$ensolicitud->setvolumen(validar($_POST["volumen_"]));
$ensolicitud->setdireccion_origen(validar($_POST["direccion_origen_"]));
$ensolicitud->setdireccion_destino(validar($_POST["direccion_destino_"]));
$ensolicitud->setpuntuacion(validar($_POST["puntuacion_"]));
$ensolicitud->setimporte(validar($_POST["importe_"]));
$ensolicitud->setcomision(validar($_POST["comision_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$ensolicitud->setestado($estado);
$ensolicitud->setfechareg(validar($_POST["fechareg_"]));
$ensolicitud->setidusuario(validar($_POST["idusuario_"]));
$ensolicitud->settipopago(validar($_POST["tipopago_"]));
$ensolicitud->settipotiempo(validar($_POST["tipotiempo_"]));
$ensolicitud->setcantiempo(validar($_POST["cantiempo_"]));
$ensolicitud->setubigeo_origen(validar($_POST["ubigeo_origen_"]));
$ensolicitud->setubigeo_destino(validar($_POST["ubigeo_destino_"]));
$ensolicitud->setidoperador(validar($_POST["idoperador_"]));
$ensolicitud->setdescripcion(validar($_POST["descripcion_"]));
$ensolicitud->setidproducto(validar($_POST["idproducto_"]));
$ensolicitud->setidvehiculo(validar($_POST["idvehiculo_"]));
$ensolicitud->setoferta_inicial(validar($_POST["oferta_inicial_"]));
$ensolicitud->seturgente(validar($_POST["urgente_"]));
$rpta=$ensolicitud->Actualizar_solicitud();
return $rpta;
}

function CEliminar_solicitud(){
$ensolicitud=new Clase_solicitud();
$ensolicitud->setidsolicitud($_GET["id"]);
$rpta=$ensolicitud->Eliminar_solicitud();
return $rpta;
}

function CRecuperar_solicitud(){
$ensolicitud=new Clase_solicitud();
$ensolicitud->setidsolicitud($_GET["id"]);
$rpta=$ensolicitud->Recuperar_solicitud();
return $rpta;
}

function CListar_solicitud(){
$ensolicitud=new Clase_solicitud();
$rpta=$ensolicitud->Listar_solicitud();
return $rpta;
}

function CListadoSimple_solicitud(){
$ensolicitud=new Clase_solicitud();
$rpta=$ensolicitud->ListadoSimple_solicitud();
return $rpta;
}

function CBuscar_solicitud($id){
$ensolicitud=new Clase_solicitud();
$ensolicitud->setidsolicitud($id);
$rpta=$ensolicitud->Buscar_solicitud();
return $rpta;}
?>