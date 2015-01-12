<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_doccomprobante.php"; 
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
  $titulo= "Nuevo doccomprobante";
  $rpta=CRegistrar_doccomprobante();
  $contenido="Registrar_doccomprobante.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_doccomprobante();
  $rptamo=CBuscar_doccomprobante($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nTipo=$rptamo["cuerpo"][0]["nTipo"];
  $nMoneda=$rptamo["cuerpo"][0]["nMoneda"];
  $fmonto=$rptamo["cuerpo"][0]["fmonto"];
  $contenido="Actualizar_doccomprobante.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_doccomprobante();
  header("Location: ../doccomprobante");
break;
case "Recuperar":
  $rpta=CRecuperar_doccomprobante();
break;
case "Listar":
       $titulo="Listar doccomprobante";
       $data=CListar_doccomprobante();
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
      $Listar_doccomprobante=$cix->ImprimeTableP("tabladoccomprobante",$data,"?","?",10,$page,5);
   // $Listar_doccomprobante=$cix->ImprimeTablePOB("tabladoccomprobante",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_doccomprobante.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_doccomprobante=CListadoSimple_doccomprobante();
break;
case "Buscar":
 $rpta=CBuscar_doccomprobante();
break;
case "Nuevo":
 $titulo= "Nuevo doccomprobante";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_doccomprobante.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_doccomprobante($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nTipo=$rptamo["cuerpo"][0]["nTipo"];
 $nMoneda=$rptamo["cuerpo"][0]["nMoneda"];
 $fmonto=$rptamo["cuerpo"][0]["fmonto"];
 $titulo= "Actualizar doccomprobante";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_doccomprobante.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>