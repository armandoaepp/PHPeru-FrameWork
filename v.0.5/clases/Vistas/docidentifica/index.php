<?php 
ob_start();
//Armando Enrique Pisfil Puemape tw: @armandoaepp
include_once "./Controlador_docidentifica.php"; 
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
  $titulo= "Nuevo docidentifica";
  $rpta=CRegistrar_docidentifica();
  $contenido="Registrar_docidentifica.php";
  $accionf= "?accion=Registrar";
  require_once "../layout.php";
break;
case "Actualizar":
  $rpta=CActualizar_docidentifica();
  $rptamo=CBuscar_docidentifica($_GET["id"]);
  $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
  $nDocTipoNum=$rptamo["cuerpo"][0]["nDocTipoNum"];
  $cDocNDoc=$rptamo["cuerpo"][0]["cDocNDoc"];
  $contenido="Actualizar_docidentifica.php";
  $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
require_once "../layout.php";
break;
case "Eliminar":
  $rpta=CEliminar_docidentifica();
  header("Location: ../docidentifica");
break;
case "Recuperar":
  $rpta=CRecuperar_docidentifica();
break;
case "Listar":
       $titulo="Listar docidentifica";
       $data=CListar_docidentifica();
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
      $Listar_docidentifica=$cix->ImprimeTableP("tabladocidentifica",$data,"?","?",10,$page,5);
   // $Listar_docidentifica=$cix->ImprimeTablePOB("tabladocidentifica",$data,"?","?",10,$page,5,$orden,$buscar);
     $contenido="Listar_docidentifica.php";
      require_once "../layout.php";
break;
case "Listarsimple":
 $Listarsimple_docidentifica=CListadoSimple_docidentifica();
break;
case "Buscar":
 $rpta=CBuscar_docidentifica();
break;
case "Nuevo":
 $titulo= "Nuevo docidentifica";
 $accionf= "?accion=Registrar";
 $contenido="Registrar_docidentifica.php";
 require_once "../layout.php";
break;
case "Mactualizar":
 $rptamo=CBuscar_docidentifica($_GET["id"]);
 $cDocCodigo=$rptamo["cuerpo"][0]["cDocCodigo"];
 $nDocTipoNum=$rptamo["cuerpo"][0]["nDocTipoNum"];
 $cDocNDoc=$rptamo["cuerpo"][0]["cDocNDoc"];
 $titulo= "Actualizar docidentifica";
 $accionf= "?id=".$_GET["id"]."&accion=Actualizar";
 $contenido="Actualizar_docidentifica.php";
 require_once "../layout.php";
break;
}
ob_flush();
?>