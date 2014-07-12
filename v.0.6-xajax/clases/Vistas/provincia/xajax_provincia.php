<?php
@require ("../xajax/xajax_core/xajax.inc.php") ; 
$xajax= new xajax();
$xajax->configure("javascript URI","../xajax/");
$xajax->configure("debug",false);

include_once "../../Modelado/Modelo_provincia.php"; 
include_once "../validacion.php";
include_once "../cixajax.php";

function XListar_provincia($post){
    $enprovincia=new Clase_provincia();
    $enprovincia->setProvinciaNombre(validar($post["ProvinciaNombre_"]));
    $data=$enprovincia->Listar_provincia();
    $cix=new CixAJAX();
    $Listar_provincia=$cix->ImprimeTableF("tablaprovincia",$data,"Editar","Eliminar","table");
    $objResp=new xajaxResponse();
    $objResp->assign("divListar","innerHTML", $Listar_provincia);
return $objResp;
}

function XNuevo_provincia($post){
    $titulo="Nuevo provincia";
    $objResp=new xajaxResponse();
    $objResp->assign("accion","value","Nuevo");
    $objResp->assign("TituloForm","innerHTML",   $titulo);
    $objResp->script("Mostrar()");
return $objResp;
}

function XActualizar_provincia($id){
    $enprovincia=new Clase_provincia();
    $enprovincia->setProvinciaId($id);
    $data=$enprovincia->Buscar_provincia();
    $titulo="Actualizar" provincia;
    $objResp=new xajaxResponse();
    $objResp->assign("accion","value","Actualizar");
    $objResp->assign("TituloForm","innerHTML",   $titulo);
    $objResp->assign("ProvinciaId_","value", $data["cuerpo"][0]["ProvinciaId"]);
    $objResp->assign("ProvinciaNombre_","value", $data["cuerpo"][0]["ProvinciaNombre"]);
    $objResp->assign("DepartamentoId_","value", $data["cuerpo"][0]["DepartamentoId"]);
    $objResp->assign("ubigeoProv_","value", $data["cuerpo"][0]["ubigeoProv"]);
    $objResp->script("mostrar()");
return $objResp;
}

function XRegistrar_provincia($post){
    $enprovincia=new Clase_provincia();
    $accion=$post["accion"];
    $enprovincia->setProvinciaId(validar($post["ProvinciaId_"]));
    $enprovincia->setProvinciaNombre(validar($post["ProvinciaNombre_"]));
    $enprovincia->setDepartamentoId(validar($post["DepartamentoId_"]));
    $enprovincia->setubigeoProv(validar($post["ubigeoProv_"]));
    $objResp=new xajaxResponse();
if($accion=="Nuevo"){
    $rpta=$enpais->Insertar_provincia();
    $objResp->alert("Datos Registrados Correctamente!");
}
else{
    $rpta=$enpais->Actualizar_provincia();
    $objResp->alert("Datos Actualizados  Correctamente!");
}
    $objResp->script("ocultar()");
    $objResp->script("vListar_pais()");
return $objResp;
}

function XVer($estado){
    if($estado==0) $valor="none";
    else $valor="";
    $objResp=new xajaxResponse();
    objResp->assign("divformulario","style.display",$valor);
return $objResp;
}

$flistar=& $xajax->registerFunction("XListar_provincia");
$flistar->setParameter(0,XAJAX_FORM_VALUES,"frmBuscar");

$fnuevo=& $xajax->registerFunction("XNuevo_provincia");

$feditar=& $xajax->registerFunction("XActualizar_provincia");
$feditar->setParameter(0,XAJAX_JS_VALUE,"id");

$fregistrar_pais=& $xajax->registerFunction("XRegistrar_provincia");
$fregistrar_pais->setParameter(0,XAJAX_FORM_VALUES,"frmRegistrar_provincia");

$feliminar=& $xajax->registerFunction("XEliminar_provincia");
$feliminar->setParameter(0,XAJAX_FORM_VALUES,"frmEliminar");

$fmostrar=& $xajax-> registerFunction("XVer");
$fmostrar->setParameter(0,XAJAX_JS_VALUE,1);

$focultar=& $xajax-> registerFunction("XVer");
$focultar->setParameter(0,XAJAX_JS_VALUE,0);

$xajax->processRequest();

?>