<?php
include_once "../../Modelado/Modelo_perusuario.php"; 
include_once "../validacion.php"; 
function CRegistrar_perusuario(){
$enperusuario=new Clase_perusuario();
$enperusuario->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperusuario->setcPerUsuCodigo(validar($_POST["cPerUsuCodigo_"]));
$enperusuario->setcPerUsuClave(validar($_POST["cPerUsuClave_"]));
$enperusuario->setnPerUsuEstado(validar($_POST["nPerUsuEstado_"]));
$rpta=$enperusuario->Insertar_perusuario();
return $rpta;
}

function CActualizar_perusuario(){
$enperusuario=new Clase_perusuario();
$enperusuario->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperusuario->setcPerUsuCodigo(validar($_POST["cPerUsuCodigo_"]));
$enperusuario->setcPerUsuClave(validar($_POST["cPerUsuClave_"]));
$enperusuario->setnPerUsuEstado(validar($_POST["nPerUsuEstado_"]));
$rpta=$enperusuario->Actualizar_perusuario();
return $rpta;
}

function CEliminar_perusuario(){
$enperusuario=new Clase_perusuario();
$enperusuario->setcPerCodigo($_GET["id"]);
$rpta=$enperusuario->Eliminar_perusuario();
return $rpta;
}

function CRecuperar_perusuario(){
$enperusuario=new Clase_perusuario();
$enperusuario->setcPerCodigo($_GET["id"]);
$rpta=$enperusuario->Recuperar_perusuario();
return $rpta;
}

function CListar_perusuario(){
$enperusuario=new Clase_perusuario();
$rpta=$enperusuario->Listar_perusuario();
return $rpta;
}

function CListadoSimple_perusuario(){
$enperusuario=new Clase_perusuario();
$rpta=$enperusuario->ListadoSimple_perusuario();
return $rpta;
}

function CBuscar_perusuario($id){
$enperusuario=new Clase_perusuario();
$enperusuario->setcPerCodigo($id);
$rpta=$enperusuario->Buscar_perusuario();
return $rpta;}
?>