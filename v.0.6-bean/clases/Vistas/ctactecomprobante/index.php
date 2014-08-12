<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_ctactecomprobante.php"; 
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
  $titulo= "Nuevo ctactecomprobante";
  $rpta=CRegistrar_ctactecomprobante();
  $contenido="Registrar_ctactecomprobante.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_ctactecomprobante();
  $rptamo=CBuscar_ctactecomprobante($_GET["id"]);
  $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
  $nCtaCteComCodigo=$rptamo["cuerpo"][0]["nCtaCteComCodigo"];
  $cCtaCteComNumero=$rptamo["cuerpo"][0]["cCtaCteComNumero"];
  $nCtaCteTipoPago=$rptamo["cuerpo"][0]["nCtaCteTipoPago"];
  $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
  $contenido="Actualizar_ctactecomprobante.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_ctactecomprobante();
  header("Location: ../ctactecomprobante");
break;
case "Recuperar":
  $rpta=CRecuperar_ctactecomprobante();
break;
case "Listar":
       $titulo="Listar ctactecomprobante";
       $data=CListar_ctactecomprobante();
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
      $Listar_ctactecomprobante=$cix->ImprimeTableP("tablactactecomprobante",$data,"?","?",10,$page,5);
   // $Listar_ctactecomprobante=$cix->ImprimeTablePOB("tablactactecomprobante",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_ctactecomprobante.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_ctactecomprobante=CListadoSimple_ctactecomprobante();
break;
case "Buscar":
 $rpta=CBuscar_ctactecomprobante();
break;
case "Nuevo":
 $titulo= "Nuevo ctactecomprobante";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_ctactecomprobante.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_ctactecomprobante($_GET["id"]);
 $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
 $nCtaCteComCodigo=$rptamo["cuerpo"][0]["nCtaCteComCodigo"];
 $cCtaCteComNumero=$rptamo["cuerpo"][0]["cCtaCteComNumero"];
 $nCtaCteTipoPago=$rptamo["cuerpo"][0]["nCtaCteTipoPago"];
 $cPerCodigo=$rptamo["cuerpo"][0]["cPerCodigo"];
 $titulo= "Actualizar ctactecomprobante";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_ctactecomprobante.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>