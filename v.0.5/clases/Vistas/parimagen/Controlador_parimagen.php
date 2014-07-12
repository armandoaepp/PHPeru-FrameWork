<?php
include_once "../../Modelado/Modelo_parimagen.php"; 
include_once "../validacion.php"; 
function CRegistrar_parimagen(){
$enparimagen=new Clase_parimagen();
$enparimagen->setnParCodigo(validar($_POST["nParCodigo_"]));
$enparimagen->setnParClase(validar($_POST["nParClase_"]));
$enparimagen->setnParImgTipo(validar($_POST["nParImgTipo_"]));
$enparimagen->setcParImgRuta(validar($_POST["cParImgRuta_"]));
$enparimagen->setcParImgGlosa(validar($_POST["cParImgGlosa_"]));
$enparimagen->setnParImgEstado(validar($_POST["nParImgEstado_"]));
$rpta=$enparimagen->Insertar_parimagen();
return $rpta;
}

function CActualizar_parimagen(){
$enparimagen=new Clase_parimagen();
$enparimagen->setnParCodigo(validar($_POST["nParCodigo_"]));
$enparimagen->setnParClase(validar($_POST["nParClase_"]));
$enparimagen->setnParImgTipo(validar($_POST["nParImgTipo_"]));
$enparimagen->setcParImgRuta(validar($_POST["cParImgRuta_"]));
$enparimagen->setcParImgGlosa(validar($_POST["cParImgGlosa_"]));
$enparimagen->setnParImgEstado(validar($_POST["nParImgEstado_"]));
$rpta=$enparimagen->Actualizar_parimagen();
return $rpta;
}

function CEliminar_parimagen(){
$enparimagen=new Clase_parimagen();
$enparimagen->setnParCodigo($_GET["id"]);
$rpta=$enparimagen->Eliminar_parimagen();
return $rpta;
}

function CRecuperar_parimagen(){
$enparimagen=new Clase_parimagen();
$enparimagen->setnParCodigo($_GET["id"]);
$rpta=$enparimagen->Recuperar_parimagen();
return $rpta;
}

function CListar_parimagen(){
$enparimagen=new Clase_parimagen();
$rpta=$enparimagen->Listar_parimagen();
return $rpta;
}

function CListadoSimple_parimagen(){
$enparimagen=new Clase_parimagen();
$rpta=$enparimagen->ListadoSimple_parimagen();
return $rpta;
}

function CBuscar_parimagen($id){
$enparimagen=new Clase_parimagen();
$enparimagen->setnParCodigo($id);
$rpta=$enparimagen->Buscar_parimagen();
return $rpta;}
?>