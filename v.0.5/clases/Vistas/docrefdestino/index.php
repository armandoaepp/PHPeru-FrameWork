<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docrefdestino.php"; 
include_once "../cixphp.php"; 

$cix=new CixPHP();
if(isset($_GET["accion"])){
    $evento=$_GET["accion"];
} else if (isset($_POST["accion"])) {
   $evento = $_POST["accion"];
}else{
   $evento="Listar";
}
switch($evento){
case "Registrar":
  $titulo= "Nuevo docrefdestino";
  $rpta=CRegistrar_docrefdestino();
  $contenido="Registrar_docrefdestino.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docrefdestino();
  $rptamo=CBuscar_docrefdestino($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $cLugarOrigen=$rptamo["cuerpo"][0]["cLugarOrigen"];
  $nOrigTipo=$rptamo["cuerpo"][0]["nOrigTipo"];
  $cOrigDireccion=$rptamo["cuerpo"][0]["cOrigDireccion"];
  $cOrigManz=$rptamo["cuerpo"][0]["cOrigManz"];
  $cOrigLote=$rptamo["cuerpo"][0]["cOrigLote"];
  $nOrigTipoRes=$rptamo["cuerpo"][0]["nOrigTipoRes"];
  $cOrigResidencia=$rptamo["cuerpo"][0]["cOrigResidencia"];
  $cLugarDestino=$rptamo["cuerpo"][0]["cLugarDestino"];
  $nDestTipo=$rptamo["cuerpo"][0]["nDestTipo"];
  $cDestDireccion=$rptamo["cuerpo"][0]["cDestDireccion"];
  $contenido="Actualizar_docrefdestino.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docrefdestino();
  header("Location: ../docrefdestino");
break;
case "Recuperar":
  $rpta=CRecuperar_docrefdestino();
break;
case "Listar":
       $titulo="Listar docrefdestino";
       $data=CListar_docrefdestino();
       if(isset($_GET["pagina"])){
           $page=$_GET["pagina"];}
         else{$page=1;}
/*
      //para Ordenar Datos 
       if(isset($_GET["orden"])) {
          $orden=$_GET["orden"];
          }else{  $orden=-1;}// no ordenar po defecto
     //para Buscar Datos 
        if(isset($_POST["busca"])){ //viene del frm 
              $busca=$_POST["busca"];
         }else if(isset($_GET["busca"])){// viene de la pagina o del ordenar
              $busca=$_GET["busca"];
         }else{
         $busca=""; }
*/
      $Listar_docrefdestino=$cix->ImprimeTableP("tabladocrefdestino",$data,"?","?",10,$page,5);
   // $Listar_docrefdestino=$cix->ImprimeTablePOB("tabladocrefdestino",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docrefdestino.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docrefdestino=CListadoSimple_docrefdestino();
break;
case "Buscar":
 $rpta=CBuscar_docrefdestino();
break;
case "Nuevo":
 $titulo= "Nuevo docrefdestino";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docrefdestino.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docrefdestino($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $cLugarOrigen=$rptamo["cuerpo"][0]["cLugarOrigen"];
 $nOrigTipo=$rptamo["cuerpo"][0]["nOrigTipo"];
 $cOrigDireccion=$rptamo["cuerpo"][0]["cOrigDireccion"];
 $cOrigManz=$rptamo["cuerpo"][0]["cOrigManz"];
 $cOrigLote=$rptamo["cuerpo"][0]["cOrigLote"];
 $nOrigTipoRes=$rptamo["cuerpo"][0]["nOrigTipoRes"];
 $cOrigResidencia=$rptamo["cuerpo"][0]["cOrigResidencia"];
 $cLugarDestino=$rptamo["cuerpo"][0]["cLugarDestino"];
 $nDestTipo=$rptamo["cuerpo"][0]["nDestTipo"];
 $cDestDireccion=$rptamo["cuerpo"][0]["cDestDireccion"];
 $titulo= "Actualizar docrefdestino";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docrefdestino.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>