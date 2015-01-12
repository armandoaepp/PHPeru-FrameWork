<?php
include_once "../../Modelado/Modelo_pais.php"; 
include_once "../validacion.php"; 
function CRegistrar_pais(){
$enpais=new Clase_pais();
$enpais->setPaisId(validar($_POST["PaisId_"]));
$enpais->setPaisNombre(validar($_POST["PaisNombre_"]));
$rpta=$enpais->Insertar_pais();
return $rpta;
}

function CActualizar_pais(){
$enpais=new Clase_pais();
$enpais->setPaisId(validar($_POST["PaisId_"]));
$enpais->setPaisNombre(validar($_POST["PaisNombre_"]));
$rpta=$enpais->Actualizar_pais();
return $rpta;
}

function CEliminar_pais(){
$enpais=new Clase_pais();
$enpais->setPaisId($_GET["id"]);
$rpta=$enpais->Eliminar_pais();
return $rpta;
}

function CRecuperar_pais(){
$enpais=new Clase_pais();
$enpais->setPaisId($_GET["id"]);
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
$enpais->setPaisId($id);
$rpta=$enpais->Buscar_pais();
return $rpta;}
?>