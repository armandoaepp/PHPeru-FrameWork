<?php
include_once "../../Modelado/Modelo_caserio.php"; 
include_once "../validacion.php"; 
function CRegistrar_caserio(){
$encaserio=new Clase_caserio();
$encaserio->setnCasCodigo(validar($_POST["nCasCodigo_"]));
$encaserio->setcCasDescripcion(validar($_POST["cCasDescripcion_"]));
$encaserio->setnDisCodigo(validar($_POST["nDisCodigo_"]));
$encaserio->setnCasEstado(validar($_POST["nCasEstado_"]));
$rpta=$encaserio->Insertar_caserio();
return $rpta;
}

function CActualizar_caserio(){
$encaserio=new Clase_caserio();
$encaserio->setnCasCodigo(validar($_POST["nCasCodigo_"]));
$encaserio->setcCasDescripcion(validar($_POST["cCasDescripcion_"]));
$encaserio->setnDisCodigo(validar($_POST["nDisCodigo_"]));
$encaserio->setnCasEstado(validar($_POST["nCasEstado_"]));
$rpta=$encaserio->Actualizar_caserio();
return $rpta;
}

function CEliminar_caserio(){
$encaserio=new Clase_caserio();
$encaserio->setnCasCodigo($_GET["id"]);
$rpta=$encaserio->Eliminar_caserio();
return $rpta;
}

function CRecuperar_caserio(){
$encaserio=new Clase_caserio();
$encaserio->setnCasCodigo($_GET["id"]);
$rpta=$encaserio->Recuperar_caserio();
return $rpta;
}

function CListar_caserio(){
$encaserio=new Clase_caserio();
$rpta=$encaserio->Listar_caserio();
return $rpta;
}

function CListadoSimple_caserio(){
$encaserio=new Clase_caserio();
$rpta=$encaserio->ListadoSimple_caserio();
return $rpta;
}

function CBuscar_caserio($id){
$encaserio=new Clase_caserio();
$encaserio->setnCasCodigo($id);
$rpta=$encaserio->Buscar_caserio();
return $rpta;}
?>