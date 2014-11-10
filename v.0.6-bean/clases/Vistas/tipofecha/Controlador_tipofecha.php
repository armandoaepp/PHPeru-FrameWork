<?php
include_once "../../Modelado/Modelo_tipofecha.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipofecha(){
$entipofecha=new Clase_tipofecha();
$entipofecha->setidtipofecha(validar($_POST["idtipofecha_"]));
$entipofecha->settipofecha(validar($_POST["tipofecha_"]));
$entipofecha->setestado("A");
$rpta=$entipofecha->Insertar_tipofecha();
return $rpta;
}

function CActualizar_tipofecha(){
$entipofecha=new Clase_tipofecha();
$entipofecha->setidtipofecha(validar($_POST["idtipofecha_"]));
$entipofecha->settipofecha(validar($_POST["tipofecha_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$entipofecha->setestado($estado);
$rpta=$entipofecha->Actualizar_tipofecha();
return $rpta;
}

function CEliminar_tipofecha(){
$entipofecha=new Clase_tipofecha();
$entipofecha->setidtipofecha($_GET["id"]);
$rpta=$entipofecha->Eliminar_tipofecha();
return $rpta;
}

function CRecuperar_tipofecha(){
$entipofecha=new Clase_tipofecha();
$entipofecha->setidtipofecha($_GET["id"]);
$rpta=$entipofecha->Recuperar_tipofecha();
return $rpta;
}

function CListar_tipofecha(){
$entipofecha=new Clase_tipofecha();
$rpta=$entipofecha->Listar_tipofecha();
return $rpta;
}

function CListadoSimple_tipofecha(){
$entipofecha=new Clase_tipofecha();
$rpta=$entipofecha->ListadoSimple_tipofecha();
return $rpta;
}

function CBuscar_tipofecha($id){
$entipofecha=new Clase_tipofecha();
$entipofecha->setidtipofecha($id);
$rpta=$entipofecha->Buscar_tipofecha();
return $rpta;}
?>