<?php
include_once "../../Modelado/Modelo_tipopago.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipopago(){
$entipopago=new Clase_tipopago();
$entipopago->setid_tipo_pago(validar($_POST["id_tipo_pago_"]));
$entipopago->settipo_pago(validar($_POST["tipo_pago_"]));
$entipopago->setestado("A");
$rpta=$entipopago->Insertar_tipopago();
return $rpta;
}

function CActualizar_tipopago(){
$entipopago=new Clase_tipopago();
$entipopago->setid_tipo_pago(validar($_POST["id_tipo_pago_"]));
$entipopago->settipo_pago(validar($_POST["tipo_pago_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$entipopago->setestado($estado);
$rpta=$entipopago->Actualizar_tipopago();
return $rpta;
}

function CEliminar_tipopago(){
$entipopago=new Clase_tipopago();
$entipopago->setid_tipo_pago($_GET["id"]);
$rpta=$entipopago->Eliminar_tipopago();
return $rpta;
}

function CRecuperar_tipopago(){
$entipopago=new Clase_tipopago();
$entipopago->setid_tipo_pago($_GET["id"]);
$rpta=$entipopago->Recuperar_tipopago();
return $rpta;
}

function CListar_tipopago(){
$entipopago=new Clase_tipopago();
$rpta=$entipopago->Listar_tipopago();
return $rpta;
}

function CListadoSimple_tipopago(){
$entipopago=new Clase_tipopago();
$rpta=$entipopago->ListadoSimple_tipopago();
return $rpta;
}

function CBuscar_tipopago($id){
$entipopago=new Clase_tipopago();
$entipopago->setid_tipo_pago($id);
$rpta=$entipopago->Buscar_tipopago();
return $rpta;}
?>