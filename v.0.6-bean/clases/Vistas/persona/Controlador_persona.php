<?php
include_once "../../Modelado/Modelo_persona.php"; 
include_once "../validacion.php"; 
function CRegistrar_persona(){
$enpersona=new Clase_persona();
$enpersona->setidpersona(validar($_POST["idpersona_"]));
$enpersona->setnombre(validar($_POST["nombre_"]));
$enpersona->setnacimiento(validar($_POST["nacimiento_"]));
$enpersona->settipo(validar($_POST["tipo_"]));
$enpersona->setestado("A");
$rpta=$enpersona->Insertar_persona();
return $rpta;
}

function CActualizar_persona(){
$enpersona=new Clase_persona();
$enpersona->setidpersona(validar($_POST["idpersona_"]));
$enpersona->setnombre(validar($_POST["nombre_"]));
$enpersona->setnacimiento(validar($_POST["nacimiento_"]));
$enpersona->settipo(validar($_POST["tipo_"]));
if(isset($_POST["estado_"])){
$estado="A";
}else{
$estado="E";
}
$enpersona->setestado($estado);
$rpta=$enpersona->Actualizar_persona();
return $rpta;
}

function CEliminar_persona(){
$enpersona=new Clase_persona();
$enpersona->setidpersona($_GET["id"]);
$rpta=$enpersona->Eliminar_persona();
return $rpta;
}

function CRecuperar_persona(){
$enpersona=new Clase_persona();
$enpersona->setidpersona($_GET["id"]);
$rpta=$enpersona->Recuperar_persona();
return $rpta;
}

function CListar_persona(){
$enpersona=new Clase_persona();
$rpta=$enpersona->Listar_persona();
return $rpta;
}

function CListadoSimple_persona(){
$enpersona=new Clase_persona();
$rpta=$enpersona->ListadoSimple_persona();
return $rpta;
}

function CBuscar_persona($id){
$enpersona=new Clase_persona();
$enpersona->setidpersona($id);
$rpta=$enpersona->Buscar_persona();
return $rpta;}
