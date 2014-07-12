<?php
include_once "../../Modelado/Modelo_perdocumento.php"; 
include_once "../validacion.php"; 
function CRegistrar_perdocumento(){
$enperdocumento=new Clase_perdocumento();
$enperdocumento->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperdocumento->setnPerDocTipo(validar($_POST["nPerDocTipo_"]));
$enperdocumento->setcPerDocNumero(validar($_POST["cPerDocNumero_"]));
$enperdocumento->setdPerDocCaducidad(validar($_POST["dPerDocCaducidad_"]));
$enperdocumento->setnPerDocCategoria(validar($_POST["nPerDocCategoria_"]));
$enperdocumento->setnPerDocEstado(validar($_POST["nPerDocEstado_"]));
$rpta=$enperdocumento->Insertar_perdocumento();
return $rpta;
}

function CActualizar_perdocumento(){
$enperdocumento=new Clase_perdocumento();
$enperdocumento->setcPerCodigo(validar($_POST["cPerCodigo_"]));
$enperdocumento->setnPerDocTipo(validar($_POST["nPerDocTipo_"]));
$enperdocumento->setcPerDocNumero(validar($_POST["cPerDocNumero_"]));
$enperdocumento->setdPerDocCaducidad(validar($_POST["dPerDocCaducidad_"]));
$enperdocumento->setnPerDocCategoria(validar($_POST["nPerDocCategoria_"]));
$enperdocumento->setnPerDocEstado(validar($_POST["nPerDocEstado_"]));
$rpta=$enperdocumento->Actualizar_perdocumento();
return $rpta;
}

function CEliminar_perdocumento(){
$enperdocumento=new Clase_perdocumento();
$enperdocumento->setcPerCodigo($_GET["id"]);
$rpta=$enperdocumento->Eliminar_perdocumento();
return $rpta;
}

function CRecuperar_perdocumento(){
$enperdocumento=new Clase_perdocumento();
$enperdocumento->setcPerCodigo($_GET["id"]);
$rpta=$enperdocumento->Recuperar_perdocumento();
return $rpta;
}

function CListar_perdocumento(){
$enperdocumento=new Clase_perdocumento();
$rpta=$enperdocumento->Listar_perdocumento();
return $rpta;
}

function CListadoSimple_perdocumento(){
$enperdocumento=new Clase_perdocumento();
$rpta=$enperdocumento->ListadoSimple_perdocumento();
return $rpta;
}

function CBuscar_perdocumento($id){
$enperdocumento=new Clase_perdocumento();
$enperdocumento->setcPerCodigo($id);
$rpta=$enperdocumento->Buscar_perdocumento();
return $rpta;}
?>