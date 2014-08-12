<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_cuentacorriente.php"; 
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
  $titulo= "Nuevo cuentacorriente";
  $rpta=CRegistrar_cuentacorriente();
  $contenido="Registrar_cuentacorriente.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_cuentacorriente();
  $rptamo=CBuscar_cuentacorriente($_GET["id"]);
  $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
  $nPerCtaCodigo=$rptamo["cuerpo"][0]["nPerCtaCodigo"];
  $nCtaCteTipo=$rptamo["cuerpo"][0]["nCtaCteTipo"];
  $nCtaCteItem=$rptamo["cuerpo"][0]["nCtaCteItem"];
  $fCtaCteImporte=$rptamo["cuerpo"][0]["fCtaCteImporte"];
  $nCtaCteCuota=$rptamo["cuerpo"][0]["nCtaCteCuota"];
  $nCtaCteEstado=$rptamo["cuerpo"][0]["nCtaCteEstado"];
  $dCtaCteFecVence=$rptamo["cuerpo"][0]["dCtaCteFecVence"];
  $dCtaCteFecPago=$rptamo["cuerpo"][0]["dCtaCteFecPago"];
  $dCtaCteFecEmis=$rptamo["cuerpo"][0]["dCtaCteFecEmis"];
  $dCtaCteFecRegistro=$rptamo["cuerpo"][0]["dCtaCteFecRegistro"];
  $cCtaCteGlosa=$rptamo["cuerpo"][0]["cCtaCteGlosa"];
  $nPrdCodigo=$rptamo["cuerpo"][0]["nPrdCodigo"];
  $nMonCodigo=$rptamo["cuerpo"][0]["nMonCodigo"];
  $contenido="Actualizar_cuentacorriente.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_cuentacorriente();
  header("Location: ../cuentacorriente");
break;
case "Recuperar":
  $rpta=CRecuperar_cuentacorriente();
break;
case "Listar":
       $titulo="Listar cuentacorriente";
       $data=CListar_cuentacorriente();
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
      $Listar_cuentacorriente=$cix->ImprimeTableP("tablacuentacorriente",$data,"?","?",10,$page,5);
   // $Listar_cuentacorriente=$cix->ImprimeTablePOB("tablacuentacorriente",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_cuentacorriente.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_cuentacorriente=CListadoSimple_cuentacorriente();
break;
case "Buscar":
 $rpta=CBuscar_cuentacorriente();
break;
case "Nuevo":
 $titulo= "Nuevo cuentacorriente";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_cuentacorriente.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_cuentacorriente($_GET["id"]);
 $cCtaCteRecibo=$rptamo["cuerpo"][0]["cCtaCteRecibo"];
 $nPerCtaCodigo=$rptamo["cuerpo"][0]["nPerCtaCodigo"];
 $nCtaCteTipo=$rptamo["cuerpo"][0]["nCtaCteTipo"];
 $nCtaCteItem=$rptamo["cuerpo"][0]["nCtaCteItem"];
 $fCtaCteImporte=$rptamo["cuerpo"][0]["fCtaCteImporte"];
 $nCtaCteCuota=$rptamo["cuerpo"][0]["nCtaCteCuota"];
 $nCtaCteEstado=$rptamo["cuerpo"][0]["nCtaCteEstado"];
 $dCtaCteFecVence=$rptamo["cuerpo"][0]["dCtaCteFecVence"];
 $dCtaCteFecPago=$rptamo["cuerpo"][0]["dCtaCteFecPago"];
 $dCtaCteFecEmis=$rptamo["cuerpo"][0]["dCtaCteFecEmis"];
 $dCtaCteFecRegistro=$rptamo["cuerpo"][0]["dCtaCteFecRegistro"];
 $cCtaCteGlosa=$rptamo["cuerpo"][0]["cCtaCteGlosa"];
 $nPrdCodigo=$rptamo["cuerpo"][0]["nPrdCodigo"];
 $nMonCodigo=$rptamo["cuerpo"][0]["nMonCodigo"];
 $titulo= "Actualizar cuentacorriente";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_cuentacorriente.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>