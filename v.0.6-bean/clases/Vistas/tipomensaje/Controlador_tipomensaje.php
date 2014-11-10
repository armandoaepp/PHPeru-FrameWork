<?php
include_once "../../Modelado/Modelo_tipomensaje.php"; 
include_once "../validacion.php"; 
function CRegistrar_tipomensaje(){
$entipomensaje=new Clase_tipomensaje();
$entipomensaje->setidtipomensaje(validar($_POST["idtipomensaje_"]));
$entipomensaje->settipomensaje(validar($_POST["tipomensaje_"]));
$entipomensaje->setestado("A");
$rpta=$entipomensaje->Insertar_tipomensaje();
return $rpta;
}

function CActualizar_tipomensaje(){
$entipomensaje=new Clase_tipomensaje();
$entipomensaje->setidtipomensaje(validar($_POST["idtipomensaje_"]));
$entipomensaje->settipomensaje(validar($_POST["tipomensaje_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$entipomensaje->setestado($estado);
$rpta=$entipomensaje->Actualizar_tipomensaje();
return $rpta;
}

function CEliminar_tipomensaje(){
$entipomensaje=new Clase_tipomensaje();
$entipomensaje->setidtipomensaje($_GET["id"]);
$rpta=$entipomensaje->Eliminar_tipomensaje();
return $rpta;
}

function CRecuperar_tipomensaje(){
$entipomensaje=new Clase_tipomensaje();
$entipomensaje->setidtipomensaje($_GET["id"]);
$rpta=$entipomensaje->Recuperar_tipomensaje();
return $rpta;
}

function CListar_tipomensaje(){
$entipomensaje=new Clase_tipomensaje();
$rpta=$entipomensaje->Listar_tipomensaje();
return $rpta;
}

function CListadoSimple_tipomensaje(){
$entipomensaje=new Clase_tipomensaje();
$rpta=$entipomensaje->ListadoSimple_tipomensaje();
return $rpta;
}

function CBuscar_tipomensaje($id){
$entipomensaje=new Clase_tipomensaje();
$entipomensaje->setidtipomensaje($id);
$rpta=$entipomensaje->Buscar_tipomensaje();
return $rpta;}
?>