<?php
include_once "../../Modelado/Modelo_tipodocumento.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipodocumento(){
$entipodocumento=new Clase_tipodocumento();
$entipodocumento->setidtipodocumento(validar($_POST["idtipodocumento_"]));
$entipodocumento->settipodocumento(validar($_POST["tipodocumento_"]));
$entipodocumento->setestado("A");
$rpta=$entipodocumento->Insertar_tipodocumento();
return $rpta;
}

function CActualizar_tipodocumento(){
$entipodocumento=new Clase_tipodocumento();
$entipodocumento->setidtipodocumento(validar($_POST["idtipodocumento_"]));
$entipodocumento->settipodocumento(validar($_POST["tipodocumento_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$entipodocumento->setestado($estado);
$rpta=$entipodocumento->Actualizar_tipodocumento();
return $rpta;
}

function CEliminar_tipodocumento(){
$entipodocumento=new Clase_tipodocumento();
$entipodocumento->setidtipodocumento($_GET["id"]);
$rpta=$entipodocumento->Eliminar_tipodocumento();
return $rpta;
}

function CRecuperar_tipodocumento(){
$entipodocumento=new Clase_tipodocumento();
$entipodocumento->setidtipodocumento($_GET["id"]);
$rpta=$entipodocumento->Recuperar_tipodocumento();
return $rpta;
}

function CListar_tipodocumento(){
$entipodocumento=new Clase_tipodocumento();
$rpta=$entipodocumento->Listar_tipodocumento();
return $rpta;
}

function CListadoSimple_tipodocumento(){
$entipodocumento=new Clase_tipodocumento();
$rpta=$entipodocumento->ListadoSimple_tipodocumento();
return $rpta;
}

function CBuscar_tipodocumento($id){
$entipodocumento=new Clase_tipodocumento();
$entipodocumento->setidtipodocumento($id);
$rpta=$entipodocumento->Buscar_tipodocumento();
return $rpta;}
