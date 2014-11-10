<?php
include_once "../../Modelado/Modelo_negociacion.php"; 
include_once "../validacion.php"; 
function CRegistrar_negociacion(){
$ennegociacion=new Clase_negociacion();
$ennegociacion->setidnegociacion(validar($_POST["idnegociacion_"]));
$ennegociacion->setimporte(validar($_POST["importe_"]));
$ennegociacion->setfecha(validar($_POST["fecha_"]));
$ennegociacion->setokcliente(validar($_POST["okcliente_"]));
$ennegociacion->setoktransp(validar($_POST["oktransp_"]));
$ennegociacion->setestado("A");
$ennegociacion->setidsolicitud(validar($_POST["idsolicitud_"]));
$ennegociacion->setidoperador(validar($_POST["idoperador_"]));
$ennegociacion->setidusuario(validar($_POST["idusuario_"]));
$ennegociacion->setidvehiculo(validar($_POST["idvehiculo_"]));
$rpta=$ennegociacion->Insertar_negociacion();
return $rpta;
}

function CActualizar_negociacion(){
$ennegociacion=new Clase_negociacion();
$ennegociacion->setidnegociacion(validar($_POST["idnegociacion_"]));
$ennegociacion->setimporte(validar($_POST["importe_"]));
$ennegociacion->setfecha(validar($_POST["fecha_"]));
$ennegociacion->setokcliente(validar($_POST["okcliente_"]));
$ennegociacion->setoktransp(validar($_POST["oktransp_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$ennegociacion->setestado($estado);
$ennegociacion->setidsolicitud(validar($_POST["idsolicitud_"]));
$ennegociacion->setidoperador(validar($_POST["idoperador_"]));
$ennegociacion->setidusuario(validar($_POST["idusuario_"]));
$ennegociacion->setidvehiculo(validar($_POST["idvehiculo_"]));
$rpta=$ennegociacion->Actualizar_negociacion();
return $rpta;
}

function CEliminar_negociacion(){
$ennegociacion=new Clase_negociacion();
$ennegociacion->setidnegociacion($_GET["id"]);
$rpta=$ennegociacion->Eliminar_negociacion();
return $rpta;
}

function CRecuperar_negociacion(){
$ennegociacion=new Clase_negociacion();
$ennegociacion->setidnegociacion($_GET["id"]);
$rpta=$ennegociacion->Recuperar_negociacion();
return $rpta;
}

function CListar_negociacion(){
$ennegociacion=new Clase_negociacion();
$rpta=$ennegociacion->Listar_negociacion();
return $rpta;
}

function CListadoSimple_negociacion(){
$ennegociacion=new Clase_negociacion();
$rpta=$ennegociacion->ListadoSimple_negociacion();
return $rpta;
}

function CBuscar_negociacion($id){
$ennegociacion=new Clase_negociacion();
$ennegociacion->setidnegociacion($id);
$rpta=$ennegociacion->Buscar_negociacion();
return $rpta;}
?>