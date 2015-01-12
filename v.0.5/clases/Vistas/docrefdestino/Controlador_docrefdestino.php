<?php
include_once "../../Modelado/Modelo_docrefdestino.php"; 
include_once "../validacion.php"; 
function CRegistrar_docrefdestino(){
$endocrefdestino=new Clase_docrefdestino();
$endocrefdestino->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocrefdestino->setcLugarOrigen(validar($_POST["cLugarOrigen_"]));
$endocrefdestino->setnOrigTipo(validar($_POST["nOrigTipo_"]));
$endocrefdestino->setcOrigDireccion(validar($_POST["cOrigDireccion_"]));
$endocrefdestino->setcOrigManz(validar($_POST["cOrigManz_"]));
$endocrefdestino->setcOrigLote(validar($_POST["cOrigLote_"]));
$endocrefdestino->setnOrigTipoRes(validar($_POST["nOrigTipoRes_"]));
$endocrefdestino->setcOrigResidencia(validar($_POST["cOrigResidencia_"]));
$endocrefdestino->setcLugarDestino(validar($_POST["cLugarDestino_"]));
$endocrefdestino->setnDestTipo(validar($_POST["nDestTipo_"]));
$endocrefdestino->setcDestDireccion(validar($_POST["cDestDireccion_"]));
$rpta=$endocrefdestino->Insertar_docrefdestino();
return $rpta;
}

function CActualizar_docrefdestino(){
$endocrefdestino=new Clase_docrefdestino();
$endocrefdestino->setcDocCodigo(validar($_POST["cDocCodigo_"]));
$endocrefdestino->setcLugarOrigen(validar($_POST["cLugarOrigen_"]));
$endocrefdestino->setnOrigTipo(validar($_POST["nOrigTipo_"]));
$endocrefdestino->setcOrigDireccion(validar($_POST["cOrigDireccion_"]));
$endocrefdestino->setcOrigManz(validar($_POST["cOrigManz_"]));
$endocrefdestino->setcOrigLote(validar($_POST["cOrigLote_"]));
$endocrefdestino->setnOrigTipoRes(validar($_POST["nOrigTipoRes_"]));
$endocrefdestino->setcOrigResidencia(validar($_POST["cOrigResidencia_"]));
$endocrefdestino->setcLugarDestino(validar($_POST["cLugarDestino_"]));
$endocrefdestino->setnDestTipo(validar($_POST["nDestTipo_"]));
$endocrefdestino->setcDestDireccion(validar($_POST["cDestDireccion_"]));
$rpta=$endocrefdestino->Actualizar_docrefdestino();
return $rpta;
}

function CEliminar_docrefdestino(){
$endocrefdestino=new Clase_docrefdestino();
$endocrefdestino->setcDocCodigo($_GET["id"]);
$rpta=$endocrefdestino->Eliminar_docrefdestino();
return $rpta;
}

function CRecuperar_docrefdestino(){
$endocrefdestino=new Clase_docrefdestino();
$endocrefdestino->setcDocCodigo($_GET["id"]);
$rpta=$endocrefdestino->Recuperar_docrefdestino();
return $rpta;
}

function CListar_docrefdestino(){
$endocrefdestino=new Clase_docrefdestino();
$rpta=$endocrefdestino->Listar_docrefdestino();
return $rpta;
}

function CListadoSimple_docrefdestino(){
$endocrefdestino=new Clase_docrefdestino();
$rpta=$endocrefdestino->ListadoSimple_docrefdestino();
return $rpta;
}

function CBuscar_docrefdestino($id){
$endocrefdestino=new Clase_docrefdestino();
$endocrefdestino->setcDocCodigo($id);
$rpta=$endocrefdestino->Buscar_docrefdestino();
return $rpta;}
?>