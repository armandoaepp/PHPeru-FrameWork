<?php
include_once "../../Modelado/Modelo_perusuacceso.php"; 
include_once "../validacion.php"; 
function CRegistrar_perusuacceso(){
$enperusuacceso=new Clase_perusuacceso();
$enperusuacceso->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperusuacceso->setnPerUsuAccGrupo(validar($_POST["nPerUsuAccGrupo_"]));
$enperusuacceso->setnPerUsuAccTipo(validar($_POST["nPerUsuAccTipo_"]));
$enperusuacceso->setnPerUsuAccObjCodigo(validar($_POST["nPerUsuAccObjCodigo_"]));
$enperusuacceso->setnPerUsuAccCodigo(validar($_POST["nPerUsuAccCodigo_"]));
$enperusuacceso->setnPerUsuAccPrdCodigo(validar($_POST["nPerUsuAccPrdCodigo_"]));
$enperusuacceso->setnPerUsuAccEstado(validar($_POST["nPerUsuAccEstado_"]));
$rpta=$enperusuacceso->Insertar_perusuacceso();
return $rpta;
}

function CActualizar_perusuacceso(){
$enperusuacceso=new Clase_perusuacceso();
$enperusuacceso->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperusuacceso->setnPerUsuAccGrupo(validar($_POST["nPerUsuAccGrupo_"]));
$enperusuacceso->setnPerUsuAccTipo(validar($_POST["nPerUsuAccTipo_"]));
$enperusuacceso->setnPerUsuAccObjCodigo(validar($_POST["nPerUsuAccObjCodigo_"]));
$enperusuacceso->setnPerUsuAccCodigo(validar($_POST["nPerUsuAccCodigo_"]));
$enperusuacceso->setnPerUsuAccPrdCodigo(validar($_POST["nPerUsuAccPrdCodigo_"]));
$enperusuacceso->setnPerUsuAccEstado(validar($_POST["nPerUsuAccEstado_"]));
$rpta=$enperusuacceso->Actualizar_perusuacceso();
return $rpta;
}

function CEliminar_perusuacceso(){
$enperusuacceso=new Clase_perusuacceso();
$enperusuacceso->setcPerCodigo($_GET["id"]);
$rpta=$enperusuacceso->Eliminar_perusuacceso();
return $rpta;
}

function CRecuperar_perusuacceso(){
$enperusuacceso=new Clase_perusuacceso();
$enperusuacceso->setcPerCodigo($_GET["id"]);
$rpta=$enperusuacceso->Recuperar_perusuacceso();
return $rpta;
}

function CListar_perusuacceso(){
$enperusuacceso=new Clase_perusuacceso();
$rpta=$enperusuacceso->Listar_perusuacceso();
return $rpta;
}

function CListadoSimple_perusuacceso(){
$enperusuacceso=new Clase_perusuacceso();
$rpta=$enperusuacceso->ListadoSimple_perusuacceso();
return $rpta;
}

function CBuscar_perusuacceso($id){
$enperusuacceso=new Clase_perusuacceso();
$enperusuacceso->setcPerCodigo($id);
$rpta=$enperusuacceso->Buscar_perusuacceso();
return $rpta;}
?>