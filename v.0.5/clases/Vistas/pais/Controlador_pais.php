<?php
include_once "../../Modelado/Modelo_pais.php"; 
include_once "../validacion.php"; 
function CRegistrar_pais(){
$enpais=new Clase_pais();
$enpais->setnPaiCodigo(validar($_POST["nPaiCodigo_"]));
$enpais->setcPaiNombre(validar($_POST["cPaiNombre_"]));
$enpais->setnPaiEstado(validar($_POST["nPaiEstado_"]));
$rpta=$enpais->Insertar_pais();
return $rpta;
}

function CActualizar_pais(){
$enpais=new Clase_pais();
$enpais->setnPaiCodigo(validar($_POST["nPaiCodigo_"]));
$enpais->setcPaiNombre(validar($_POST["cPaiNombre_"]));
$enpais->setnPaiEstado(validar($_POST["nPaiEstado_"]));
$rpta=$enpais->Actualizar_pais();
return $rpta;
}

function CEliminar_pais(){
$enpais=new Clase_pais();
$enpais->setnPaiCodigo($_GET["id"]);
$rpta=$enpais->Eliminar_pais();
return $rpta;
}

function CRecuperar_pais(){
$enpais=new Clase_pais();
$enpais->setnPaiCodigo($_GET["id"]);
$rpta=$enpais->Recuperar_pais();
return $rpta;
}

function CListar_pais(){
$enpais=new Clase_pais();
$rpta=$enpais->Listar_pais();
return $rpta;
}

function CListadoSimple_pais(){
$enpais=new Clase_pais();
$rpta=$enpais->ListadoSimple_pais();
return $rpta;
}

function CBuscar_pais($id){
$enpais=new Clase_pais();
$enpais->setnPaiCodigo($id);
$rpta=$enpais->Buscar_pais();
return $rpta;}
?>