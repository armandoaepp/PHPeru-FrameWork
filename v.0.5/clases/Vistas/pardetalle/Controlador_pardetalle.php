<?php
include_once "../../Modelado/Modelo_pardetalle.php"; 
include_once "../validacion.php"; 
function CRegistrar_pardetalle(){
$enpardetalle=new Clase_pardetalle();
$enpardetalle->setnParCodigo(validar($_POST["nParCodigo_"]));
$enpardetalle->setnParClase(validar($_POST["nParClase_"]));
$enpardetalle->setnParItem(validar($_POST["nParItem_"]));
$enpardetalle->setnParItemS(validar($_POST["nParItemS_"]));
$enpardetalle->setcParDetValor(validar($_POST["cParDetValor_"]));
$enpardetalle->setcParDetGlosa(validar($_POST["cParDetGlosa_"]));
$rpta=$enpardetalle->Insertar_pardetalle();
return $rpta;
}

function CActualizar_pardetalle(){
$enpardetalle=new Clase_pardetalle();
$enpardetalle->setnParCodigo(validar($_POST["nParCodigo_"]));
$enpardetalle->setnParClase(validar($_POST["nParClase_"]));
$enpardetalle->setnParItem(validar($_POST["nParItem_"]));
$enpardetalle->setnParItemS(validar($_POST["nParItemS_"]));
$enpardetalle->setcParDetValor(validar($_POST["cParDetValor_"]));
$enpardetalle->setcParDetGlosa(validar($_POST["cParDetGlosa_"]));
$rpta=$enpardetalle->Actualizar_pardetalle();
return $rpta;
}

function CEliminar_pardetalle(){
$enpardetalle=new Clase_pardetalle();
$enpardetalle->setnParCodigo($_GET["id"]);
$rpta=$enpardetalle->Eliminar_pardetalle();
return $rpta;
}

function CRecuperar_pardetalle(){
$enpardetalle=new Clase_pardetalle();
$enpardetalle->setnParCodigo($_GET["id"]);
$rpta=$enpardetalle->Recuperar_pardetalle();
return $rpta;
}

function CListar_pardetalle(){
$enpardetalle=new Clase_pardetalle();
$rpta=$enpardetalle->Listar_pardetalle();
return $rpta;
}

function CListadoSimple_pardetalle(){
$enpardetalle=new Clase_pardetalle();
$rpta=$enpardetalle->ListadoSimple_pardetalle();
return $rpta;
}

function CBuscar_pardetalle($id){
$enpardetalle=new Clase_pardetalle();
$enpardetalle->setnParCodigo($id);
$rpta=$enpardetalle->Buscar_pardetalle();
return $rpta;}
?>