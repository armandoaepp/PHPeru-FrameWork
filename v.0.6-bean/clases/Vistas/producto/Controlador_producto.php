<?php
include_once "../../Modelado/Modelo_producto.php"; 
include_once "../validacion.php"; 
function CRegistrar_producto(){
$enproducto=new Clase_producto();
$enproducto->setidproducto(validar($_POST["idproducto_"]));
$enproducto->setproducto(validar($_POST["producto_"]));
$enproducto->setidcategoria(validar($_POST["idcategoria_"]));
$rpta=$enproducto->Insertar_producto();
return $rpta;
}

function CActualizar_producto(){
$enproducto=new Clase_producto();
$enproducto->setidproducto(validar($_POST["idproducto_"]));
$enproducto->setproducto(validar($_POST["producto_"]));
$enproducto->setidcategoria(validar($_POST["idcategoria_"]));
$rpta=$enproducto->Actualizar_producto();
return $rpta;
}

function CEliminar_producto(){
$enproducto=new Clase_producto();
$enproducto->setidproducto($_GET["id"]);
$rpta=$enproducto->Eliminar_producto();
return $rpta;
}

function CRecuperar_producto(){
$enproducto=new Clase_producto();
$enproducto->setidproducto($_GET["id"]);
$rpta=$enproducto->Recuperar_producto();
return $rpta;
}

function CListar_producto(){
$enproducto=new Clase_producto();
$rpta=$enproducto->Listar_producto();
return $rpta;
}

function CListadoSimple_producto(){
$enproducto=new Clase_producto();
$rpta=$enproducto->ListadoSimple_producto();
return $rpta;
}

function CBuscar_producto($id){
$enproducto=new Clase_producto();
$enproducto->setidproducto($id);
$rpta=$enproducto->Buscar_producto();
return $rpta;}
?>