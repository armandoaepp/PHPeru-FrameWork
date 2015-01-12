<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docvigencia.php"; 
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
  $titulo= "Nuevo docvigencia";
  $rpta=CRegistrar_docvigencia();
  $contenido="Registrar_docvigencia.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docvigencia();
  $rptamo=CBuscar_docvigencia($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $dFecha=$rptamo["cuerpo"][0]["dFecha"];
  $dFechaFin=$rptamo["cuerpo"][0]["dFechaFin"];
  $dHora=$rptamo["cuerpo"][0]["dHora"];
  $contenido="Actualizar_docvigencia.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docvigencia();
  header("Location: ../docvigencia");
break;
case "Recuperar":
  $rpta=CRecuperar_docvigencia();
break;
case "Listar":
       $titulo="Listar docvigencia";
       $data=CListar_docvigencia();
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
      $Listar_docvigencia=$cix->ImprimeTableP("tabladocvigencia",$data,"?","?",10,$page,5);
   // $Listar_docvigencia=$cix->ImprimeTablePOB("tabladocvigencia",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docvigencia.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docvigencia=CListadoSimple_docvigencia();
break;
case "Buscar":
 $rpta=CBuscar_docvigencia();
break;
case "Nuevo":
 $titulo= "Nuevo docvigencia";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docvigencia.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docvigencia($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $dFecha=$rptamo["cuerpo"][0]["dFecha"];
 $dFechaFin=$rptamo["cuerpo"][0]["dFechaFin"];
 $dHora=$rptamo["cuerpo"][0]["dHora"];
 $titulo= "Actualizar docvigencia";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docvigencia.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>