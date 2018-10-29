<?php
include_once "../../Modelado/Modelo_config.php"; 
include_once "../validacion.php"; 
function CRegistrar_config(){
$enconfig=new Clase_config();
$enconfig->setidconfig(validar($_POST["idconfig_"]));
$enconfig->setidtipoentidad(validar($_POST["idtipoentidad_"]));
$enconfig->setidvalor(validar($_POST["idvalor_"]));
$enconfig->setvalor(validar($_POST["valor_"]));
$enconfig->setreferencia(validar($_POST["referencia_"]));
$enconfig->setestado("A");
$rpta=$enconfig->Insertar_config();
return $rpta;
}

function CActualizar_config(){
$enconfig=new Clase_config();
$enconfig->setidconfig(validar($_POST["idconfig_"]));
$enconfig->setidtipoentidad(validar($_POST["idtipoentidad_"]));
$enconfig->setidvalor(validar($_POST["idvalor_"]));
$enconfig->setvalor(validar($_POST["valor_"]));
$enconfig->setreferencia(validar($_POST["referencia_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$enconfig->setestado($estado);
$rpta=$enconfig->Actualizar_config();
return $rpta;
}

function CEliminar_config(){
$enconfig=new Clase_config();
$enconfig->setidconfig($_GET["id"]);
$rpta=$enconfig->Eliminar_config();
return $rpta;
}

function CRecuperar_config(){
$enconfig=new Clase_config();
$enconfig->setidconfig($_GET["id"]);
$rpta=$enconfig->Recuperar_config();
return $rpta;
}

function CListar_config(){
$enconfig=new Clase_config();
$rpta=$enconfig->Listar_config();
return $rpta;
}

function CListadoSimple_config(){
$enconfig=new Clase_config();
$rpta=$enconfig->ListadoSimple_config();
return $rpta;
}

function CBuscar_config($id){
$enconfig=new Clase_config();
$enconfig->setidconfig($id);
$rpta=$enconfig->Buscar_config();
return $rpta;}
