<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_parparext.php"; 
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
  $titulo= "Nuevo parparext";
  $rpta=CRegistrar_parparext();
  $contenido="Registrar_parparext.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_parparext();
  $rptamo=CBuscar_parparext($_GET["id"]);
  $nIntSrcCodigo=$rptamo["cuerpo"][0]["nIntSrcCodigo"];
  $nIntSrcClase=$rptamo["cuerpo"][0]["nIntSrcClase"];
  $nIntDstCodigo=$rptamo["cuerpo"][0]["nIntDstCodigo"];
  $nIntDstClase=$rptamo["cuerpo"][0]["nIntDstClase"];
  $nObjCodigo=$rptamo["cuerpo"][0]["nObjCodigo"];
  $nObjTipo=$rptamo["cuerpo"][0]["nObjTipo"];
  $cValor=$rptamo["cuerpo"][0]["cValor"];
  $contenido="Actualizar_parparext.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_parparext();
  header("Location: ../parparext");
break;
case "Recuperar":
  $rpta=CRecuperar_parparext();
break;
case "Listar":
       $titulo="Listar parparext";
       $data=CListar_parparext();
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
      $Listar_parparext=$cix->ImprimeTableP("tablaparparext",$data,"?","?",10,$page,5);
   // $Listar_parparext=$cix->ImprimeTablePOB("tablaparparext",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_parparext.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_parparext=CListadoSimple_parparext();
break;
case "Buscar":
 $rpta=CBuscar_parparext();
break;
case "Nuevo":
 $titulo= "Nuevo parparext";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_parparext.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_parparext($_GET["id"]);
 $nIntSrcCodigo=$rptamo["cuerpo"][0]["nIntSrcCodigo"];
 $nIntSrcClase=$rptamo["cuerpo"][0]["nIntSrcClase"];
 $nIntDstCodigo=$rptamo["cuerpo"][0]["nIntDstCodigo"];
 $nIntDstClase=$rptamo["cuerpo"][0]["nIntDstClase"];
 $nObjCodigo=$rptamo["cuerpo"][0]["nObjCodigo"];
 $nObjTipo=$rptamo["cuerpo"][0]["nObjTipo"];
 $cValor=$rptamo["cuerpo"][0]["cValor"];
 $titulo= "Actualizar parparext";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_parparext.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>