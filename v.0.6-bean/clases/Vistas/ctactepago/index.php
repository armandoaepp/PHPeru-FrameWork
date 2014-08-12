<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_ctactepago.php"; 
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
  $titulo= "Nuevo ctactepago";
  $rpta=CRegistrar_ctactepago();
  $contenido="Registrar_ctactepago.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_ctactepago();
  $rptamo=CBuscar_ctactepago($_GET["id"]);
  $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
  $nCtaCtePagCodigo=$rptamo["cuerpo"][0]["nCtaCtePagCodigo"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $nPerCtaCodigo=$rptamo["cuerpo"][0]["nPerCtaCodigo"];
  $nTurno=$rptamo["cuerpo"][0]["nTurno"];
  $nForPago=$rptamo["cuerpo"][0]["nForPago"];
  $nTipPago=$rptamo["cuerpo"][0]["nTipPago"];
  $cCtaCtePagNroOperacion=$rptamo["cuerpo"][0]["cCtaCtePagNroOperacion"];
  $dCtaCtePagfecha=$rptamo["cuerpo"][0]["dCtaCtePagfecha"];
  $CtaCtePagGlosa=$rptamo["cuerpo"][0]["CtaCtePagGlosa"];
  $fCtaCtePagImporte=$rptamo["cuerpo"][0]["fCtaCtePagImporte"];
  $contenido="Actualizar_ctactepago.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_ctactepago();
  header("Location: ../ctactepago");
break;
case "Recuperar":
  $rpta=CRecuperar_ctactepago();
break;
case "Listar":
       $titulo="Listar ctactepago";
       $data=CListar_ctactepago();
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
      $Listar_ctactepago=$cix->ImprimeTableP("tablactactepago",$data,"?","?",10,$page,5);
   // $Listar_ctactepago=$cix->ImprimeTablePOB("tablactactepago",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_ctactepago.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_ctactepago=CListadoSimple_ctactepago();
break;
case "Buscar":
 $rpta=CBuscar_ctactepago();
break;
case "Nuevo":
 $titulo= "Nuevo ctactepago";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_ctactepago.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_ctactepago($_GET["id"]);
 $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
 $nCtaCtePagCodigo=$rptamo["cuerpo"][0]["nCtaCtePagCodigo"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $nPerCtaCodigo=$rptamo["cuerpo"][0]["nPerCtaCodigo"];
 $nTurno=$rptamo["cuerpo"][0]["nTurno"];
 $nForPago=$rptamo["cuerpo"][0]["nForPago"];
 $nTipPago=$rptamo["cuerpo"][0]["nTipPago"];
 $cCtaCtePagNroOperacion=$rptamo["cuerpo"][0]["cCtaCtePagNroOperacion"];
 $dCtaCtePagfecha=$rptamo["cuerpo"][0]["dCtaCtePagfecha"];
 $CtaCtePagGlosa=$rptamo["cuerpo"][0]["CtaCtePagGlosa"];
 $fCtaCtePagImporte=$rptamo["cuerpo"][0]["fCtaCtePagImporte"];
 $titulo= "Actualizar ctactepago";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_ctactepago.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>