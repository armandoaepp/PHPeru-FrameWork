<?php
include_once "../../Modelado/Modelo_categoria.php"; 
include_once "../validacion.php"; 
function CRegistrar_categoria(){
$encategoria=new Clase_categoria();
$encategoria->setidcategoria(validar($_POST["idcategoria_"]));
$encategoria->setcategoria(validar($_POST["categoria_"]));
$rpta=$encategoria->Insertar_categoria();
return $rpta;
}

function CActualizar_categoria(){
$encategoria=new Clase_categoria();
$encategoria->setidcategoria(validar($_POST["idcategoria_"]));
$encategoria->setcategoria(validar($_POST["categoria_"]));
$rpta=$encategoria->Actualizar_categoria();
return $rpta;
}

function CEliminar_categoria(){
$encategoria=new Clase_categoria();
$encategoria->setidcategoria($_GET["id"]);
$rpta=$encategoria->Eliminar_categoria();
return $rpta;
}

function CRecuperar_categoria(){
$encategoria=new Clase_categoria();
$encategoria->setidcategoria($_GET["id"]);
$rpta=$encategoria->Recuperar_categoria();
return $rpta;
}

function CListar_categoria(){
$encategoria=new Clase_categoria();
$rpta=$encategoria->Listar_categoria();
return $rpta;
}

function CListadoSimple_categoria(){
$encategoria=new Clase_categoria();
$rpta=$encategoria->ListadoSimple_categoria();
return $rpta;
}

function CBuscar_categoria($id){
$encategoria=new Clase_categoria();
$encategoria->setidcategoria($id);
$rpta=$encategoria->Buscar_categoria();
return $rpta;}
?>