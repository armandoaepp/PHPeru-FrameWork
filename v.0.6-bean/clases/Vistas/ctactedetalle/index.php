<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_ctactedetalle.php"; 
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
  $titulo= "Nuevo ctactedetalle";
  $rpta=CRegistrar_ctactedetalle();
  $contenido="Registrar_ctactedetalle.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_ctactedetalle();
  $rptamo=CBuscar_ctactedetalle($_GET["id"]);
  $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
  $Item=$rptamo["cuerpo"][0]["Item"];
  $nSerCodigo=$rptamo["cuerpo"][0]["nSerCodigo"];
  $nCtaCteCantidad=$rptamo["cuerpo"][0]["nCtaCteCantidad"];
  $nMoneda=$rptamo["cuerpo"][0]["nMoneda"];
  $fCtaCteTC=$rptamo["cuerpo"][0]["fCtaCteTC"];
  $fCtaCteIGV=$rptamo["cuerpo"][0]["fCtaCteIGV"];
  $fCtaCteDetimporte=$rptamo["cuerpo"][0]["fCtaCteDetimporte"];
  $dCtaCteDetRegistro=$rptamo["cuerpo"][0]["dCtaCteDetRegistro"];
  $nBieRegCodigo=$rptamo["cuerpo"][0]["nBieRegCodigo"];
  $nCtaCtedetEstado=$rptamo["cuerpo"][0]["nCtaCtedetEstado"];
  $contenido="Actualizar_ctactedetalle.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_ctactedetalle();
  header("Location: ../ctactedetalle");
break;
case "Recuperar":
  $rpta=CRecuperar_ctactedetalle();
break;
case "Listar":
       $titulo="Listar ctactedetalle";
       $data=CListar_ctactedetalle();
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
      $Listar_ctactedetalle=$cix->ImprimeTableP("tablactactedetalle",$data,"?","?",10,$page,5);
   // $Listar_ctactedetalle=$cix->ImprimeTablePOB("tablactactedetalle",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_ctactedetalle.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_ctactedetalle=CListadoSimple_ctactedetalle();
break;
case "Buscar":
 $rpta=CBuscar_ctactedetalle();
break;
case "Nuevo":
 $titulo= "Nuevo ctactedetalle";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_ctactedetalle.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_ctactedetalle($_GET["id"]);
 $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
 $Item=$rptamo["cuerpo"][0]["Item"];
 $nSerCodigo=$rptamo["cuerpo"][0]["nSerCodigo"];
 $nCtaCteCantidad=$rptamo["cuerpo"][0]["nCtaCteCantidad"];
 $nMoneda=$rptamo["cuerpo"][0]["nMoneda"];
 $fCtaCteTC=$rptamo["cuerpo"][0]["fCtaCteTC"];
 $fCtaCteIGV=$rptamo["cuerpo"][0]["fCtaCteIGV"];
 $fCtaCteDetimporte=$rptamo["cuerpo"][0]["fCtaCteDetimporte"];
 $dCtaCteDetRegistro=$rptamo["cuerpo"][0]["dCtaCteDetRegistro"];
 $nBieRegCodigo=$rptamo["cuerpo"][0]["nBieRegCodigo"];
 $nCtaCtedetEstado=$rptamo["cuerpo"][0]["nCtaCtedetEstado"];
 $titulo= "Actualizar ctactedetalle";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_ctactedetalle.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>